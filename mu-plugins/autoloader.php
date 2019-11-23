<?php
/**
* Plugin Name: Autoloader
* Description: Загружает: Класический редактор, Disable All WordPress Updates, Debug Bar, Cyr-To-Lat, No-Category
* Plugin URI:  https://github.com/pomerla/mu-plugins
* Author URI:  https://vseprosto.top/
* Author:      Aleks Moroz
*
* Text Domain: Идентификатор перевода. Пр: my-plugin
* Domain Path: Путь до MO файла перевода относительно папки плагина.
*
* License:     GPL2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*
* Network:     Укажите true, чтобы активировать плагин для Мультисайта.
* Version:     1.0
*/

// код плагина
require WPMU_PLUGIN_DIR .'/muplug/muplug.php';
require WPMU_PLUGIN_DIR .'/classic-editor/classic-editor.php';
require WPMU_PLUGIN_DIR .'/disable-wordpress-updates/disable-updates.php';
require WPMU_PLUGIN_DIR .'/debug-bar/debug-bar.php';
require WPMU_PLUGIN_DIR .'/cyr2lat/cyr-to-lat.php';
require WPMU_PLUGIN_DIR .'/no-category-base-wpml/no-category-base-wpml.php';