<?php

$favoriteThings = ['Loud', 'Hip Hop', 'Guacamole', 'Arsenal', ];

?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>
    <title>Codeup!</title>
</head>
<body>
    <h1>My Favorite Foods</h1>
    <table>
    <?php foreach ($favoriteThings as $things) { ?>
        <tr><td><?php echo $things; ?></td></tr>
    <?php } ?>
    </table>
</body>
</html>