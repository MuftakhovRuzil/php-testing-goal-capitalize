<?php

require("src/StringUtils.php");
require("vendor/autoload.php");

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

Assert::eq(capitalize('hello'), 'Hello',"Тест не пройден");
// Первый параметр actual – то, что пришло
// Второй параметр expected – то, что ожидает тест
// Правильный порядок аргументов имеет большое значение при анализе ошибки

//if (StringUtils\capitalize('hello') !== 'Hello') {
//    throw new \Exception('Функция работает неверно!');
//}

//if (StringUtils\capitalize('') !== '') {
//    throw new \Exception('Функция работает неверно!');
//}

echo 'Все тесты пройдены!';