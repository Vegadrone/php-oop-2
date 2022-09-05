<?php 

    require_once __DIR__ . '/Product.php';
    class Games extends Product{
        protected $name;
        protected $material;
        protected $type;
        protected $size;

        public function __construct($_name, $_material, $_type, $_size){
            $this-> name = $_name;
            $this-> material = $_material;
            $this-> type = $_type;
            $this-> size = $_size;  
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getName(){
            return $this->name;
        }

        public function setType($_type){
            $this->type = $_type;
        }

        public function getType(){
            return $this->type;
        }

        public function setSize($_size){
            $this->size = $_size;
        }

        public function getSize(){
            return $this->size;
        }
        
        public function setMaterial($_material){
            $this->material = $_material;
        }

        public function getMaterial(){
            return $this->material;
        }    
    }
?>