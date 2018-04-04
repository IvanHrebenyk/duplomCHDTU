<?php
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
public $name;

// методы:
 function Getname() {
echo $this->name;
 }

}

// Создаем объект класса Coor:
$object = new Coor;
// Получаем доступ к членам класса:
$object->name = "Alex";
echo $object->name;
// Выводит 'Alex'
// А теперь получим доступ к методу класса (фактически, к функции внутри класса):
$object->Getname();
// Выводит 'John' заглавными буквами
?>