<?php
  function convert_to_integer($data){
  
    answer= intval($data);
    if(answer == 0){
       return 0;
    }
    else{
      return answer;
    
    }
  
  }
  
  function convert_to_float($data){
     answer= floatval($data);
    if(answer == 0){
       return 0.0;
    }
    else{
      return answer;
    
    }
  } 
  
  function convert_to_string($data){
     answer= floatval($data);
    if(answer == 0){
       return 0.0;
    }
    else{
      return answer;
    
    }
  }
  
  function convert_to_bool($data){  
     answer= boolval($data);
    if(answer == false){
       return false;
    }
    else{
      return answer;
    
    }
  
  }

?>
