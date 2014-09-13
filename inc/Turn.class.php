<?php
class Turn {

  private $Players;

  function __construct($players){
      $this->Players = $players;      
  }

  public function start(){
    echo "\n<br/>".$this->Players[0]->getName().' is attacking '.$this->Players[1]->getName().'.';
    $attackForce = $this->Players[0]->punch();
    $this->Players[1]->defend($attackForce);
    echo "\n<br/>".$this->printResults();
  }

  private function printResults() {
    foreach ($this->Players as $player) {
      echo "&nbsp;".$player->getName().' life: '.$player->getLife();
    }
  }
}
?>