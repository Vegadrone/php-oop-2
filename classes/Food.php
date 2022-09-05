<?php 
    
    require_once __DIR__ . '/Product.php';
    class Food extends Product{
        protected $name;
        protected $weight;
        protected $type;
        protected $packsNumber;
        protected $animalType;

       public function __construct($_name, $_weight, $_type, $_packsNumber, $_animalType){
            $this-> $_name;
            $this-> weight = $_weight;
            $this-> type = $_type;
            $this-> packsNumber = $_packsNumber;
            $this-> animalType = $_animalType;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getName(){
            return $this-> weight;
        }

        public function setWeight($_weight){
            $this-> weight = $_weight;
        }

        public function getWeight(){
            return $this-> weight;
        }

        public function setType($_type){
            $this->type = $_type;
        }

        public function getType(){
            return $this-> type;
        }
        public function setPacksNumber($_packsNumber){
            $this->packsNumber= $_packsNumber;
        }

        public function getPacksNumber(){
            return $this-> packsNumber;
        }
        
        public function setAnimalType($_animalType){
            $this->animalType = $_animalType;
        }

        public function getAnimalType(){
            return $this-> animalType;
        }

    }
?>