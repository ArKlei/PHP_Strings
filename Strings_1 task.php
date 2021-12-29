<?php

/* 1 užduotis

Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą. */


class Actor {

public $name;
public $surname;
public $short;

	public function __construct($name,$surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

	public function echo() {
		
		echo 'Mylimiausias aktorius yra: <br>';
		echo $this->name . ' ';
		echo $this->surname . '<p>';
		
		$short = str_replace('John','J',$this->name);
		echo 'Sutrumpintai: ' . $short . '.' . $this->surname;
	
	}	
}

$myActor = new Actor(' John','Travolta');
echo $myActor-> echo();


?>
