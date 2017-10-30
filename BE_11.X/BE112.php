<?php
/*I'm using substr placement within the recurvise function to check whether ... 
*... first and last character matches, instead of making several functions for it.

*I noticed that it also counts capital letters as a different character.
*/

function Palindrome($string) {

    if ((strlen($string) == 1) || (strlen($string) == 0)) {
        echo " STRING IS PALINDROME";
    }

    else {

        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {
            return Palindrome(substr($string,1,strlen($string) -2));
        }
        else { echo " STRING IS NOT A PALINDROME"; }
    }
}

Palindrome ("regninger");

?>