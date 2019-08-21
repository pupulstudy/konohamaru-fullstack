<?php
// 1. Let's Form a Sentence

$word = 'JavaScript';
$second = 'is';
$third = 'awesome';
$fourth = 'and';
$fifth = 'I';
$sixth = 'love';
$seventh = 'it!';

echo "$word $second $third $fourth $fifth $sixth $seventh\n";

// 2. Index Accessing - 1 by 1

$word = "wow JavaScript is so cool";
$exampleFirstWord = $word[0] . $word[1] . $word[2];
$secondWord = $word[4] . $word[5] . $word[6] . $word[7] . $word[8] . $word[9] . $word[10] . $word[11] . $word[12] . $word[13];
$thirdWord = $word[15] . $word[16];
$fourthWord = $word[18] . $word[19];
$fifthWord = $word[21] . $word[22] . $word[23] . $word[24];

echo "First Word: $exampleFirstWord\n";
echo "Second Word: $secondWord\n";
echo "Third Word: $thirdWord\n";
echo "Fourth Word: $fourthWord\n";
echo "Fifth Word: $fifthWord\n";

// 3. Breaking Sentence (Again) using Substring

$word3 = 'wow JavaScript is so cool';
$exampleFirstWord3 = substr($word, 0, 3);
$secondWord3 = substr($word, 4, 10);
$thirdWord3 = substr($word, 15, 2);
$fourthWord3 = substr($word, 18, 2);
$fifthWord3 = substr($word, 21, 4);

echo "First Word: $exampleFirstWord\n";
echo "Second Word: $secondWord\n";
echo "Third Word: $thirdWord\n";
echo "Fourth Word: $fourthWord\n";
echo "Fifth Word: $fifthWord\n";

// 4. Breaking Sentence (yet Again) and Count Each Length

$word4 = 'wow JavaScript is so cool';
$exampleFirstWord4 = substr($word, 0, 3);
$secondWord4 = substr($word, 4, 10);
$thirdWord4 = substr($word, 15, 2);
$fourthWord4 = substr($word, 18, 2);
$fifthWord4 = substr($word, 21, 4);

$firstWordLength = strlen($exampleFirstWord4);
$secondWordLength = strlen($secondWord4);
$thirdWordLength = strlen($thirdWord4);
$fourthWordLength = strlen($fourthWord4);
$fifthWordLength = strlen($fifthWord4);

echo "First Word: $exampleFirstWord4, with length: $firstWordLength\n";
echo "Second Word: $secondWord4, with length: $secondWordLength\n";
echo "Third Word: $thirdWord4, with length: $thirdWordLength\n";
echo "Fourth Word: $fourthWord4, with length: $fourthWordLength\n";
echo "Fifth Word: $fifthWord4, with length: $fifthWordLength\n";
?>