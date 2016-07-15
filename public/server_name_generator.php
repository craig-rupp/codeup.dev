<?php
function pageController(){
    $data = [];
    $rappers = ['Notorious BIG', 
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

    // $data['allRappers'] = $rappers;
    $data['rappers'] = $rappers[array_rand($rappers, 1)];
    $data['adjectives'] = $adjectives[array_rand($adjectives, 1)];
    // var_dump($data);

    return $data;


    // function randomNounElement($nouns){
    // 	$randomNoun = $nouns[array_rand($nouns, 1)];
    // 	return $randomNoun; 
    // }

    // function randomAdjectiveElement($adjectives){
    // 	$randomAdjective = $adjectives[array_rand($adjectives, 1)];
    // 	return $randomAdjective;
    // }

    // $randomNounGenerator = randomNounElement($nouns);
    // $randomAdjectiveGenerator = randomAdjectiveElement($adjectives);
}
extract(pageController());
// print_r($allRappers);
// var_dump($data);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>Hip Hop Moods</h1>
    <ol>
    <?php foreach ($allRappers as $rappers) { ?>
        <li><?php echo $rappers; ?></li>
    <?php } ?>
    </ol>
  <h3><?php echo $rappers . ' feeling kinda : ' . $adjectives . ' Today'; ?></h3>
</body>
</html>