<?php 

    class CreditCard{
        protected $ownerName;
        protected $number;
        protected $cvc;
        protected $expiringDate;

        public function __construct($_ownerName, $_number, $_cvc, $_expiringDate){
            $this-> ownerName = $_ownerName;
            $this-> number = $_number;
            $this-> cvc = $_cvc;
            $this-> expiringDate = $_expiringDate;   
        }
    }
?>