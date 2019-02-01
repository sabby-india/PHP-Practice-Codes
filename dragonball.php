<?php
class Dragonball{
	private $ballCount;
	public function __construct(){
		$this->ballCount = 0;
		
	}
	public function iFoundaBall(){
		$this->ballCount ++;
		if($this->ballCount == 5){
				echo "you can ask for wish";
				$this->ballCount =0;
		}
		else
			echo $this->ballCount;
			
	}

}
$db = new Dragonball();
$db -> {'iFoundaBall'}();
$db -> {'iFoundaBall'}();
$db -> {'iFoundaBall'}();
$db -> {'iFoundaBall'}();
$db -> {'iFoundaBall'}();
