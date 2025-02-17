<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Пакет русской локализации.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    '{name}'        => 'Региональные настройки',
    '{description}' => 'Часовой пояс и страны по умолчанию',
    '{permissions}' => [
        'any'  => ['Полный доступ', 'Изменение региональных настроек']
    ],

    // Form: поля
    'Timezone' => 'Часовой пояс',
    'First day of the week' => 'Первый день недели',
    'Arbitrarily' => 'Произвольно',
    'Monday' => 'Понедельник',
    'Tuesday' => 'Вторник',
    'Wednesday' => 'Среда',
    'Thursday' => 'Четверг',
    'Friday' => 'Пятница',
    'Saturday' => 'Суббота',
    'Sunday' => 'Воскресенье',
    'Details on supported time zones' => 'Подробно о поддерживаемых часовых посясах',
    'reset settings' => 'сбросить настройки',
    'Your time zone' => 'Ваш часовой пояс',
    'You can change your timezone in the "Users" module' => 'Изменить свой часовой пояс можно в модуле "Пользователи"',
    'Server timezone' => 'Часовой пояс сервера',
    'Data (date, time) is added and stored on the server in its time zone. Changed in the application\'s configuration file or during installation.' 
        => 'Данные (дата, время) добавляются и хранятся на сервере в его часовом поясе. Изменяется в файле конфигурации приложения или во время установки.',
    'Applies to all users whose time zone is not set' 
        => 'Применяется для всех пользователей у которых часовой пояс не установлен',
    // Form: сообщения / заголовки
    'Save settings' => 'Сохранение настроек',
    'Reset settings' => 'Сброс настроек',
    // Form: сообщения / текст
    'settings saved {0} successfully' => 'успешное сохранение настроек "<b>{0}</b>"',
    'settings reseted {0} successfully' => 'успешный сброс настроек "<b>{0}</b>"'
];
