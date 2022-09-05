<?php 
    class Product{
        protected $brand;
        protected $description;

        public function __construct($_brand, $_description){
            $this-> brand = $_brand;
            $this-> description = $_description;
        }

        public function setBrand($_brand){
            $this-> brand = $_brand; 
        }

        public function getBrand(){
            return $this-> brand;
        }

        public function setDescription($_description){
            $this-> description = $_description;
        }

        public function getDescription(){
            return $this-> description;
        }

    }

?>