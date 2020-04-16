<?php 

class Numberfield {
    public function addNumberField (string $nameField, string $valueField)
    {
       $this->fields[]="<input placeholder='Votre nom' type='number' name='$nameField' value='$valueField'>";
       return $this;
    }
}