<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'quick_count';

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) return "Error koneksi ke database";
	else return true;

function queryData($query) {
	global $link;
	$result = mysqli_query($link, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function addVote()
{
	global $link;
	$id = $_GET['id'];
	$vote = $_GET['earned_vote'];
	$vote += 1;
	$queryUpdate = queryData("UPDATE candidates SET earned_vote='$vote' WHERE id='$id'");
	return $queryUpdate;
}

?>