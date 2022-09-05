<?php 

    require_once __DIR__ . '/Product.php';

    class Accessory extends Product{
        protected $name;
        protected $type;
        protected $size;
        protected $material;

        public function __construct($_name, $_type, $_size, $_material){
            $this-> name = $_name;
            $this-> type = $_type;
            $this-> size = $_size;
            $this-> material = $_material;             
        }

        public function setName($_name){
            $this-> name = $_name;
        }

        public function getName(){
            return $this-> name;
        }

        public function setType($_type){
            $this->type = $_type;
        }

        public function getType(){
            return $this->type;
        }
        public function setSize($_size){
            $this-> size = $_size;
        }

        public function getSize(){
            return $this-> size;
        }
        public function setMaterial($_material){
            $this-> material = $_material;
        }

        public function getMaterial(){
            return $this-> material;
        }    
    }
?>