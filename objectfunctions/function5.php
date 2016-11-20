<?php
  class newZoo{

    public function getAnimals($animal1,$animal2,$animal3){
      $zoo = array($animal1,$animal2,$animal3);
        foreach($zoo as $animal){
          echo 'Animal name is ' .$animal."<br>";
        }


  }

}


if (class_exists('newZoo')) {
      $zoo = new newZoo();
      print_r ($zoo->getAnimals('Jiraffe','Panda','Snake'));


}

?>
