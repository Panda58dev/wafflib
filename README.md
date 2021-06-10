# Composition:
-  [EN](#EN)
    - [What is __Waff Lib__ for?](#EN_what)
    - [How to __use__ it?](#EN_use)
    - [Requirements](#EN_req)

-  [RU](#RU)
    - [Для чего нужен __Waff Lib__?](#RU_what)
    - [Как его __использовать__?](#RU_use)
    - [Требования](#RU_req)
    
<a name="EN"></a>
<a name="EN_what"></a>
## What is _Waff Lib_ for? 
First of all, __Waff Lib__ is a library that contains data transfer functions over the __ssh__ protocol. Specifically, it is a product written in __php__ and using __libssh2__. The functions use the __PSR-12__ standard and are all commented out.

<a name="EN_use"></a>
## How to _use_ it?
To begin with, we should warn you that most of the input data should be in the form of a _variable_/_array_ in the **json** format. A detailed description of each function can be found in the _wiki_.
<a name="EN_req"></a>
## Requirements

- PHP v7.3 and higler. (Despite the fact that the code is written with backward compatibility, it is advisable to use new versions of PHP);
- Extension **php_ssh2**. You can download the dll for **windows** on the website [PECL](https://pecl.php.net/package/ssh2);
- Extension **php_openssl**.

----

<a name="RU"></a>
<a name="RU_what"></a>
## Для чего нужен _Waff Lib_?
Прежде всего __Waff Lib__ - это библиотека, содержащая функции передачи данных по протоколу __ssh__. Конкретно - это продукт, написанный на __php__ и использующий __libssh2__. Функции используют стандарт __PSR-12__ и все они закомментированы.

<a name="RU_use"></a>
## Как его _использовать_?
Для начала надо предупредить, что большинство входных данных данных должны иметь вид _переменной_/_массива_ в формате **json**. Подробное описание каждой функции можете посмотреть в _wiki_.

<a name="RU_req"></a>
## Требования
- PHP *v7.3* и выше. (Не смотря на то, что код пишется с обратной совместимостью, желательно использовать новые версии PHP);
- Расширение **php_ssh2**. Скачать dll для **windows** можно на сайте [PECL](https://pecl.php.net/package/ssh2);
- Расширение **php_openssl**.

