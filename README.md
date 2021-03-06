![GitHub](https://img.shields.io/github/license/Panda58dev/Wafflib?logo=apache) 
![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/Panda58dev/Wafflib?include_prereleases&logo=php)
![GitHub repo size](https://img.shields.io/github/repo-size/panda58dev/wafflib)

# Composition:
-  [EN](#EN)
    - [What is __Waff Lib__ for?](#EN_what)
    - [How to __use__ it?](#EN_use)
    - [Requirements](#EN_req)

-  [RU](#RU)
    - [Для чего нужен __Waff Lib__?](#RU_what)
    - [Как его __использовать__?](#RU_use)
    - [Требования](#RU_req)
    - [Планы](#RU_plans)
    
<a name="EN"></a>
<a name="EN_what"></a>
## ◻️ What is _Waff Lib_ for? 
This library is an object oriented __API__ for working with __ssh__ protocol.

<a name="EN_use"></a>
## ◻️ How to _use_ it?
A detailed description of each function can be found in the [wiki](https://github.com/Panda58dev/wafflib/wiki).

Example:
```php
<?php
use Wafflib\Basic\Connect;
use Wafflib\Basic\Exec;
use Wafflib\Basic\Copy;

//Included the necessary files
require 'src/Const.php';
require 'vendor/autoload.php';

//Make a connection and initialize the methods
$connect = new Connect("127.0.0.1", "user", "pass");
$file = new Copy;
$exec = new Exec($connect->getSession());

//Script вody
$file->copy($connect->getSession(), '/home/user/text.txt', 'E:/My_docs/file.txt');
$exec->exec('ls -al');
$exec->exec('curl 127.0.0.1');
```
<a name="EN_req"></a>
## ◻️ Requirements

- PHP v7.3 and higler. (Despite the fact that the code is written with backward compatibility, it is advisable to use new versions of PHP);
- Extension **php_ssh2**. You can download the dll for **windows** on the website [PECL](https://pecl.php.net/package/ssh2);

----

<a name="RU"></a>
<a name="RU_what"></a>
## ◻️ Для чего нужен _Waff Lib_?
Эта библиотека является объектно ориентированным __API__ для работы с протоколом __ssh__.

<a name="RU_use"></a>
## ◻️ Как его _использовать_?
Подробное описание каждой функции можете посмотреть в [wiki](https://github.com/Panda58dev/wafflib/wiki).

Пример:
```php
<?php
use Wafflib\Basic\Connect;
use Wafflib\Basic\Exec;
use Wafflib\Basic\Copy;

//Подключаем необходимые файлы
require 'src/Const.php';
require 'vendor/autoload.php';

//Производим коннет и инциализируем методы
$connect = new Connect("127.0.0.1", "user", "pass");
$file = new Copy;
$exec = new Exec($connect->getSession());

//Тело скрипта
$file->copy($connect->getSession(), '/home/user/text.txt', 'E:/My_docs/file.txt');
$exec->exec('ls -al');
$exec->exec('curl 127.0.0.1');
```

<a name="RU_req"></a>
## ◻️ Требования
- PHP *v7.3* и выше. (Не смотря на то, что код пишется с обратной совместимостью, желательно использовать новые версии PHP);
- Расширение **php_ssh2**. Скачать dll для **windows** можно на сайте [PECL](https://pecl.php.net/package/ssh2);

<a name="RU_plans"></a>
## ◻️ Планы
Планирую обновить документацию до актуального состояния и добавить юнит-тесты.
