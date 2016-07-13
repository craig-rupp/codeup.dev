<?php

$nouns = ['Notorious BIG', 
'Young Thug', 
'Rich Homie Quan',
'A$AP Ferg', 
'Dom Kennedy',
'Kendrick Lamar',
'Chance',
'Travi$ Scott',
'Drake',
'PARTYNEXTDOOR'];

$adjectives = ['Immense',
'Bewildered',
'Rich',
'Quaint',
'Zealous',
'Proud',
'Agreeable',
'Wild',
'Emotional',
'Tender'];

function randomNounElement($nouns){
	$randomNoun = $nouns[array_rand($nouns, 1)];
	return $randomNoun; 
}

function randomAdjectiveElement($adjectives){
	$randomAdjective = $adjectives[array_rand($adjectives, 1)];
	return $randomAdjective;
}

$randomNounGenerator = randomNounElement($nouns);
$randomAdjectiveGenerator = randomAdjectiveElement($adjectives);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>Hip Hop Moods</h1>
    <ol>
    <?php foreach ($nouns as $rappers) { ?>
        <li><?php echo $rappers; ?></li>
    <?php } ?>
    </ol>
  <h3><?php echo $randomNounGenerator . ' feeling kinda : ' . $randomAdjectiveGenerator . ' Today'; ?></h3>
</body>
</html>