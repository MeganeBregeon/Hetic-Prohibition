<?php 
    require_once 'config.php';

	$id=$_GET['id'];

	$query = $pdo->prepare("SELECT * FROM sheet WHERE id = :id");
	$query->bindValue(':id', $id, PDO::PARAM_INT);
	$query->execute();

	$results = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prohibition</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/reset.css">
</head>
<body>
	<div class="page-content">
		<section class="section-left">
		<div class="left">
			<a href="#" class="btn"><img src="<?php echo $results['link']; ?>" alt=""></a>
		</div>
		</section>

		<section class="section-right">
			<div class="right">
				<p></p>
				<p><?php echo $results['quote']; ?></p>
				<h1><?php echo $results['title']; ?></h1>
				<h2><p><?php echo $results['location']; ?></p></h2>
				<h2><p><?php echo $results['date']; ?></p></h2>
				<h3>"<?php echo $results['quote']; ?>"</h3>
				<p><?php echo utf8_encode($results['content']); ?></p>
			</div>
		</section>
		
		<nav>
			<li>
				<ul>Menu</ul>
				<ul>Prohibition</ul>
				<ul>Map</ul>
			</li>
		</nav>

	</div>
</body>
</html>