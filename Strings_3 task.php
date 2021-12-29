<?php

/* 3 užduotis

Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti. */

class Actor {

public $name;
public $surname;
public $short_name;
public $short_surname;


	public function __construct($name,$surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

	public function echo() {
		
		echo 'Mylimiausias aktorius yra: <br>';
		echo $this->name . ' ';
		echo $this->surname . '<p>';
		
		$short_name = str_replace('John','J',$this->name);
		$short_surname = str_replace('Travolta','T',$this->surname);
		echo 'Sutrumpintai (inicialai): ' . $short_name . '.' . $short_surname . '.';
	
	}	
}

$myActor = new Actor('John','Travolta');
echo $myActor-> echo();


?>
