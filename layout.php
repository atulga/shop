<?php
/* avoid to be called alone */
if (!isset($content)) { exit(1); }
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="static/style.css">

<title>Гар хийцийн бүтээгдэхүүн</title>
</head>

<body style='background-image: url("static/images/concrete_wall_bg.png");'>
	<div class="container">
		<div class="header">
			<h2 class="title"><a href="index.php">Гар хийцийн бүтээлүүд</a></h2>
		</div>
        <?= $content ?>
		<!--about-->
		<div class="clear"></div>
		<div class="footer">
			<h5>Манай цахим хуудсанд бидний өөрсдийн уран сэтгэмж, гарын ур дүйгээр хийж бүтээсэн бүтээлүүд маань худалдаалагдаж байна. Та сонирхосон барааны дэлгэрэнгүй хуудсанд зочлон урласан эзэн болон худалдаж буй худалдагчтай холбогдоно уу. Баярлалаа! </h5>
		</div>
	</div>
	<div class="copyright">2015 &copy; ГАР ХИЙЦИЙН БҮТЭЭЛҮҮД</div>
</body>
</html>
