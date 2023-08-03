# @bitrix/crest 
@bitrix/crest — небольшой PHPSDK для использования REST API Битрикс24 в локальных, 
тиражных приложениях или через вебхуки

## Содержание
1. [Описание](#introduction)
2. [Вызов при помощи входящего вебхука](#webhook)
3. [Вызов из локального приложения](#local)
4. [Вызов из тиражного приложения](#public)


<h2 id="introduction">Описание</h2>

<ul>
<li>Примеры используют модуль cURL для выполнения REST-запросов. Узнайте, как включить модуль cURL на своем сервере.
<li>На вашем веб-сервере должен быть установлен валидный SSL-сертификат.
<li>Примеры используют базовый SDK в виде класса CRest для выполнения запросов и продления токенов авторизации. Скачайте файлы из репозитория внесите необходимые правки, связанные с авторизацией в файл settings.php и разместите на своем сервере, вставив нужный вам пример из документации.
<li>При возникновении проблем с работой SDK вы можете открыть через браузер файл checkserver.php, который произведёт минимальную проверку настроек сервера для работы класса CRest.
<li>Если в проекте используется класс CRest и кодировка отличается от utf8, то необходимо сделать 2 дополнительных действия:
<br/><br/>Открыть файлы из архива и изменить их кодировку на необходимую.
<br/>В файле settings.php объявить константу C_REST_CURRENT_ENCODING. Например, если проект в кодировке windows-1251 константа выглядеть должна так:</li></ul>
   
```php
define('C_REST_CURRENT_ENCODING','windows-1251');
```

<h2 id="webhook">Вызов REST с использованием входящего вебхука</h2>

Укажите URL вебхука в define C_REST_WEB_HOOK_URL в файле settings.php:

```php
define('C_REST_WEB_HOOK_URL','https://xxx.bitrix24.ru/rest/1/douasdqdsxSWgc3mgc1/');
```

Вставьте текст примера в файл index.php:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
      'TITLE' => 'Название лида',//Заголовок*[string]
      'NAME' => 'Имя',//Имя[string]
      'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

Укажите URL к примеру в адресной строке браузера https://mydomain.xxx/index.php, чтобы увидеть результат работы примера.


<h2 id="local">Вызов REST из локального приложения</h2>

Вставьте текст примера в файл index.php:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
      'TITLE' => 'Название лида',//Заголовок*[string]
      'NAME' => 'Имя',//Имя[string]
      'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

В карточке локального приложения укажите URL своего приложения https://mydomain.xxx/index.php и URL скрипта установки https://mydomain.xxx/install.php.
Укажите значения параметров client_id и client_secret для авторизации OAuth 2.0 в define C_REST_CLIENT_ID и C_REST_CLIENT_SECRET в файле settings.php, взяв эти значения из карточки локального приложения.

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
      'TITLE' => 'Название лида',//Заголовок*[string]
      'NAME' => 'Имя',//Имя[string]
      'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

В списке локальных приложений нажмите правой кнопкой мыши на своё локальное приложение и выберите пункт "Переустановить". Это нужно чтобы корректно сработал install.php после того, как вы вставили корректные значения C_REST_CLIENT_ID и C_REST_CLIENT_SECRET.
После установки вы увидите результат работы примера. Если пример демонстрирует встраивание виджетов в другие инструменты Битрикс24, необходимо перейти в эти инструменты.


<h2 id="public">Вызов REST из тиражного приложения</h2>

Вставьте текст примера в файл index.php

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
      'TITLE' => 'Название лида',//Заголовок*[string]
      'NAME' => 'Имя',//Имя[string]
      'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

Добавьте тиражное приложение в партнерском кабинете для получения client_id и client_secret и при сохранении приложения.
Укажите значения параметров client_id и client_secret для авторизации OAuth 2.0 в define C_REST_CLIENT_ID и C_REST_CLIENT_SECRET в файле settings.php.

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
      'TITLE' => 'Название лида',//Заголовок*[string]
      'NAME' => 'Имя',//Имя[string]
      'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

В карточке приложения добавьте версию и укажите URL своего приложения https://mydomain.xxx/index.php и URL скрипта установки https://mydomain.xxx/install.php в карточке версии.
После сохранения версии откройте карточку версии и, нажав на ссылку "Установить на своем Битрикс24", установите свое приложение на любой доступный вам Битрикс24.
После установки вы увидите результат работы примера (в случае, если пример демонстрирует встраивание виджетов в другие инструменты Битрикс24, необходимо перейти в эти инструменты).
Для реального тиражного приложения необходимо пронаследовать класс CRest, переопределив методы getSettingData/setSettingData, которые занимается получением/сохранением токенов авторизации в текстовый файл. Эти методы не предназначены для эксплуатации приложения на нескольких Битрикс24 одновременно.
# crest