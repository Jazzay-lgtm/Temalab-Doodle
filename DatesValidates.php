<?php

class DateValidates{
    public function startDateLaterNowDate($startDate){
        strtotime($startDate);
        time() - strtotime($startDate);
        if((time()-(60*60*24)) > strtotime($startDate)) { //múlt ág
            return (bool)false;
        }
        else { //jovő ág
            return (bool)true;
        }
    }
}
?>