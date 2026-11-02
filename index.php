<?php
class Character{
    public $name;
    public $alignment;
    public $hp;
    public function __construct($new_name, $new_alignment, $new_hp){
        $this->name = $new_name;
        $this->alignment = $new_alignment;
        $this->hp = $new_hp;
    }
}
class Warrior extends Character{
    public $weapon;
    public function __construct($new_name, $new_alignment, $new_hp, $new_weapon){
        parent::__construct($new_name, $new_alignment, $new_hp);
        $this->weapon = $new_weapon;
    }
    public function attack($weapon_dice){
        $damage = rand(1, $weapon_dice);
        echo "Il mio attacco ha fatto $damage danni! \n";
    }
    public function round_attack($n, $weapon_dice){
        for($i = 1; $i <= $n; $i++){
            $this->attack($weapon_dice);
        }
    }
}
class Wizard extends Character{
    public $magic;
    public function __construct($new_name, $new_alignment, $new_hp, $new_magic){
        parent::__construct($new_name, $new_alignment, $new_hp);
        $this->magic = $new_magic;
    }
}
 class Goku extends Wizard {
}
class Vegeta extends Wizard {
}
$balduran = new Warrior("Balduran", "N", "150", "Spada lunga");
$balduran->round_attack(3, 10);
$goku = new Goku("Goku", "Buono", 200, "Kamehameha");
$vegeta = new Vegeta("Vegeta", "Neutrale", 180, "Final Flash");