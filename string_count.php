<?php
    
  $string= "Lorem ipsum dolor quisquam libero cupiditate!";

    function str_count_with_sort($string){
        $char_string = "abcdefghijklmnopqrstuvwxyz";
        $count = strlen($string);
        $string_array = array();
        for($i =0; $i<26; $i++){
            for($j=0; $j<$count; $j++){
                if($char_string[$i]==strtolower($string[$j])){
                    if(array_key_exists( $char_string[$i] ,$string_array)){                
                        $string_array[$char_string[$i]] =  $string_array[$char_string[$i]] +1;
                    }else{
                        $string_array[$char_string[$i]] = 1;
                    }
                }
            }
        }
        return $string_array;
    }

  
$count = str_count_with_sort($string);
print_r($count);


   
