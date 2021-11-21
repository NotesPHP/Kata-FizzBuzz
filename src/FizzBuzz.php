<?php

namespace App;

class FizzBuzz {
   
    public function execute($num){

        if($this->isMultiple($num, 3) && $this->isMultiple($num, 5)) return 'fizzBuzz';
        if($this->isMultiple($num, 3)) return 'fizz';
        if($this->isMultiple($num, 5)) return 'Buzz';

        return $num;
}
    private function isMultiple($num, $divisor){

        if(!$num % $divisor) return true;

        return false;
    }
}


