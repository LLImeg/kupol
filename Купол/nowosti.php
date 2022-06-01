<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Новости</title>
</head>
<body class="page">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol viewbox="0 0 1000 1000" id="arrow2" xmlns="http://www.w3.org/2000/svg">
            <path d="М500 775.4L10 287.2l64.4-62.6L500 650.2l425.6-425.6 64.4 62.6-490 488.2z"/>
        </symbol>
    </svg>
	<header class="header">
		<div class="wrap">
			
			<div class="header__inner">
			<img class="logo1" src="img/logo1.jpg">
				<img class="logo1" src="img/logo2.jpg">
				<div class="header__line">
					<a class="header__name" href="profile.html">Иванов</a>
					<a class="header__logout" href="index.html">Выход</a>
				</div>
			</div>
		</div>
	</header>
	<nav class="nav">
		<div class="wrap">
			<div class="nav__inner">
				<a class="nav__link" href="Main.php">Главная</a>
				<a class="nav__link nav__reqest--new" href="nowosti.php">Новости</a>
				<a class="nav__link" href="Service.php">Услуги</a>
			</div>
		</div>
	</nav>
		<section class="section events">
			<div class="wrap">
				<div class="section__inner">
					<h1 class="section__title title__big">Новости</h1>
					<a class="button button--common panel__button" href="nowostADD.html" >Добавить новость</a>
					<div class="section__panel panel">
					</div>
				<table class="section__table table">
					<tr class="table__tr">
						<th class="table__th">Картинка</th>
						<th class="table__th">Название</th>
						<th class="table__th">Описание</th>
						<th class="table__th">Дата события</th>
					</tr>
						<?php
						include 'nowosttabl.php';
						?>
				</table>
			</div>
		</div>
</section>
<img class="niz" src="img/niz.jpg">	
</body>
</html>