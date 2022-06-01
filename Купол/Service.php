<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Услуги</title>
</head>
<body class="page">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol viewbox="0 0 448 512" id="del" xmlns="http://www.w3.org/2000/svg">
            <path d="M268 416h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216al2 12 0 0012 12zM432 80h-82.41l-34-56.7A48 48 0 00274.41 0H173.59a48 48 0 00-41.16 23.3L98.41 80H16A16 16 0 000 96v16a16 16 0 0016 16h16v336a48 48 0 0048 48h288a48 48 0 0048-48V128h16a16 16 0 0016-16V96a16 16 0 00-16-16zM171.84 50.91A6 6 0 01177 48h94a6 6 0 015.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0012-12V188al2 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12z"/>
        </symbol>
        <symbol viewbox="0 0 512 512" id="edit" xmlns="http://www.w3.org/2000/svg">
            <path d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517—.001-90.51zM164.686 347.313c6.249 6.249 16.379 6.248 22.627 0L368 166.627l30.059 30.059L174 420.745V386h-48v—48H91.255l224.059-224.059L345.373 144 164.686 324.687c-6.249 6.248-6.249 16.378 0 22.626zm-38.539 121.285l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z"/>
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
				<a class="nav__link" href="students.php">Услуги</a>
			</div>
		</div>
	</nav>
	<section class="section students">
		<div class="wrap">
			<div class="section__inner">
				<h1 class="section__title title__big">Список услуг</h1>
					<div class="section__panel panel">
						<a class="button button--common panel__button" href="Serviceadd.php">Добавить Услугу</a>
					</div>
					<table class="section__table table">
					<tr class="table__tr">
						<th class="table__th">Название услуги</th>
						<th class="table__th">Описание</th>
						<th class="table__th">Цена</th>

					</tr>
						<?php
						include 'ServicePHP.php';
						?>
				</table>
			</div>
		</div>
	</section>

	<img class="niz" src="img/niz.jpg">
</body>
</html>