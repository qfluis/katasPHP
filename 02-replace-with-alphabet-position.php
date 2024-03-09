<?php
// In this kata you are required to, given a string, replace every letter 
// with its position in the alphabet.
// If anything in the text isn't a letter, ignore it and don't return it.
// "a" = 1, "b" = 2, etc.


// Solució Luis
function alphabet_position(string $text): string {
    $alphabet_str = "abcdefghijklmnopqrstuvwxyz";
    $alphabet_arr = array_flip(str_split($alphabet_str,1));
    $text_arr = str_split($text,1);
    $result = [];
    foreach($text_arr as $letter){
        $letter = strtolower($letter);
        if (array_key_exists($letter, $alphabet_arr)) $result [] = $alphabet_arr[$letter]+1;
    }    
    return implode(' ', $result);
}

// Otras soluciones
// https://www.codewars.com/kata/546f922b54af40e1e90001da/solutions/php
function alphabet_position2(string $s): string {
  
    $result = [];
    
    for ($i = 0; $i < strlen($s); $i++) {
  
      if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
        $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
      }
    }
    
    return join(' ', $result);
  }

  function alphabet_position3(string $s): string {
    $abc = array_flip(range('a', 'z'));
  
      $string = [];
      foreach(str_split(strtolower($s)) as $letter) {
          if(isset($abc[$letter])) {
              $string[] = $abc[$letter] + 1;
          }
      }
  
      return implode(' ', $string);
  }












echo alphabet_position("abCdefghijklmnopqrstuvwxyz");