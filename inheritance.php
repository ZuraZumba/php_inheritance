<?php
class Person
{
    public $name;
    public $age;
    public function __construct($saxeli, $asaki)
    {
        $this->name = $saxeli;
        $this->age = $asaki;

    }
    public function introduce()
    {
        return "Hello, my name is $this->name. ";
    }
}
class Salesman extends Person
{
    const Occupation = "Salesman";
    public function _construct($saxeli, $asaki)
    {
        parent::__construct($saxeli, $asaki);
    }
    public function introduce()
    {
        return parent::introduce() . "don't forget to check out my products!";
    }
    public function occu()
    {
        return self::Occupation;
    }
}
// class ComputerProgrammer extends WebDeveloper
// {

// }
// class WebDeveloper extends ComputerProgrammer
// {

// }
// აქ ცვლად ნიკას გადაეცემა სახელი და ასაკი, რომელიც გადაეცემა კლასს Salesman იქედან გადაეცემა
$nika = new Salesman("Nika", "23");
echo $nika->introduce();
echo "<br>";
echo $nika->occu();
