<?php
Class elevator{
    Public function $move{ 
      If($people== true){
          if(move==true) {$this->moveDown()||$this->lightOn()}
          elseif($this->move()==false){$this->moveUp()||$this->lightOn()})
      elseif($this->move()==false){
      lightOff; 
          Exit; 
      }
   Private $lightOn = 1;
   Private function $lightOff=0;
   Private function $moveDown(){ 
   // 
   } 
   Private function $moveUp(){ 
   // 
   }  
  Public $color; 
  Public $material;  
  } 
}
    $passengers = new elevator;
$passengers->setColor="grey";
$passengers->setLight="TRUE";
$passengers->setStop="TRUE";
$passengers->setMaterial="glass and metal";
$passengers->setSpeed="2km";

$cargo =new elevator;
$cargo->setCarrying="8";
$cargo->setColor="grey";
$cargo->setLight="TRUE";
$cargo->setStop="TRUE";
$cargo->setMaterial="metal";
$cargo->setSpeed="1km";
$a=[$cargo];
print_r($a);
?>
