<?php
namespace App;

class HelloWorld {
    public function sayHello() {
        echo "Hello, World!\n";
    }
}

$hello = new HelloWorld();
$hello->sayHello();
