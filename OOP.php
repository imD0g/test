<?php 
// Implement the Car class here.
class car { # class name 
    public function __construct($make, $year) { # constructor
        $this->make=$make; # property
        $this->year=$year; # property
    }
    public function print_details() { # method
        echo "This car is a " . $this->year . " " . $this->make . ".";
    }
}
        

$car = new Car("Toyota", 2006); # create a new object
$car->print_details(); # call a method
?> 