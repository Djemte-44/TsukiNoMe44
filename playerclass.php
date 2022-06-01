<?php
include 'connection.php';
session_start();

class player{
    //class properties
    private $id;
    private $name;
    private $surname;
    private $team;
    private $kitnumber;
    private $nationality;
    private $info;

    //constructor
    function __construct($id, $n, $s, $t, $kn, $nt, $in){
    //validating input data
        $this->id=$id;
        $this->name=$n;
        $this->surname=$s;
        $this->$team=$t;
        $this->kitnumber=$kn;
        $this->nationailty=$nt;
        $this->info=$in;
    }

    function getID(){ return $this->id; }
    function getName(){ return $this->name; }
    function getSurname(){ return $this->surname; }
    function getTeam(){ return $this->team; }
    function getKitnumber(){return $this->kitnumber; }
    function getNationality(){ return $this->nationality; }
    function getInfo(){ return $this->info; }


    function toString()
      {
        echo "Player ID:". $this->getID(). "<br>";
        echo "Player Name:". $this->getName(). "<br>";
        echo "Player Surname:". $this->getSurname(). "<br>";
        echo "Player Team :". $this->getTeam(). "<br>";
        echo "Player Kitnumber:". $this->getKitnumber(). "<br>";    
        echo "Player Nationality:". $this->getNationality(). "<br>";
        echo "Player Info:". $this->getInfo(). "<br>";

      }

}
?>