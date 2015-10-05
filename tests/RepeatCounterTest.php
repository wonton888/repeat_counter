<?php

    require_once "src/RepeatCounterFunction.php";

    class RepeatCounterTest extends
    PHPUnit_Framework_TestCase
    {
        function test_makeSingleLetter()
        {
            //arrange

            $test_makeSingleLetter = new RepeatCounter;
            $word = "a";
            $phrase = "a";

            //act

            $result = $test_makeSingleLetter->countRepeats($word, $phrase);

            //assert

            $this->assertEquals("matches found:1", $result);

        }

        function test_SingleLetter_None()
        {
            //arrange

            $test_makeSingleLetter_None = new RepeatCounter;
            $word = "a";
            $phrase= "b";

            //act

            $result = $test_makeSingleLetter_None->countRepeats($word, $phrase);

            //assert

            $this->assertEquals("matches found:0", $result);

        }


    }
