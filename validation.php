<?php

//Input should not be empty and not null
function notEmp($str = null){
    $cleanStr = trim($str);
    return(strlen($cleanStr) <= 0) ? false: true;
}
/* //Contact number should only be number not a string.
function justNum ($str = null){
    return(is_numeric($str)) ? true : false;
} */
//inputs should not start with a number
function shouldnotNum($str = null){
    $a = substr($str,0,1);
    return (is_numeric($a)) ? false : true ;
}
//Input should not start special character
function notSpecialChar($str = null){
    if ($str){
        $firstChar = substr($str, 0, 1);
        return (preg_match('/[^a-zA-Z\d]/', $firstChar)) ? false : true;
    }
}
//First name and last name should not be less than 2 length of a string
function moreThan2 ($str=null){
    $cleanStr = strlen(trim($str));
    return($cleanStr >= 2) ? true : false;
}
// should not contain any html tags
function notags($str = null){
    return (preg_match('/[<>]/', $str)) ? false : true;
}
//Email should be correct format. 
function emailFormat ($str = null){
    return(preg_match_all('/^([a-zA-Z\d\.-]+)@([a-zA-Z\d-]+)\.([a-zA-Z]{2,4})$/', $str)) ? true : false;
}
//Contact number should follow the ff. pattern +63
function philpreffix($str){
    return (substr($str, 0, 3) == "+63" && strlen($str)==13 && is_numeric(substr($str,1, 13))) ? true: false;

    
}
?>