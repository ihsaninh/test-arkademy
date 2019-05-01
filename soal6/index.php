<?php 
require_once 'function.php';

$candidates = queryData("SELECT * FROM candidates");
$count = queryData("SELECT SUM(earned_vote) FROM candidates");
$sum = $count[0]['SUM(earned_vote)'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Quick Count</title>
  </head>
  <body>
    
    <div class="container mt-5">
    	<h3 class="text-center">Quick Count</h3>
    	<div class="row mt-5">
    		<div class="col">
    			<table class="table table-bordered">
    			<?php foreach($candidates as $candidate):  ?>
    				<tr>
    					<td><h5><?= $candidate['name']; ?></h5></td>
    					<td rowspan="2" align="center"><a href="proses.php?id=<?= $candidate['id']; ?>&earned_vote=<?= $candidate['earned_vote']; ?>" class="btn btn-primary mt-3">Vote!</a></td>
    				</tr>
    				<tr>
    					<td>Perolehan suara: <span class="font-weight-bold"><?= $candidate['earned_vote']; ?> suara (<?= round($candidate['earned_vote']/$sum*100, 2)?>%)</span></td>
    				</tr>
    			<?php endforeach; ?>
    			</table>
    			<h6>Total Suara: <?= $sum; ?></h6>
    		</div>
    	</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>