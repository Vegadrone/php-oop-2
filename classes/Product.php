<?php 
    class Product{
        protected $brand;
        protected $description;
        protected $price;

        public function __construct($_brand, $_description, $_price){
            $this-> brand = $_brand;
            $this-> description = $_description;
            $this-> price = $_price;
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

        public function setPrice($_price){
            $this-> price = $_price;
        }

        public function getPrice(){
            return $this-> price;
        }

    }

?>