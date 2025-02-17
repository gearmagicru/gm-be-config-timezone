<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\TimeZone\Model;

use Gm;
use Gm\Backend\Config\Model\ServiceForm;

/**
 * Модель данных конфигурации службы "Региональные настройки".
 * 
 * Cлужба {@see \Gm\I18n\Formatter}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\TimeZone\Model
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this->unifiedName = Gm::$app->formatter->getObjectName();
    }

    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'timeZone'       => 'timeZone',
            'firstWeekDay'   => 'firstWeekDay',
            // опции другой службы (разделены интерфейсом настроек)
            'timeFormat'     => 'timeFormat',
            'dateFormat'     => 'dateFormat',
            'dateTimeFormat' => 'dateTimeFormat'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function excludedAttributes(): array
    {
        return ['timeFormat', 'dateFormat', 'dateTimeFormat'];
    }
}
