<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Plantilla Propia</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<?php foreach($posts as $post): ?>
			<li>
				<h2><?=$post->getTitle() .' ' .$post->getAuthor(); ?></h2>
			<?php  if($post==$firstPost): ?>
				<p> <?= $post->getBody(); ?> </p>
			<?php else: ?>
				<p> Sumary...</p>
			<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>