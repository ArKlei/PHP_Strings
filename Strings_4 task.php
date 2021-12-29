<?php

/* 4 užduotis

Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti. */


class Actor {

public $name;
public $surname;
public $part_name;
public $part_surname;
public $password;


	public function __construct($name,$surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

	public function echo() {
		
		echo 'Mylimiausias aktorius yra: <br>';
		echo $this->name . ' ';
		echo $this->surname . '<p>';
		
		$part_name = substr($this->name,1);
		$part_surname = substr($this->surname,5);
		echo 'Slaptažodis, sudarytas iš trijų paskutinių vardo ir pavardės raidžių yra: "' . $part_name . $part_surname . '".';
	
	}	
}

$myActor = new Actor('John','Travolta');
echo $myActor-> echo();


?>
