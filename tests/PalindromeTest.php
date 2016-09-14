<?php
    require_once "src/Palindrome.php";

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_palindrome()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $input = "Kayak";

            //Act
            $result = $test_Palindrome->checkPalindrome($input);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_palindrome2()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $input = "Hello olleH";

            //Act
            $result = $test_Palindrome->checkPalindrome($input);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_palindrome3()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $input = "123404321";

            //Act
            $result = $test_Palindrome->checkPalindrome($input);

            //Assert
            $this->assertEquals(true, $result);
        }

    }

?>
