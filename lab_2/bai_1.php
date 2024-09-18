<?php

namespace lab_2;

class Person
{
    public $name;
    public $age;
    public $address;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getInfo()
    {
        return "name: " . $this->name . '<br>' . 'age: ' . $this->age . '<br>' . 'address: ' . $this->address;
    }

    public function canVote()
    {
        if ($this->age >= 18) {
            return true;
        } else {
            return false;
        }
    }
}

$person = new Person();
$person->setName('An');
$person->setAge(20);
$person->setAddress('Ha noi, Viet Nam');

echo $person->getInfo() . '<br>';
if ($person->canVote()) {
    echo 'This person can vote';
} else {
    echo 'This person cant vote';

}