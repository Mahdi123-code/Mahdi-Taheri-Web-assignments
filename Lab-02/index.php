<?php
// Examples part

// // example 1 (Class constant)
// class Course {
//     const PASS_MARK = 55;
// }
// echo Course::PASS_MARK;


// // example 2 (static property and static method)
// class Visitor {
//     public static $count = 0;
//     public static function addVisitor() {  // 
//         self::$count++;
//     }
// }
// Visitor::addVisitor();
// echo Visitor::$count;

// // exmple 3 (abstract class and abstrac method)
// abstract class Payment {
//     abstract public function pay();
// }
// class CashPayment extends Payment {
//     public function pay() {
//         echo "Cash payment completed";
//     }
// }
// $pay_method = new CashPayment();
// echo $pay_method->pay();


// Tasks part
// // Task-1 --- Class constant

// class Library{
//     const MAX_BOOKS = 3;    // This is a constant because its value can't change it has i a fixed value
//     // In this example we assign the value of 3 to MAX_BOOKS means the max books in libray can not be another number

// }

// echo "Maximum book allowed: ".Library::MAX_BOOKS;

// // Task-2  static property and static method
// class StudentCounter{
//     public static $count = 0;

//     public static function addStudent(){
//         self::$count++;
//     }
// }

// StudentCounter::addStudent();
// StudentCounter::addStudent();
// StudentCounter::addStudent();

// echo "Total student: ".StudentCounter::$count;


// Task-3  
abstract class Vehicle{
    abstract public function start();
}

class Car extends Vehicle{
    public function start(){
        echo "Car engine started <br>";
    }
}

class Bike extends Vehicle{
    public function start(){
        echo "Bike started";
    }
}

$car = new Car();
$car->start();

$bike = new Bike();
$bike->start();

?>