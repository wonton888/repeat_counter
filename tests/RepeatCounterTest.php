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

        function test_makeWordMatch(){
            //arrange

            $test_makeWordMatch = new RepeatCounter;
            $word = "apple";
            $phrase = "apple";

            //act

            $result = $test_makeWordMatch->countRepeats($word,$phrase);

            //assert

            $this->assertEquals("matches found:1", $result);

        }

        function test_makeWordMatch_None()
        {
            //arrange

            $test_makeWordMatch_None = new RepeatCounter;
            $word = "apple";
            $phrase = "orange";

            //act

            $result = $test_makeWordMatch_None->countRepeats($word, $phrase);

            //assert

            $this->assertEquals("matches found:0", $result);

        }

        function test_makeWordPhraseMatch_None()
        {
            //arrange

            $test_makeWordPhraseMatch_None = new RepeatCounter;
            $word = "boy";
            $phrase = "I am a girl";

            //act

            $result = $test_makeWordPhraseMatch_None->countRepeats($word, $phrase);

            //assert

            $this->assertEquals("matches found:0", $result);
        }

        function test_makeWordPhraseMatch_Multiple(){
            //arrange

            $test_makeWordPhraseMatch_Multiple = new RepeatCounter;
            $word = "food";
            $phrase = "All I think of is food food";

            //act

            $result = $test_makeWordPhraseMatch_Multiple->countRepeats($word, $phrase);

            //assert

            $this->assertEquals("matches found:2", $result);
        }


    }
