<?php
class Fight {

  private $Players;
  private $Winner;

  function __construct($player1, $player2){
    if (!is_object($player1) || !is_object($player2)){
      throw new Exception("You must have 'Players' before starting a 'Fight'.", 1);
    }

    $this->Players = array($player1, $player2);
  }

  public function setWinner($winner) {
    return $this->Winner = $winner;
  }

  public function getWinner() {
    return $this->Winner;
  }

  public function start() {
    $players = $this->Players;
    
    while(!$this->isOnePlayerLost()) {
      $turn = new Turn($players);
      $turn->start();
      $winner = $players[0];

      $players = array_reverse($players);// Because there is only 2 Players
    } 

    $this->setWinner($winner);
  }

  private function isOnePlayerLost() {
    foreach ($this->Players as $player) {
      if ($player->getLife() <= 0) {
        return true;
      }
    }
    return false;
  }
}
?>