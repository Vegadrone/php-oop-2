<?php 
    require_once __DIR__ . '/CreditCard.php';
    class User{
        protected $name;
        protected $surname;
        protected $creditCard;
        
        public function __construct($_name, $_surname){
            $this-> name = $_name;
            $this-> surname = $_surname;
        }

        public function setName($_name){
            $this-> name = $_name;
        }

        public function getName(){
            return $this-> name;
        }

        public function setSurname($_surname){
            $this-> surname = $_surname;
        }

        public function getSurname(){
            return $this-> surname;
        }

        public function addCreditCard($creditCard){
            $this-> creditCard = $creditCard;
        }
    }

?>