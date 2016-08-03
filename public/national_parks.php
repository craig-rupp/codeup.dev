<?php 

require_once '../db_connect.php';
require_once '../input.php';
function getDemParks($dbc){
	
	//require_once '../park_seeder.php';
	


	// $page = Input::get($page);
	// // Input::get('page', 1) < 0 ? 1 : Input::get('page');
	// $limit = 4;
 //    $offset = ($page - 1) * $limit;

	$stmt = $dbc->query('SELECT * FROM national_parks');

	$parks = [];
	while($park = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$parks[] = $park;
	}
	return [
	 'parks' => $parks
	];
}
extract(getDemParks($dbc));

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
		              <tfoot>
		                <tr>
		                    <td colspan="4">
		                        <nav aria-label="Page navigation" class="text-center">
		                            <ul class="pagination">
		                                <li>
		                                    <a href="?page=<? $offset - 1?>" aria-label="Previous">
		                                        <span aria-hidden="true">&laquo;</span>
		                                    </a>
		                                </li>
		                                <li><a href="?page=1">1</a></li>
		                                <li><a href="?page=2">2</a></li>
		                                <li><a href="?page=3">3</a></li>
		                                <li><a href="?page=4">4</a></li>
		                                <li><a href="?page=5">5</a></li>
		                                <li>
		                                    <a href="?page=<? $page +1 ?>" aria-label="Next">
		                                        <span aria-hidden="true">&raquo;</span>
		                                    </a>
		                                </li>
		                            </ul>
		                        </nav>
		                    </td>
		                </tr>
		              </tfoot>
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