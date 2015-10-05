<?php

    class RepeatCounter
    {
        function countRepeats($word, $phrase)
        {
            $count = 0;
            $output = "matches found:";
            $phrase_array = array();
            $phrase_array = explode(" ", $phrase);

            foreach ($phrase_array as $word_found){
                if ($word == $word_found){

                    $count += 1;
                }

                else{
                    $count += 0;
                }
            }
            return $output . $count;

        }
    }

?>
