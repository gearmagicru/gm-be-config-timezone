<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\TimeZone\Controller;

use Gm;
use Gm\Panel\Helper\ExtCombo;
use Gm\Panel\Widget\EditWindow;
use Gm\Backend\Config\Controller\ServiceForm;

/**
 * Контроллер конфигурации службы "Региональные настройки".
 * 
 * Cлужба {@see \Gm\I18n\Formatter}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\TimeZone\Controller
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * Возвращает элементы панели формы (Gm.view.form.Panel GmJS).
     * 
     * @return array
     */
    protected function getFormItems(): array
    {
        /** @var null|\DateTimeZone Часовой пояс пользователя */
        $userTimeZone = Gm::$app->user->getTimeZone();
        if ($userTimeZone) {
            $userTimeZone = $userTimeZone->getName();
        }
        /** @var null|\DateTimeZone Часовой пояс сервера */
        $dataTimeZone =  Gm::$app->dataTimeZone ? Gm::$app->dataTimeZone->getName() : '';

        /** @var \Gm\I18n\Formatter $service */
        $service = Gm::$app->formatter;
        return [
            ExtCombo::timezones('#Your time zone', 'userTimeZone', false, [
                'value'    => $userTimeZone,
                'width'    => '100%',
                'readOnly' => true,
                'tooltip'  => '#You can change your timezone in the "Users" module',
            ]),
            ExtCombo::timezones('#Server timezone', 'dataTimeZone', false, [
                'value'    => $dataTimeZone,
                'width'    => '100%',
                'readOnly' => true,
                'tooltip'  => '#Data (date, time) is added and stored on the server in its time zone. Changed in the application\'s configuration file or during installation.',
            ]),
            ExtCombo::timezones('#Timezone', 'timeZone', false, [
                'value'      => $service->timeZone ? $service->timeZone->getName() : '',
                'width'      => '100%',
                'allowBlank' => false,
                'tooltip'    => '#Applies to all users whose time zone is not set',
                'style'      => 'margin-top:15px'
            ]),
            [
                'xtype'      => 'combobox',
                'fieldLabel' => '#First day of the week',
                'name'       => 'firstWeekDay',
                'value'      => $service->firstWeekDay,
                'store'      => [
                    'fields' => ['id', 'name'],
                    'data' => [
                        ['monday', '#Monday'],
                        ['tuesday', '#Tuesday'],
                        ['wednesday', '#Wednesday'],
                        ['thursday', '#Thursday'],
                        ['friday', '#Friday'],
                        ['saturday', '#Saturday'],
                        ['sunday', '#Sunday']
                    ]
                ],
                'displayField' => 'name',
                'valueField'   => 'id',
                'hiddenField'  => 'timeZone',
                'width'        => 320,
                'queryMode'    => 'local',
                'editable'     => false,
                'allowBlank'   => false
            ],
            [
                'html' => '<a class="g-setting-link" target="_blank" href="https://www.php.net/manual/ru/timezones.php">' . $this->module->t('Details on supported time zones') . '</a>'
            ],
            [
                'xtype'  => 'toolbar',
                'dock'   => 'bottom',
                'border' => 0,
                'style'  => ['borderStyle' => 'none'],
                'items'  => [
                    [
                        'xtype'    => 'checkbox',
                        'boxLabel' => $this->module->t('reset settings'),
                        'name'     => 'reset',
                        'ui'       => 'switch'
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function createWidget(): EditWindow
    {
        /** @var EditWindow $window */
        $window = parent::createWidget();

        // окно компонента (Ext.window.Window Sencha ExtJS)
        $window->autoHeight = true;
        $window->width = 500;

        // панель формы (Gm.view.form.Panel GmJS)
        $window->form->items = $this->getFormItems();
        $window->form->bodyPadding = 10;
        $window->form->defaults = [
            'labelWidth' => 160,
            'labelAlign' => 'right',
        ];
        return $window;
    }
}
