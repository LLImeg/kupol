<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Добавление услуг</title>
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
	<div class="operation students">
		<div class="wrap">
			<div class="operation__inner">
				<div class="operation__header">
					<h1 class="operation__title title__medium">Добавить услугу</h1>
					<a class="operation__link" href="Service.php">Вернуться к списку услуг</a>
				</div>
				<form class="operation__form"  method="get" action="ServiseBD.php">
						<div class="operation__block">
							<div class="operation__line" style="display:flex; flex-direction: column;  gap: 10px;">
								<input class="operation__field field" type="text" name="Sname" placeholder="Название услуги">
								<input class="operation__field field" type="text" name="Sinfo" placeholder="Описание услуги">
								<input class="operation__field field" type="text" name="Scost" placeholder="Цена">
								
							</div>
						</div>

						<div class="operation__bottom">
						<button class="button button--common operation__buttom" type="submit">Добавить</button>
						</div>
				</form>
			</div>
		</div>
	</div>
	<img class="niz" src="img/niz.jpg">
</body>
</html>