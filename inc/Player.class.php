<?php
class Player {
  /**
   * @var string
   */
  private $Name;

  /**
   * Life bar of the player (min = 0, max = 100)
   * @var integer 
   */
  private $Life;

  /**
   * @var integer 
   */
  private $Offense;

  /**
   * @var integer 
   */
  private $Defense;

  function __construct($name, $offense, $defense) {
    $this->Name = $name;
    $this->Offense = $offense;
    $this->Defense = $defense;
    $this->Life = 100;
  }

  public function getName() {
    return $this->Name;
  }

  public function getLife() {
    return $this->Life;
  }

  // Calculate the force of the attack
  public function punch(){
    return ($this->Offense + rand(0,100));
  }

  // Receive an attack (update life)
  public function defend($force){
    $this->updateLife($force - $this->Defense);
  }

  // Update the life with the life lost
  private function updateLife($receivedForce){
    $lifeLost = ($receivedForce > 0) ? $receivedForce : 0 ;
    $this->Life -= ($lifeLost < $this->Life) ? $lifeLost : $this->Life ;
  }
}
?>