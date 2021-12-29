<?php

/* 2 užduotis

Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms. */

class myActors {

public $name;
public $surname;

	public function __construct($name,$surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

	public function echo() {
	
		echo 'Mano mylimiausias aktorius yra: <br>';
		echo $this->name . ' ';
		echo $this->surname . '<p>';
	
	}	
}

class wifesActors {

public $name;
public $surname;

	public function __construct($name,$surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

	public function echo() {
	
		echo 'Mano žmonos mylimiausias aktorius yra: <br>';
		echo strtoupper($this->name) . ' ';
		echo strtoupper($this->surname) . '<p>';
	
	}	
}

$myActor = new myActors('John','Travolta');
$wifesActor = new wifesActors('Richard','Gere'); 
echo $myActor-> echo();
echo $wifesActor-> echo();


?>
