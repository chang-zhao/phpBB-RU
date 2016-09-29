<?php
 /**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

 /**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Панель установки',
	'SELECT_LANG'				=> 'Выберите язык',

	'STAGE_INSTALL'	=> 'Установка phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Вступление',
	'INTRODUCTION_BODY'		=> 'Добро пожаловать в phpBB3!<br /><br />phpBB® является наиболее распространённым решением с открытым кодом для организации конференций в интернете. phpBB3 — это новейший продукт в линейке начиная с 2000 года. Как и его предшественники, phpBB3 является функциональным, имеет дружественный интерфейс, полностью поддерживается командами phpBB Team и Официальной русской поддержки phpBB Guru. В phpBB3 существенно улучшены качества, сделавшие популярным phpBB2, добавлены наиболее популярные функции, которые отсутствовали в предыдущих версиях. Надеемся, что это превзойдёт ваши ожидания.<br /><br />Данная система проведёт вас через процессы установки phpBB3, обновления с предыдущих до последней версии phpBB3, или конвертирования в phpBB3 другого программного обеспечения для конференций (включая phpBB2). Для получения дополнительной информации, прочтите с <a href="../docs/INSTALL.html">руководство по установке</a>.<br /><br />Чтобы ознакомиться с лицензионными условиями phpBB3 или узнать о поддержке, выберите соответствующий пункт в боковом меню. Для продолжения, выберите нужную закладку выше.',

	// Support page
	'SUPPORT_TITLE'		=> 'Поддержка',
	'SUPPORT_BODY'				=> 'Полная поддержка предоставляется для последнего стабильного релиза phpBB3 бесплатно. Она включает:</p><ul><li>установку</li><li>конфигурацию</li><li>технические вопросы</li><li>проблемы, связанные с потенциальными ошибками программного обеспечения</li><li>обновление версий — кандидатов на релиз (RC) до последней стабильной версии</li><li>конвертирование phpBB 2.0.x в phpBB3</li><li>конвертирование в phpBB3 другого программного обеспечения для конференций (смотрите <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Мы предлагаем пользователям, до сих пор использующим бета-версии phpBB3, заново установить последнюю версию. </p><h2>Расширения/Стили</h2><p>Вопросы, связанные с расширениями, обсуждаются в соответствующем форуме <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Вопросы, связанные со стилями, обсуждаются в соответствующем форуме <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Если ваш вопрос связан с конкретным продуктом, задавайте его в теме, посвящённой этому продукту.</p><h2>Получение поддержки</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">С чего начать</a><br /><a href="https://www.phpbb.com/support/">Поддержка</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Краткое руководство</a><br /><br />Чтобы быть в курсе последних новостей и релизов, вы можете подписаться на <a href="https://www.phpbb.com/support/">нашу рассылку</a>.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Вас приветствует программа установки phpBB',
	'INSTALL_INTRO_BODY'	=> 'С помощью этой программы установки вы сможете установить phpBB3 на сервер.</p><p>Для этого потребуются настройки базы данных, такие, как её название, имя пользователя и пароль для доступа. Если они неизвестны, свяжитесь с компанией, предоставляющей вам услуги хостинга. Вы не сможете продолжить установку без этих данных. Также необходимо знать следующее:</p>

	<ul>
		<li>Тип базы данных (БД) — той, которую вы будете использовать.</li>
		<li>Имя сервера БД или DSN — адрес сервера базы данных.</li>
		<li>Порт сервера БД — порт сервера базы данных (не нужно указывать в большинстве случаев).</li>
		<li>Название базы данных — имя базы данных на сервере.</li>
		<li>Имя пользователя БД и Пароль к БД — данные для доступа к базе данных.</li>
	</ul>

	<p><strong>Примечание:</strong> если вы выполняете установку с использованием SQLite, то вам необходимо ввести полный путь к файлу базы данных в поле «Имя сервера базы данных или DSN» и оставить пустыми поля имени пользователя и пароля. По соображениям безопасности, вам необходимо удостовериться в том, что этот файл недоступен через интернет.</p>

	<p>phpBB3 поддерживает следующие базы данных:</p>
	<ul>
		<li>MySQL 3.23 и выше (поддерживается MySQLi)</li>
		<li>PostgreSQL 8.3 и выше</li>
		<li>SQLite 2.8.2 и выше</li>
		<li>SQLite 3.6.15 и выше</li>
		<li>MS SQL Server 2000 и выше (напрямую или через ODBC)</li>
		<li>MS SQL Server 2005 и выше (native)</li>
		<li>Oracle</li>
	</ul>

	<p>В списке выбора типа базы данных будут отображаться лишь те, которые поддерживает ваш сервер.',

	'ACP_LINK'	=> 'Take me to <a href="%1$s">the ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB уже установлен.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ещё не установлен.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Файл не существует',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Для установки phpBB требуется файл %1$s.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Для большего удобства использования конференции, рекомендуется наличие файла %1$s.',
	'FILE_NOT_WRITABLE'						=> 'Файл недоступен для записи',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Для установки phpBB файл %1$s должен быть доступен для записи.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Для большего удобства использования конференции, рекомендуется сделать доступным для записи файл %1$s.',

	'DIRECTORY_NOT_EXISTS'						=> 'Папка не существует',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Для установки phpBB требуется папка %1$s.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Для большего удобства использования конференции, рекомендуется наличие папки %1$s.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Папка недоступна для записи',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Для установки phpBB папка %1$s должна быть доступна для записи.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Для большего удобства использования конференции, рекомендуется сделать доступной для записи папку %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Версия PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'Для работы phpBB необходим PHP версии 5.4.0 или выше.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Функция PHP getimagesize() недоступна',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Для правильной работы phpBB должна быть доступна функция getimagesize.',
	'PCRE_UTF_SUPPORT'					=> 'Поддержка UTF-8 в PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB не будет работать, если PHP собран без поддержки UTF-8 для расширения PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Поддержка PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Для правильной работы phpBB должно быть доступно расширение PHP JSON.',
	'PHP_XML_SUPPORT'					=> 'Поддержка PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Для правильной работы phpBB должно быть доступно расширение PHP XML/DOM.',
	'PHP_SUPPORTED_DB'					=> 'Поддерживаемые базы данных',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Необходима поддержка хотя бы одной совместимой системы управления базами данных со стороны PHP. Если ни одна СУБД не доступна, свяжитесь с хостинг-провайдером или обратитесь к соответствующему разделу документации по установке и настройке PHP.',

	'RETEST_REQUIREMENTS'	=> 'Проверить повторно',

	'STAGE_REQUIREMENTS'	=> 'Проверить требования',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'На этой странице необходимо заполнить все поля.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Программа установки определила превышение времени ожидания запроса',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Произошло превышение времени ожидания запроса при исполнении программы установки. Можно попробовать обновить эту страницу в браузере, что может привести к порче данных. Предпочтительным решением является увеличение времени исполнения в настройках PHP, либо использование интерфейса командной строки (CLI).',
));

// Updater
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Задать параметры установки',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Администратрирование',

	// Form labels
	'ADMIN_CONFIG'				=> 'Настройки администратора',
	'ADMIN_PASSWORD'			=> 'Пароль администратора',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Подтверждение пароля администратора',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Введите пароль длиной от 6 до 30 символов.',
	'ADMIN_USERNAME'			=> 'Имя администратора',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Введите имя длиной от 3 до 20 символов.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Введен неверный адрес email.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Введённые пароли не совпадают.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Введённый пароль слишком длинный. Длина пароля не должна превышать 30 символов.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Введённый пароль слишком короткий. Длина пароля не должна быть меньше 6 символов.',
	'INST_ERR_USER_TOO_LONG'		=> 'Введённое имя пользователя слишком длинное. Длина имени пользователя не должна превышать 20 символов.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Введённое имя пользователя слишком короткое. Длина имени пользователя не должна быть меньше 3 символов.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Общие настройки',
	'DEFAULT_LANGUAGE'	=> 'Язык по умолчанию',
	'BOARD_NAME'		=> 'Имя конференции',
	'BOARD_DESCRIPTION'	=> 'Краткое описание конференции',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'База данных',

	// Form labels
	'DB_CONFIG'				=> 'Конфигурация базы данных (БД)',
	'DBMS'					=> 'Тип базы данных',
	'DB_HOST'				=> 'Имя сервера БД или DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN — это имя источника данных и требуется только при установке с использованием ODBC. В PostgreSQL используйте имя localhost для соединения с локальным сервером через сокет домена UNIX или адрес 127.0.0.1 для соединения через TCP. Для SQLite задайте полный путь к файлу базы данных.',
	'DB_PORT'				=> 'Порт сервера БД',
	'DB_PORT_EXPLAIN'		=> 'Оставьте поле пустым, если сервер использует порт по умолчанию.',
	'DB_PASSWORD'			=> 'Пароль к БД',
	'DB_NAME'				=> 'Имя базы данных',
	'DB_USERNAME'			=> 'Имя пользователя БД',
	'DATABASE_VERSION'		=> 'Версия СУБД',
	'TABLE_PREFIX'			=> 'Префикс таблиц в базе данных',
	'TABLE_PREFIX_EXPLAIN'	=> 'Префикс должен начинаться с буквы и может содержать только буквы, числа и знаки подчёркивания.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ через ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL с расширением MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Не удалось загрузить модуль PHP для выбранного типа базы данных.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Указан неправильный префикс. Он должен начинаться с буквы и может содержать только буквы, числа и знаки подчёркивания.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Указанный префикс таблиц слишком длинный. Длина префикса не должна превышать %d символов.',
	'INST_ERR_DB_NO_NAME'			=> 'Не указано название базы данных.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Указанный файл базы данных находится в папке конференции. Необходимо переместить его в папку, недоступную из интернета.',
	'INST_ERR_DB_CONNECT'			=> 'Не удалось подключиться к базе данных. Ниже показан текст сообщения об ошибке.',
	'INST_ERR_DB_NO_ERROR'			=> 'Сообщения об ошибке недоступно.',
	'INST_ERR_PREFIX'				=> 'Таблицы с указанным префиксом уже существуют. Введите другой префикс.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Установленная на сервере версия MySQL несовместима с выбранным вариантом «MySQL с расширением MySQLi». Вместо него попробуйте выбрать вариант «MySQL».',
	'INST_ERR_DB_NO_SQLITE'			=> 'Установлена устаревшая версия расширения SQLite. Её необходимо обновить как минимум до версии 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Установлена устаревшая версия расширения SQLite. Её необходимо обновить как минимум до версии 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Для установленной на сервере версии Oracle необходимо установить значение параметра <var>NLS_CHARACTERSET</var> равным <var>UTF8</var>. Либо обновите базу данных до версии 9.2 или выше, либо измените значение параметра.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Выбранная база данных создана не с кодировкой <var>UNICODE</var> или <var>UTF8</var>. Попробуйте установить конференцию в базу данных с кодировкой <var>UNICODE</var> или <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Файл схемы базы данных недоступен для записи',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Настройки E-mail',

	// Package info
	'PACKAGE_VERSION'					=> 'Установленная версия',
	'UPDATE_INCOMPLETE'				=> 'Не удалось завершить обновление.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Прочтите информацию ниже для устранения ошибки.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Незавершённое обновление</h1>

		<p>Обнаружена неудачная попытка обновления. Запустите <a href="%1$s" title="%1$s">программу обновления базы данных</a>, выберите вариант <em>Только база данных</em> и нажмите кнопку <strong>Отправить</strong>. Не забудьте удалить папку «install» после успешного обновления базы данных.</p>',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Настройки сервера',
	'SCRIPT_PATH'				=> 'Путь к конференции',
	'SCRIPT_PATH_EXPLAIN'		=> 'Путь к папке, содержащей phpBB, относительно имени домена. Например, <samp>/phpBB3</samp>.',
));

// Default database schema entries…
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Спасибо, Администрация',
	'CONFIG_SITE_DESC'				=> 'Краткое описание вашей конференции',
	'CONFIG_SITENAME'				=> 'ваш_домен.ru',

	'DEFAULT_INSTALL_POST'			=> 'Это пример сообщения на вашей конференции phpBB3. Всё работает правильно. Вы можете удалить это сообщение и продолжить настройку вашей конференции. В процессе установки вашей первой категории и первому форуму были заданы подходящие права доступа для предустановленных групп администраторов, супермодераторов, гостей, зарегистрированных пользователей и зарегистрированных в соответствии с COPPA пользователей. Если вы решите удалить вашу первую категорию и первый форум, не забудьте установить права доступа для всех новых категорий и форумов, которые вы создаёте. Рекомендуем переименовать вашу первую категорию и первый форум и копировать права доступа с них вновь создаваемым категориям и форумам. Удачи!',

	'FORUMS_FIRST_CATEGORY'			=> 'Ваша первая категория',
	'FORUMS_TEST_FORUM_DESC'		=> 'Описание вашего первого форума.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ваш первый форум',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Администратор',
	'REPORT_WAREZ'					=> 'Сообщение содержит ссылки на незаконные или пиратские программы.',
	'REPORT_SPAM'					=> 'Сообщение имеет единственной целью рекламу сайтов, программ или других продуктов, товаров, услуг и пр.',
	'REPORT_OFF_TOPIC'				=> 'Сообщение не относится к обсуждаемой теме.',
	'REPORT_OTHER'					=> 'Причина обжалования не относится ни к одной из перечисленных, используйте поле дополнительной информации.',

	'SMILIES_ARROW'					=> 'Стрелка',
	'SMILIES_CONFUSED'				=> 'Озадачен',
	'SMILIES_COOL'					=> 'Всё путём',
	'SMILIES_CRYING'				=> 'Плачет или сильно расстроен',
	'SMILIES_EMARRASSED'			=> 'Смущён',
	'SMILIES_EVIL'					=> 'Злой или очень раздражён',
	'SMILIES_EXCLAMATION'			=> 'Восклицание',
	'SMILIES_GEEK'					=> 'Ботан',
	'SMILIES_IDEA'					=> 'Идея',
	'SMILIES_LAUGHING'				=> 'Смеётся',
	'SMILIES_MAD'					=> 'Раздражён',
	'SMILIES_MR_GREEN'				=> 'Зелёный',
	'SMILIES_NEUTRAL'				=> 'Нейтральный',
	'SMILIES_QUESTION'				=> 'Вопрос',
	'SMILIES_RAZZ'					=> 'Дразнится',
	'SMILIES_ROLLING_EYES'			=> 'Закатывает глаза',
	'SMILIES_SAD'					=> 'Грустный',
	'SMILIES_SHOCKED'				=> 'В шоке',
	'SMILIES_SMILE'					=> 'Улыбается',
	'SMILIES_SURPRISED'				=> 'Удивлён',
	'SMILIES_TWISTED_EVIL'			=> 'Очень зол',
	'SMILIES_UBER_GEEK'				=> 'Мегаботан',
	'SMILIES_VERY_HAPPY'			=> 'Очень доволен',
	'SMILIES_WINK'					=> 'Подмигивает',

	'TOPICS_TOPIC_TITLE'			=> 'Добро пожаловать в phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Обзор',
	'MENU_INTRO'		=> 'Вступление',
	'MENU_LICENSE'		=> 'Лицензия',
	'MENU_SUPPORT'		=> 'Поддержка',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Создание файла конфигурации',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Запись настроек конфигурации',
	'TASK_ADD_DEFAULT_DATA'				=> 'Запись настроек по умолчанию в базу данных',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Создание файла схемы базы данных',
	'TASK_SETUP_DATABASE'				=> 'Настройка базы данных',
	'TASK_CREATE_TABLES'				=> 'Создание таблиц в базе данных',

	// Install data
	'TASK_ADD_BOTS'			=> 'Регистрация ботов',
	'TASK_ADD_LANGUAGES'	=> 'Установка доступных языковых пакетов',
	'TASK_ADD_MODULES'		=> 'Установка модулей',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Отправка e-mail уведомлений',
	'TASK_POPULATE_MIGRATIONS'	=> 'Выполнение миграций',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'программа установки успешно завершила работу',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Модуль не найден',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Не найденный модуль сервиса «%s» не инициализирован.',

	'TASK_NOT_FOUND'				=> 'Задача не найдена',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Не найденная задача сервиса «%s» не инициализирована.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Все задачи сервисов программы установки должны начинаться со слова «installer»',
	'TASK_CLASS_NOT_FOUND'				=> 'Определение задачи сервиса программы установки неверно. Для заданного имени сервиса «%1$s» ожидается пространство имён «%2$s». Для получения дополнительной информации обратитесь к документации по task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Файл конфигурации недоступен для записи.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Установка phpBB',
	'CLI_UPDATE_BOARD'				=> 'Обновление phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Показать используемую конфигурацию',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Проверить файл конфигурации',
	'CLI_CONFIG_FILE'				=> 'Используемый файл конфигурации',
	'MISSING_FILE'					=> 'Файл %1$s недоступен',
	'MISSING_DATA'					=> 'Файл конфигурации отсутствует или содержит неверные настройки.',
	'INVALID_YAML_FILE'				=> 'Не удалось прочесть YAML файл %1$s',
	'CONFIGURATION_VALID'			=> 'Файл конфигурации не содержит ошибок',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Обновление версии phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Здесь вы можете обновить вашу версию phpBB до последней.<br />Во время этого процесса все ваши файлы будут проверены на целостность. Вы сможете просмотреть файлы и вносимые в них изменения перед обновлением.<br /><br />Само обновление может быть выполнено двумя способами.</p><h2>Обновление вручную</h2><p>Этот способ заключается в том, что вы скачиваете индивидуальный набор обновлённых файлов, чтобы не потерять сделанные вами изменения в имеющихся файлах. Скачав этот архив, вы должны вручную закачать файлы из него в соответствующие им местоположения относительно корневой папки phpBB. После этого вам будет дана возможность провести проверку, что все файлы занимают полагающиеся им места.</p><h2>Автоматическое обновление по FTP</h2><p>Этот способ похож на первый, но без необходимости скачивать обновлённые файлы и закачивать их на сервер самостоятельно, это будет сделано за вас. Чтобы воспользоваться этим способом, вам нужно знать запрашиваемые программой обновления данные о вашем FTP-сервере. По окончании вы будете направлены на повторное сравнение файлов с целью удостовериться, что обновление прошло успешно.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '
		<h1>Объявление о выходе новой версии</h1>
		<p>Прежде чем продолжить процесс обновления, прочтите объявление о выходе последней версии, оно может содержать полезную для вас информацию. В нём также присутствуют ссылки на скачивание и список изменений.</p>
		<br />
		<h1>Как обновить свою версию phpBB с помощью пакета автоматического обновления</h1>
		<p>Рекомендованный здесь способ обновления phpBB пригоден только для пакета автоматического обновления. Вы также можете произвести обновление, используя методы, указанные в документе INSTALL.html. Для автоматического обновления нужно выполнить следующие шаги:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Перейти на <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">страницу файлов phpBB.com</a> и скачать архив с пакетом автоматического обновления («Automatic Update Package»).<br /><br /></li>
			<li>Распаковать архив.<br /><br /></li>
			<li>Закачать разархивированные папки «install» и «vendor» в корневую папку phpBB (туда же, где находится файл config.php).<br /><br /></li>
		</ul>
		<p>После этого конференция станет недоступна для обычных пользователей, из-за того, что теперь присутствует закачанная вами папка install.<br /><br />
		<strong><a href="%1$s" title="%1$s">Теперь вы можете начать процесс обновления, перейдя в папку install</a>.</strong><br />
		<br />
		Вам будут даны указания в ходе процесса обновления, а по его окончании вам сообщат об этом.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Тип обновления',

	'UPDATE_TYPE_ALL'		=> 'Файлы и база данных',
	'UPDATE_TYPE_DB_ONLY'	=> 'Только база данных',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Методы обновления файлов',

	'UPDATE_FILE_METHOD'			=> 'метод обновления файлов',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Скачать архив с обновлёнными файлами',
	'UPDATE_FILE_METHOD_FTP'		=> 'Обновить файлы по FTP (автоматически)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Обновить файлы напрямую (автоматически)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Выберите формат архива для скачивания',

	// FTP settings
	'FTP_SETTINGS'			=> 'Настройки FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Папка с файлами обновления не найдена. Удостоверьтесь, что соответствующие файлы загружены на сервер.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Ваша версия phpBB самая последняя и не требует обновления. Если необходимо проверить целостность файлов, удостоверьтесь, что соответствующие файлы обновления загружены на сервер.',
	'OLD_UPDATE_FILES'				=> 'Используется устаревшее обновление. Найденные файлы предназначены для обновления версии %1$s до %2$s, но последняя версия phpBB — %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Найденные файлы обновления несовместимы с установленной версией phpBB. Установлена версия %1$s, однако файл обновления предназначен для обновления версии %2$s до %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Обновление файлов',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Проверка файлов обновления',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Не удалось открыть %s для проверки изменений.',

	'UPDATE_FILE_DIFF'		=> 'Внесение изменений в файлы',
	'ALL_FILES_DIFFED'		=> 'Все изменения в файлы внесены.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Обновление файлов',

	'DOWNLOAD'							=> 'Скачать',
	'DOWNLOAD_CONFLICTS'				=> 'Скачать архив с конфликтными местами',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Ищите &lt;&lt;&lt; для выявления конфликтов',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Скачать архив с обновлёнными файлами',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Скачайте и распакуйте архив. В нём находятся обновлённые файлы, которые необходимо загрузить на сервер в папку с phpBB. Загружайте файлы в соответствующие им места расположения. После этого можно продолжить процесс обновления.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Файл уже обновлён.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Недостаточно прав для изменения файла.',
	'FILE_USED'						=> 'Данные из файла',			// Single file
	'FILES_CONFLICT'				=> 'Файлы с конфликтами',
	'FILES_CONFLICT_EXPLAIN'		=> 'Следующие файлы модифицированы и не соответствуют исходным файлам старой версии. Данные файлы содержат конфликты и будут вызывать ошибки при попытке их использования в phpBB. Изучите конфликтные места и попытайтесь исправить их вручную, или продолжите обновление с использованием предпочтительного метода обновления файлов. В случае исправления конфликтов вручную, проведите повторную проверку изменённых файлов. Для каждого файла можно выбрать предпочтительный метод обновления. В первом случае будут потеряны конфликтные места из старого файла, во втором не будут добавлены конфликтующие строки из нового файла.',
	'FILES_DELETED'					=> 'Удалённые файлы',
	'FILES_DELETED_EXPLAIN'			=> 'Следующие файлы не используются в новой версии. Данные файлы должны быть удалены.',
	'FILES_MODIFIED'				=> 'Изменённые файлы',
	'FILES_MODIFIED_EXPLAIN'		=> 'Следующие файлы модифицированы и не соответствуют исходным файлам старой версии. Обновлённый файл будет результатом объединения модифицированного и нового файла.',
	'FILES_NEW'						=> 'Новые файлы',
	'FILES_NEW_EXPLAIN'				=> 'Следующие файлы отсутствуют в текущей версии phpBB. Данные файлы будут добавлены.',
	'FILES_NEW_CONFLICT'			=> 'Новые конфликтующие файлы',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Следующие файлы появились в новой версии, однако файл с тем же именем и в том же месте уже существует. Данный файл будет перезаписан новым.',
	'FILES_NOT_MODIFIED'			=> 'Неизменённые файлы',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Следующие файлы не были изменены и представляют собой оригинальные файлы phpBB той версии, которую вы хотите обновить.',
	'FILES_UP_TO_DATE'				=> 'Уже обновлённые файлы',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Следующие файлы уже соответствуют файлам новой версии и не нуждаются в обновлении.',
	'FILES_VERSION'					=> 'Версия файлов',
	'TOGGLE_DISPLAY'				=> 'Показать/скрыть список файлов',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Обновление файлов',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Не удалось обновить файл «%1$s». Будет использован файл «%2$s».',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Не удалось обновить файлы. Возможность использования старыхз файлов отсутствует.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Продолжить процесс обновления',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Повторно проверить файлы',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Обновление базы данных',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'База данных успешно обновлена.',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Указанный конвертер не существует.',
	'DEV_NO_TEST_FILE'			=> 'В конвертере не указано значение переменной test_file. Если вы пользователь этого конвертера, то сообщите об этой ошибке его автору, поскольку она не должна возникать. Если вы автор конвертера, то вы должны задать имя существующего файла конвертируемой конференции для проверки правильности пути к ней.',
	'COULD_NOT_FIND_PATH'		=> 'Не удалось найти путь к старой конференции. Проверьте настройки и попробуйте снова.<br />» Путь %s был указан как исходный.',
	'CONFIG_PHPBB_EMPTY'		=> 'Переменная конфигурации phpBB3 для «%s» пуста.',

	'MAKE_FOLDER_WRITABLE'		=> 'Убедитесь, что эта папка существует и у сервера есть права на запись в неё, затем повторите попытку:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Убедитесь, что эти папки существуют и у сервера есть права на запись в них, затем повторите попытку:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Повторная проверка',

	'NO_TABLES_FOUND'			=> 'Таблиц не найдено.',
	'TABLES_MISSING'			=> 'Не удалось найти таблицы<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Проверьте правильность префикса таблиц и попробуйте снова.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Продолжить конвертирование',
	'CONTINUE_CONVERT_BODY'		=> 'Обнаружена предыдущая попытка конвертирования. Вы можете начать новое конвертирование или продолжить предыдущее',
	'CONVERT_NEW_CONVERSION'	=> 'Новое конвертирование',
	'CONTINUE_OLD_CONVERSION'	=> 'Продолжить ранее начатое конвертирование',

	// Start conversion
	'SUB_INTRO'					=> 'Введение',
	'CONVERT_INTRO'				=> 'Вас приветствует система конвертирования phpBB',
	'CONVERT_INTRO_BODY'		=> 'Здесь вы имеете возможность импортировать данные из других (установленных) типов конференций. В списке ниже содержатся доступные в настоящее время модули для конвертирования. Если в нём отсутствует конференция, которую вы хотели бы конвертировать, пожалуйста, посетите наш веб-сайт, на котором могут быть доступны для скачивания дополнительные модули.',
	'AVAILABLE_CONVERTORS'		=> 'Доступные конвертеры',
	'NO_CONVERTORS'				=> 'Нет доступных для использования конвертеров.',
	'CONVERT_OPTIONS'			=> 'Параметры',
	'SOFTWARE'					=> 'Тип конференции',
	'VERSION'					=> 'Версия',
	'CONVERT'					=> 'Конвертировать',

	// Settings
	'STAGE_SETTINGS'			=> 'Параметры',
	'TABLE_PREFIX_SAME'			=> 'Префикс таблиц должен быть тем же, который используется конвертируемой конференцией.<br />» Указанный префикс — %s.',
	'DEFAULT_PREFIX_IS'			=> 'Конвертеру не удалось найти таблицы phpBB2 с указанным префиксом. Убедитесь, что вы ввели правильные данные о старой конференции. У таблиц конференции %1$s префикс <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Определение настроек конвертирования',
	'FORUM_PATH'				=> 'Путь к конференции',
	'FORUM_PATH_EXPLAIN'		=> '<strong>Относительный</strong> путь к старой конференции от <strong>корневой папки установленного phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Обновлять страницу для продолжения конвертирования',
	'REFRESH_PAGE_EXPLAIN'		=> '«Да» означает, что конвертер будет автоматически перезагружать страницу, чтобы продолжить конвертирование после завершения очередного этапа. Если это ваша первая конвертация с целью тестирования и проверки на ошибки, мы советуем установить значение этого параметра в «Нет».',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Конвертирование',

	'AUTHOR_NOTES'				=> 'Заметки автора<br />» %s',
	'STARTING_CONVERT'			=> 'Начало конвертирования',
	'CONFIG_CONVERT'			=> 'Конвертирование конфигурации',
	'DONE'						=> 'Готово',
	'PREPROCESS_STEP'			=> 'Выполнение предварительных функций/запросов',
	'FILLING_TABLE'				=> 'Заполнение таблицы <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Заполнение таблиц',
	'DB_ERR_INSERT'				=> 'Ошибка при обработке запроса <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Ошибка при обработке <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Ошибка при выполнении <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Ошибка при выполнении <var>query_first</var>, %s («%s»).',
	'DB_ERR_SELECT'				=> 'Ошибка при обработке запроса <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Этап <strong>%d</strong> из <strong>%d</strong>',
	'FINAL_STEP'				=> 'Заключительный этап',
	'SYNC_FORUMS'				=> 'Синхронизация форумов',
	'SYNC_POST_COUNT'			=> 'Синхронизация количества сообщений',
	'SYNC_POST_COUNT_ID'		=> 'Синхронизация количества сообщений с <var>entry</var> от %1$s до %2$s',
	'SYNC_TOPICS'				=> 'Синхронизация тем',
	'SYNC_TOPIC_ID'				=> 'Синхронизация тем с <var>topic_id</var> от %1$s до %2$s.',
	'PROCESS_LAST'				=> 'Выполнение заключительных операций',
	'UPDATE_TOPICS_POSTED'		=> 'Создание списка тем, в которых писал пользователь',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Произошла ошибка при создание списка тем, в которых писал пользователь. Вы можете повторить попытку выполнить этот этап в администраторском разделе после завершения процесса преобразования.',
	'CONTINUE_LAST'				=> 'Продолжить выполнение заключительных операций',
	'CLEAN_VERIFY'				=> 'Очистка и проверка конечной структуры',
	'NOT_UNDERSTAND'			=> 'Не удалось разобрать выражение %s #%d, таблица %s («%s»)',
	'NAMING_CONFLICT'			=> 'Конфликт имён: оба имени %s и %s являются псевдонимами<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Конвертирование завершено',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Вы успешно сконвертировали вашу конференцию в формат phpBB 3.2. Вы можете <a href="../">войти на конференцию</a>. Убедитесь, что все настройки успешно перенесены, прежде чем запустите конференцию, удалив папку install. Помните, что вспомогательную информацию по использованию phpBB можно получить в интернете, изучив <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">документацию</a>, а также на <a href="https://www.phpbb.com/phpBB/viewforum.php?f=466">форуме поддержки phpBB Group</a> и форумах официальной русской поддержки <a href="http://www.phpbbguru.net">phpBB Guru</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'На старой конференции включена загрузка вложений по FTP. Отключите эту функцию и убедитесь в правильности указанной папки для загрузки, затем скопируйте все файлы вложений в эту новую папку, доступную через интернет. После этого перезапустите конвертер.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Отсутствует доступная информация о конфигурации для конвертирования.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Не удалось получить информацию о локальных правах доступа.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Не удалось получить информацию о категориях.',
	'CONV_ERROR_GET_CONFIG'				=> 'Не удалось получить информацию о конфигурации конференции.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Не удалось получить доступ или прочесть «%s».',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Не удалось получить информацию о правах групп.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Обнаружено нарушение целостности таблицы групп в add_bots(). Необходимо добавить все специальные группы вручную.',
	'CONV_ERROR_INSERT_BOT'				=> 'Не удалось добавить бота в таблицу пользователей.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Не удалось добавить бота в таблицу ботов.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Не удалось добавить пользователя в таблицу user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Ошибка обработки сообщения',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Примечание разработчику: вы должны указать $convertor[\'avatar_path\'] для использования %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Не указан относительный путь к исходной конференции.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Примечание разработчику: вы должны указать $convertor[\'avatar_gallery_path\'] для использования %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Не удалось найти группу «%1$s» в %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Примечание разработчику: вы должны указать $convertor[\'ranks_path\'] для использования %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Примечание разработчику: вы должны указать $convertor[\'smilies_path\'] для использования %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Примечание разработчику: вы должны указать $convertor[\'upload_path\'] для использования %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Не удалось добавить/обновить настройки прав доступа.',
	'CONV_ERROR_PM_COUNT'				=> 'Не удалось отобрать количество личных сообщений в папке.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Не удалось добавить новый форум вместо старой категории.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Не удалось добавить новый форум вместо старого форума.',
	'CONV_ERROR_USER_ACCESS'			=> 'Не удалось получить данные аутентификации пользователя.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Обнаружена неправильная группа «%1$s» в %2$s.',
	'CONV_OPTIONS_BODY'					=> 'На этой странице вам предлагается ввести данные, необходимые для доступа к исходной конференции. Укажите информацию о базе данных вашей старой конференции; конвертер не будет вносить в неё никаких изменений. Для обеспечения полноценной конвертации исходную конференцию следует отключить.',
	'CONV_SAVED_MESSAGES'				=> 'Сохранённые сообщения',

	'PRE_CONVERT_COMPLETE'			=> 'Все этапы подготовки к конвертированию успешно завершены. Теперь вы можете начать процесс конвертирования. Учтите, что вам, возможно, придётся вручную произвести некоторые действия и настройки. После конвертирования обязательно проверьте назначенные права доступа, восстановите поисковый индекс, который не подлежал конвертированию, если необходимо, а также удостоверьтесь, что все файлы были успешно скопированы (например, аватары и смайлики).',
));
