<?php 
  

function patid($n) 
{ 
    
    $generated_string = ""; 
      
    
    $domain = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
      
    
    $len = strlen($domain); 
      
    
    for ($i = 0; $i < $n; $i++) { 
        
        $index = rand(0, $len - 1);         
        
        $generated_string = $generated_string . $domain[$index]; 
    } 
      
    
    return $generated_string; 
} 
  

$n = 4; 
echo  patid($n); 
?> 