<?php
    class Bank {
        public $balance = 1200;

        public function DisplayBalance(){
            return '<strong>Actual Amount : </strong>'.$this->balance;
        }

        public function Less($amount){
            if($this->balance < $amount){
                echo '<br>No Sufficient Balance Amount..';
            }
            else{
                return '<br><strong>Less Amount Actual:</strong>'.$amount.'<br>
                -----------------------------<br><strong>After Less Amount:</strong>'.$this->balance - $amount ;
            }
        }
    }
    $data = new Bank();
    echo $data->DisplayBalance();
    echo $data->Less(90);
?>