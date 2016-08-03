<?php 

// const DB_HOST = '127.0.0.1';
// const DB_NAME = 'parks_db';
// const DB_USER = 'parks_user';
// const DB_PASS = 'rocks';

// require_once '../db_connect.php';
function getDemParks(){
	
	require_once '../park_seeder.php';
	require_once '../input.php';


	$page = Input::get($page);
	// Input::get('page', 1) < 0 ? 1 : Input::get('page');
	$limit = 4;
    $offset = ($page - 1) * $limit;

	$stmt = $dbc->query('SELECT * FROM national_parks LIMIT 4');

	$parks = [];
	while($parks = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$parks[] = $park;
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<link
	            rel="stylesheet"
	            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	            crossorigin="anonymous">
		<title>National Parks</title>
	</head>
	<body>
		<div class="container">
			<section class="col-md-6">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Location</th>
							<th>Date Established</th>
							<th>Total Area (Acres)</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($parks as $park): ?>
							<tr>
								<td><?= $park['name']; ?></td>
								<td><?= $park['location']; ?></td>
								<td><?= $park['date_established']; ?></td>
								<td><?= $park['area_in_acres']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</section>
		</div>
		<script
		    src="https://code.jquery.com/jquery-2.2.4.min.js"
		    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		    crossorigin="anonymous"></script>

		<script
		    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		    crossorigin="anonymous"></script>
	</body>
</html>