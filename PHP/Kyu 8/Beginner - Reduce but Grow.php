<?php
function grow($a) {
    $result = 1;
    for ($i=0; $i<count($a); $i++){
        $result = $result * $a[$i];
    }
    return $result;
}

//The best answer is:
/*function grow($a) {

    if ( !empty($a) ) {
        return $result = array_product($a);
    }
}*/