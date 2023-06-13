<?php

class  Teacher extends Person {

    private $salary;

    public function __construct($firstname, $infix, $lastname , $bankaccountnumber, $salary)
     {
         parent:: __construct($firstname, $infix, $lastname , $bankaccountnumber, $salary);
         $this->salary = $salary;
     }

     public function exposeMySalary()
     {
        return "mijn naam is " . $this->firstname 
              ."je verdient " .  $this->salary 
              . " per maand wel beetje weinig :(" ;
     }
     
}


?>