<?php 

class TextField {
    public function addTextField (string $nameField , string $valueField)
    {
     $this->fields[]="<input placeholder='Votre nom de jeu' type='text' name='$nameField' value='$valueField'>";
     return $this;
    }
}

//fonctionn pas ... 