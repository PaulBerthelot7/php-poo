<?php
class Form{
   public $action;
   public $method;
   public $name;
   public $value;
   public $html;
   
   public function __construct($action,$method)
   {
       $this->action = $action;
       $this->method = $method;
       $this->html = $this->addForm();
   }

   public function addForm() 
   {
       return "<form action=''.$this->action.'method=''.$this->method.''>";
   }

   public function addTextField(string $nom, string $prenom)    
   {
       $this->html .="<input type='text' name='' .$name.'' value=''.$value.''>";
       return $this;
   }

   public function addSubmitButton() 
   {
    $this->html .= "<input type='submit' value=$value >";
    return $this;
   }

   public function build() {
    return $this->html."</form>";
}
    
}


