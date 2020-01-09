<?php
 
 class Vehicle{
  public $no_wheels;
  public $engine_no;
 }

 class Car extends Vehicle{
 	
 	function show(){
 		$no_wheels = 4;
 	    $engine_no = "a888vd";
 		echo "No of wheels are ".$no_wheels."<br>";
 		echo "Engine_no is".$engine_no."<br>";
 	}
 }
 
 class Truck extends Vehicle{
 	
 	function show(){
 		$no_wheels = 12;
 	    $engine_no = "33e3d3";
 		echo "No of wheels are ".$no_wheels."<br>";
 		echo "Engine_no is  ".$engine_no."<br>";
 	}
 }
 
 $cr = new Car();
 $tr = new Truck();

 $cr->show();
 $tr->show();

?>
