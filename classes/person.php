<?php
/**
 * dit is een class Person
 */

 class Person
 {
     // De properties, fields, instance variables
     protected $firstname ;
     protected $infix;
     protected $lastname;
     protected $bankaccountnumber;
     protected $phonenumber;

     //Dit is een get-functie voor het opgeven van een bankaccountnumber
     public function __set($property, $value)
     {
         if (property_exists($this, $property))
         {
             $this->$property = $value;
            
        }
         }

         public function __get($property)
     {
         if (property_exists($this, $property))
         {
             return $this->$property;
            
        }
         }

     // Dit is de constructor
     public function __construct($firstname, $infix, $lastname, $bankaccountnumber, $phonenumber)
     {
         $this->firstname = $firstname;
         $this->infix = $infix;
         $this->lastname = $lastname;
         $this->bankaccountnumber = $bankaccountnumber;
         $this->phonenumber = $phonenumber;
     }
     // Dit is ene method
     public function sayHello()
     {
        return "Groet van $this->firstname $this->infix $this->lastname $this->bankaccountnumber $this->phonenumber";
     }
 }

// Dit is een object van de class Person