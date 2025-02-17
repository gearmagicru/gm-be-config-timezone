<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'id'          => 'gm.be.config.timezone',
    'moduleId'    => 'gm.be.config',
    'name'        => 'Regional settings',
    'description' => 'Default timezone and countries',
    'namespace'   => 'Gm\Backend\Config\TimeZone',
    'path'        => '/gm/gm.be.config.timezone',
    'route'       => 'timezone',
    'locales'     => ['ru_RU', 'en_GB', 'be_BY'],
    'permissions' => ['any', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'GM MS'],
        ['app', 'code' => 'GM CMS'],
        ['app', 'code' => 'GM CRM'],
        ['module', 'id' => 'gm.be.config']
    ]
];
