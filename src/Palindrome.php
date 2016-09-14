<?php
    class Palindrome
    {
        function checkPalindrome($input)
        {
            // if (strtolower($input) == strrev(strtolower($input))){
            //     return true;
            // }
            $return_word = "";
            $input_array = str_split(strtolower($input));

            for ($i = strlen($input) - 1; $i >= 0; $i--)
            {
                $return_word .= $input_array[$i];
            }

            if ($return_word == strtolower($input)) {
                return true;
            } else {
                return false;
            }

        }
    }
?>
