<?php

function timeConversion($s) {
    // Write your code here
    
    $hour   = substr($s,0,2);  
    $minute = substr($s,3,2);
    $second = substr($s,6,2);
    $day    = substr($s,8,2);
    
    $t24 = "";
    
    $hour24 = "";
    
    if($day == "PM"){
        if($hour == "12"){
            $hour24 = intval($hour)+0;
            $t24 = $hour24.":".$minute.":".$second;
        
        }else{
        
        $hour24 = intval($hour)+12;
        
        if($hour24 == 0){
            
            $hour24 = "00";
            
        }
        
        if(strlen(abs($hour24)) == 1){
            
            $hour24 = "0".abs($hour24);
            
        }
        
        $t24 = $hour24.":".$minute.":".$second;
        }
    }elseif($day == "AM"){
    
        
        $hour24 = $hour;
        if($hour24 == "12"){
            
             $hour24 = intval($hour)-12;
        
        if($hour24 == 0){
            
            $hour24 = "00";
            
        }
            
        }
       
       
        
        if(strlen(abs($hour24)) == 1){
            
            $hour24 = "0".abs($hour24);
            
        }
        
        $t24 = $hour24.":".$minute.":".$second;
        
    }
   
    return $t24;
    

}


echo timeConversion("04:59:59AM");

?>
