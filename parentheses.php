<?php 

class Solution {

    function main () { 
        var_dump($this->isValid("()"));
        var_dump($this->isValid("()[]{}"));
        var_dump($this->isValid("(]"));
        var_dump($this->isValid("([)]"));
        var_dump($this->isValid("{[]}"));
        var_dump($this->isValid("]"));
        var_dump($this->isValid("A"));
    }

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $string) {
        $dictionary = [
          '(' => ')',
          '{' => '}',
          '[' => ']',            
        ];
        
        $oDictionary = array_flip($dictionary);
        
        $arrayControl = [];
        foreach (str_split($string) as $char) {
            if (isset($dictionary[$char])) {
                $arrayControl[] = $char;
            } elseif (isset($oDictionary[$char])) {
                if (end($arrayControl) == $oDictionary[$char]) {
                    array_pop($arrayControl);
                } else {
                  return false;
                }
            } else {
              return false;
            }
        }
         
        return empty($arrayControl);
    }
}

$main = new Solution();
$main->main();
