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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'MetilToLowMin21');

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
define('AUTH_KEY',         '-(;tfjfq/_<vckN10@C_FGk*uV|v>K]/}0O#Vv+itd5F]szq]wzhk5H$M6.1 DSc');
define('SECURE_AUTH_KEY',  'uRJUN,VU|^h{n)S+>+K)RotN})/*]aFn+09nD~9jp Y[Kr-rRCX01HY,9T|DqAPZ');
define('LOGGED_IN_KEY',    '*VrO@>prH3hSz:B0{E|z+z(+wFKj4Ix+|g4KF$S48>=|G$|0QBjM[Ze-{Co1-=-s');
define('NONCE_KEY',        'N:7*Qv+s9H^f.E-< RC=nU&q.f&4=%b E`c_>HLD[njs_JcS96Jy>^LWf#N$;p.a');
define('AUTH_SALT',        '^XV@[<)Di2$5!NRW&]*u<%zHr[dk0+epu#y-5`&rI__f)uQg+E%p&Bhs>~~)8RE,');
define('SECURE_AUTH_SALT', 'K$=|ILZxL4u.uEfn0kBVUxh3 =`TXI0Y?gIz2eI}iVeIjr-6<q>!.[k9y|]K#a$s');
define('LOGGED_IN_SALT',   '(a]eLAu;<8S|+,M|W3y{Gpo-BW<8|n+.(+smJk=[^w+%UpRWh{?Se2^DFH^F+J%v');
define('NONCE_SALT',       'elEcYXJCb#|a|c@9)jb$o6GtYg~5A4CI7{K!.HF0`53kk[F*hpLY4diw&NQYV9[E');

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
