<?php
include 'textfield.php';
include 'numberfield.php';
include 'checkboxfield.php';


class Form{
 public $fields=[]; //field est un tableau contenant l'html 
 public $method; // la methode exercé soit POST
 public $action; // c'est le chemin
 public $button; // bouton envoyer

// 
 public function __construct (string $action ,string $method)
 {
     $this->action = $action;
     $this->method = $method;
 }

 public function __toString ()
 {
   return $this->TextField;
 }

//pas fini à réflechir




//champs de saisi pour le texte
 public function addTextField (string $nameField , string $valueField)
 {
  $this->fields[]= new TextField($nameField,$valueField) ;
  return $this;
 } 
// champs de saisi pour les nombres
 public function addNumberField (string $nameField, string $valueField)
 {
    $this->fields[]= new NumberField($namefield,$valueField);
    return $this;
 }
//fonction permettant de cocher une case pour ???
 public function addCheckboxField (String $nameField, bool $valueField)
 {
    $checked = ($valueField)?'checked':'';
    $this->fields[] = "<input type='checkbox' name='$nameField' $checked>";
    return $this;
 } 
//bouton pour envoyer le formulaire
 public function addSubmitButton ($text) 
 {
    $this->fields [] ="<input type='submit' value ='$text'>";
    return $this;
 }
//je décide d'implanter le bouton dans fields pour ne pas me perdre dans le build

 public function addSelectField (array $options, string $nameField , string $valueField)
 {
    $build_html = "<select name='$nameField'>";
    foreach ($options as $key => $option) {
       $build_html .= "<option value='$key'>$option</option>";
    }
    $build_html .= "</select>";
    $this->fields[]= $build_html;
    return $this;
 }


 /*  $this->fields [] = 
"<select name='$nameField'>
        <option value='1'>Monsieur</options> 
        <option value='2'>Madame</options>
        <option value='3'>Autres</options>
 </select>";
 */






//donc j'implante le select dans fields aussi / le select n'est pas fini je suis encore en refléction pour le mettre avec l'index


 public function build() //build c'est l'assambleur d'html
    {
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field)
        {$html .= $field;}
        $html .= '</form>';
        return $html;
    }

//donc la boucle va chercher tous ce qu'il y a dans le tableau fields






}


