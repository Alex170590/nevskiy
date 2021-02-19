<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'newskiy' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', '192.168.0.103' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3dj0q8lC|&{e<Df3e[SdX8SU9vX ekf5<iSd[7qYYM$LAXxTd*FN;p2vp/)/ej(E' );
define( 'SECURE_AUTH_KEY',  '7}}X~=A3^+_#td_}6|vshIT3Y0v2 8D1|lsNp.x);0YxCzU,3`QSuSuOcp#y6k=!' );
define( 'LOGGED_IN_KEY',    ',M3@AS- 2}4f9]O8#``|$d}B2@BK/u*<!S-7_-nw>;K30QEW0BG:j*ULW/8P+MZ.' );
define( 'NONCE_KEY',        'tPO6}QCK-fZ$w=gYj.zXL(.EsP4x5S9D3NOvne9RlpAyZ}8VwL)(>raAn9BEG}Cb' );
define( 'AUTH_SALT',        'B,61Qbf5OCGcZ3S)*9=S|3&QbaflJ)E^vQJN,!/*G+1a=4MMv4Y!7u?HNKM#XFYj' );
define( 'SECURE_AUTH_SALT', '0y$9)jN)FqCVXTH $TqK,_evg-b4sIs7:BT;Na`cj*j#Tc@fA*tZlN!t*S}yJpsg' );
define( 'LOGGED_IN_SALT',   '_X>8^I:8H&}#e,sr/i(O+eH+z/tJi_w^Uycs LD74eDmwU-z.N=QQ.0_Pht@b{WF' );
define( 'NONCE_SALT',       't8 ULJG,2kKC}~Nsx{ls:NAG`8DMPs2L.j4Nf.y6}O954zah*;0XqyJ|`gsG%G/S' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
