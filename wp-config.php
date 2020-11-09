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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'New' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         's9PUf0t]/^95d7sy`{k+gY7+cRr=uexHYB{;!,g85u]MF4MmF5ezH:84%]0(~9)<' );
define( 'SECURE_AUTH_KEY',  '7+{?_f]KDf|-XquhYN#fN+vzkjeoJJ=pcr@R]XW;Jpty!GjZ^x[4j,%uJ_`G&pi.' );
define( 'LOGGED_IN_KEY',    '5dx9`oP>S/X]| J<Z;yQQZWKepCO:4@oGJ3fj+:%hZL-TUADDqmA)zx#iMz#UY|K' );
define( 'NONCE_KEY',        'ru]ns#4Od<i%Hj<sK]C=1{W{Gd&h#*3[u|v$2ue}>Rcsbtaj?ZGL[Bo@e5]`% kz' );
define( 'AUTH_SALT',        'bl~?|_;B<a;@-n4(<+X(8N.ose=$^fL1!=~Q<!-nSDiil-{,#8d9;SkxD;]79!#P' );
define( 'SECURE_AUTH_SALT', 'yul%Es+D(zkw!436L3W#IG+B.B[E:,S1xrPU2<8YYRNEf6iMLMTB!w| CmY)NE/O' );
define( 'LOGGED_IN_SALT',   'tV9<c)O}:47>~<z[F#@nKvG=YVh8@k9`2Kwf6MjhpScNxrN`d2NTEuH}w0TV,(ta' );
define( 'NONCE_SALT',       'A<Wi$v}l;dp8TMd=*#S(eA(rXuq>WmT~qH=#`]o!|*}-NRO{yQuZ=vgCV4]RA?WV' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
