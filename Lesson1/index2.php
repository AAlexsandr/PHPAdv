<?php

//5. Дан код:

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();
// $a2 = new A();
// $a1->foo();
// $a2->foo();
// $a1->foo();
// $a2->foo();
//ВЫВЕДЕТ: 1234 т.к. один класс, только разные переменные и с каждой итерацией просто увеличивает на 1.

//Немного изменим п.5:
// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A();
// $b1 = new B();
// $a1->foo(); 
// $b1->foo(); 
// $a1->foo(); 
// $b1->foo();
//ВЫВЕДЕТ: 1122, т.к. класс В наследован от класса А

//7. *Дан код:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 
//ВЫВЕДЕТ: 1122
//Разница в коде только в скобках $a1 = new A; и $a1 = new A();
