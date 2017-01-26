<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Plantilla Propia</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2><?=$post->getTitle() .' ' .$post->getAuthor(); ?></h2>
	<p> <?= $post->getBody(); ?> </p>
</body>
</html>