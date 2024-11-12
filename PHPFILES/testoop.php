<?php
class Animal {
    public $nama;
    protected $tinggi;
    protected $berat;

    function __construct($nama) {
        $this->nama = $nama;
    }

    function __destruct() {
        echo "Good bye {$this->nama}<BR>";
    }

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function set_tinggi($tinggi) {
        $this->tinggi = $tinggi;
    }
    function set_berat($berat) {
        $this->berat = $berat;
    }

    function get_nama() {
        return $this->nama;
    }

    function get_tinggi() {
        return $this->tinggi;
    }

}

class Dog extends Animal {
    public function speak() {
        echo "{$this->nama}: I am a dog, woof, woof<BR>";
    }
}

$newdog = new Dog("Snowy");
$newdog->set_nama("Jasmine");
$newdog->speak();

$dog = new Animal("Pleki");
$cat = new Animal("Felix");
$dog->set_nama("Pleki");
$cat->set_nama("Felix");
$dog->nama = "Bleki";
$dog->set_tinggi(50);
// echo $dog->tinggi;

echo $dog->get_nama();
echo " tinggi: ".$dog->get_tinggi()." cm";
echo "<P>";
echo $cat->get_nama();
echo "<P>";

?>