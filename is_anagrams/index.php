<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function isAnagram($firstWord, $secondWord) {

    //Convert both strings to lowercase
    $firstWord = strtolower($firstWord);
    $secondWord = strtolower($secondWord);

    //Replace any spaces with no spaces
    $firstWord = str_replace(' ', '', $firstWord);
    $secondWord = str_replace(' ', '', $secondWord);

    //Definition of Anagram is two words which have the same letters in same count but in different order. So a word cannot be its anagram.
    if ($firstWord !== $secondWord) {
        //Break the word and creat as an array
        $firstWordArray = str_split($firstWord);
        $secondWordArray = str_split($secondWord);
        
        //Sort both arrays so the letters will be in ASC order
        sort($firstWord);
        sort($secondWord);
        
        //Check if both arrays are identical
        if ($firstWordArray === $secondWordArray) {
            return "$firstWord and $secondWord are Anagrams";
        }else{
            return "$firstWord and $secondWord aren't Anagrams";
        }
    } else {
        return "$firstWord and $secondWord are same";
    }
}

$firstWord = "SiLenT";
$secondWord = "LIsTEn";

echo isAnagram($firstWord, $secondWord);