<?php
function getCount($str) {
    $vowelsCount = 0;
    $s = str_split($str);
    for($i='0'; $i<count($s); $i++){
        if($s[$i] == 'a' or $s[$i] == 'e' or $s[$i] == 'i' or $s[$i] == 'o' or $s[$i] == 'u'){
            $vowelsCount++;
        }
    }
    return $vowelsCount;
}

//The best answer is:
/*function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    // enter your magic here
    foreach($vowels as $vowel) {
        $vowelsCount += substr_count($str, $vowel);
    }


    return $vowelsCount;
}*/