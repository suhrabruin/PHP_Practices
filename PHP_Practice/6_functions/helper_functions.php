<?php

function evaluate($age){
    if($age<18){
        return false;
    }
    return true;
}

function is_eligible($age){
    return evaluate($age)? "You are eligible":"You are not allowed";
}

function print_eligibility($age){
    echo  evaluate($age)? "You are eligible":"You are not allowed";
}