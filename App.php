<?php
$name=$_POST["Nev"];
$email=$_POST["Email"];
$regex=new Regex();
if($regex->name_regex($name)==true &&$regex->email_regex($email)){
    echo "Sikeres foglalás!";
}
class Regex
{
    public function email_regex($e){
        if(filter_var($e, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return true;
        }
        else{
            return false;
        }

    }
    public function name_regex($n){
        if (preg_match("/^([A-ZÁÉÚŐÓÜÖÍ]([a-záéúőóüöí.]+\s?)){2,}$/", $n)) {
            return true;
        }
        else {
            return false;
        }

    }

}

