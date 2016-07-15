<?php
function pageController()
{
    $data = [];
    $randomAdjective = ['awesome', 'legendary', 'great', 'cool', 'amazing'];
    shuffle($randomAdjective);
    $data['randomAdjective'] = array_shift($randomAdjective);
    $randomNoun = ['php', 'javascript', 'css', 'html', 'mysql'];
    shuffle($randomNoun);
    $data['randomNoun'] = array_shift($randomNoun);
    // $data['randomAdjective']= $randomAdjective[array_shift(shuffle(['awesome', 'legendary', 'great', 'cool', 'amazing']))];
    // $data['randomNoun'] = $randomNoun[array_shift(shuffle(['php', 'javascript', 'css', 'html', 'mysql']))];
    return $data;

    // $randomAdjective='awesome';
}
// var_dump($randomNoun);
// var_dump($randomAdjective);
extract(pageController());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"
    >
    <title>Server name generator</title>
</head>
<body>
<h1><?= "$randomAdjective" ?> <?= "$randomNoun" ?></h1>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
</script>
</body>
</html>