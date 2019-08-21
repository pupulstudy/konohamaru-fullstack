<?php

function balikKata($kata) {
	return strrev($kata . "\n");
}

// TEST CASES
echo balikKata('Hello World and Coders'); // sredoC dna dlroW olleH
echo balikKata('John Doe'); // eoD nhoJ
echo balikKata('I am a bookworm'); // mrowkoob a ma I
echo balikKata('Coding is my hobby'); // ybboh ym si gnidoC
echo balikKata('Super'); // repuS

?>