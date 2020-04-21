<?php 

class TextField {
    public function addTextField (string $nameField , string $valueField)
    {
     $this->fields[]="<input placeholder='Votre nom de jeu' type='text' name='$nameField' value='$valueField'>";
     return $this;
    }

    public function __toString ()
    {
        return ;//mettre le html
    }
}

//fonctionn pas ... 