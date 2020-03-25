<?php 
require('config/db.php');
$query = 'SELECT * FROM postss ORDER BY date DESC';

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Your articles</title>
	<link rel="stylesheet" href="./css/styl .css">
</head>
<body>
	<h1>POSTS</h1>
	<?php foreach($posts as $post) : ?>
	<div class="">
	<h3><?php echo $post['headline']; ?></h3>
	<small>Created on <?php echo 
	$post['created_at']; ?>
	</small>
	<p><?php echo $post['article']; ?></p>
</div>
<?php endforeach; ?>

</body>
	<header>
