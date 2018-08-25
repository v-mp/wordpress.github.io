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
define('DB_NAME', 'site_project');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'nushifuren050504');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')+V]&_*BqUBo?g{brF`5+7xXb4t%~NCg4}4i/%CgFCkOf14w8f1l%s;A=t_IsR4?');
define('SECURE_AUTH_KEY',  'eBCMz#G|ujf ]%JQHJ`h71+G^75E<0/uwbMYdhAIkcrd+) TOL_;#;J_6#*;ly|6');
define('LOGGED_IN_KEY',    '!:t.YkEQ{NS^8dh!8l/k<t$~DGPQJrD>M~#LlG+JkVM 2>{=>lMXpSW=wwJR>ofj');
define('NONCE_KEY',        'UeL;jm<zH(b*4?,nkP=}IWlt1agb4aQJdm_b~ra(FE5~)fVF,&9@eW/^O#?S2cNY');
define('AUTH_SALT',        'UAbMx0W#KwVvt:QWoE7J~M<qAcv|u/th7hf7uI= ?~_LR)U=r<z$H0;?MN|Gw!{f');
define('SECURE_AUTH_SALT', '=egzg37oicV?2R]zCmr9z$pu0{~en]t@9|0kd}:rZS^g9GM-b6JoCKszy6ZtLTF8');
define('LOGGED_IN_SALT',   '&53R@=a% [!@=kUtgrj#6tIVfO;M=8GC1TO;Q^n4VGpxR5a$Yur?@2(H.Q9q!MLa');
define('NONCE_SALT',       'hcjea?bZI2EE4q8S/ &OR=5bKAb[lV]2kFH.Iq!kC|WLGrn?.lZ>1O9gv6@^6S.k');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
