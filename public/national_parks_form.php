<?php  

require_once '../Input.php';
require_once '../db_connect.php';

function pageController($dbc){


    if(Input::has('name') && Input::has('location') && Input::has('date_established')
        && Input::has('area_in_acres') && Input::has('description'))
    {
        $name = Input::get('name');
        $location = Input::get('location');
        $date_established = Input::get('date_established');
        $area_in_acres = Input::get('area_in_acres');
        $description = Input::get('description');

        $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
            VALUES (:name, :location, :date_established, :area_in_acres, :description)');

        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_INT);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);

        $stmt->execute();
        var_dump($stmt);
        var_dump($name);

    }

}
pageController($dbc);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Park Add</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <style>
       /*  body {
                background-image: url("images/logo.png") no-repeat top center;
            }*/
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="headline"><img class="img-responsive" src="./img/header.png"></h1><br><br>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" type="text" placeholder="New Park" class="form-control" id="name" required>
                </div>
                 <div class="form-group">
                    <label for="location">State:</label>
                    <input name="location" type="text" placeholder="Texas" class="form-control" id="location" required>
                </div>
                <div class="form-group">
                    <label for="date_established">Date Established:</label>
                    <input name="date_established" type="text" placeholder="9999-12-30" class="form-control" id="date_established" required>
                </div>
                <div class="form-group">
                    <label for="area_in_acres">Area in Acres:</label>
                    <input name="area_in_acres" type="text" placeholder="No commas" class="form-control" id="area_in_acres" required>
                </div>
                 <div class="form-group">
                    <label for="description">Description:</label>
                    <input name="description" type="text" placeholder="Park Thoughts?" class="form-control" id="description" required>
                </div>

                <p class="submit" ><input class="btn btn-lg center-block" type="submit" value="submit"></p>
                <p><a class="btn btn-lg center-block" href="national_parks.php">Back to National Parks</a></p>
            </form>
        </div>
    </body>
</html>











