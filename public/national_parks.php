<?php 

require_once '../db_connect.php';
require_once '../input.php';

function getDemParks($dbc){

	$page = !(Input::has('page')) ? 1 : Input::get('page');
	$limit = 4;
    $offset = $page * $limit - $limit;

    $parkTotal = $dbc->query("SELECT count(*) from national_parks")->fetchColumn();
    $maxCount = $parkTotal/4;
    $maxCount = ceil($maxCount);

	$stmt = $dbc->prepare("SELECT * FROM national_parks ORDER BY date_established DESC LIMIT :limit offset :offset");
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
	$stmt->execute();


	$parks = [];
	while($park = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$parks[] = $park;
	}
	return [
	 'parks' => $parks,
	 'page' => $page,
	 'maxCount' => $maxCount,
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
		<style>
			body{
				background-image: url("./img/park-log.png");
				background-repeat: no-repeat;
				background-position: center;
			}
			h1{
				text-align: center;
			}
			img{
				opacity: .5;
			}
		</style>
	</head>
	<body>
		<h1>National Parks</h1><br>
		<div class="container">
			<section class="col-sm-12">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Location</th>
							<th>Date Established</th>
							<th>Total Area (Acres)</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($parks as $park): ?>
							<tr>
								<td><?= $park['name']; ?></td>
								<td><?= $park['location']; ?></td>
								<td><?= $park['date_established']; ?></td>
								<td><?= $park['area_in_acres']; ?></td>
								<td><?= $park['description']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
		              <tfoot>
		                <tr>
		                    <td colspan="12">
		                        <nav aria-label="Page navigation" class="text-center">
		                            <ul class="pagination">
		                                <li>
		                                	<?php if($page > 1): ?>
		                                    <a href="?page=<?= $page - 1?>" aria-label="Previous">
		                                        <span aria-hidden="true">&laquo;</span>
		                                    </a>
		                                <?php endif; ?>
		                                </li>
		                                <?php for($i = 1; $i <= $maxCount; $i++): ?>
		                                <?= "<li><a href='?page=" . $i ."'>" . $i . "</a></li>" ?>
		                            <?php endfor; ?>
		                                <li>
		                                	<?php if($page < $maxCount): ?>
		                                    <a href="?page=<?= $page +1 ?>" aria-label="Next">
		                                        <span aria-hidden="true">&raquo;</span>
		                                    </a>
		                                <?php endif; ?>
		                                </li>
					                	<li><a class="" id="add_park" href="national_parks_form.php">Add your favorite park!</a></li>
		                            </ul>
		                        </nav>
		                    </td>
		                </tr>
		                <tr>
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