<?php include('layouts/arrays.php'); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<title><?php echo $pageTitle  ?></title>
	<meta name="description" content="<?php echo $pageDescription  ?>">
	<meta name="keywords" content="<?php echo $pageKeywords  ?>">
	<script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/main.js"></script>
</head>

<body class="body">
    
<header>
    <div class="header-container clearfix">
        <div class="logo <?php echo $animatedTada ?>">
            <a href="index.php"><img class="logo-pic" src="img/pokraska-po-derevu.png"></a></div>
        <div class="description">
            <p id="quetion" class="question">Нужно качественно покрасить дерево? Звоните!</p>
            <p class="telephone-code">+7(925)</p>
            <a class="telephone-skype" href="tel:+79257207070"><div class="telephone-main-wrapper <?php echo $animatedTada ?>" data-wow-delay="1s"><p class="telephone-main">720-70-70</p></div></a>
            <p class="description-content">"Технологии Покраски"является одним из лидеров на рынке профессиональных услуг покраски деревянных срубов и другиз объектов из дерева. На счету компании имеется большое количество выполненных заказов, с некоторыми из которых Вы можете ознакомиться на сайте. Мы всегда стараемся максимально эффективно выполнить свою работу и поэтому используем только передовые технологии, а наши рабочие проходят длительную подготовку опытных наставников</p>
        </div>
        <div class="worker">
            <img class="worker-pic" src="img/malyar.png">
        </div>
        <nav class="navigation">
            
            <?php include("layouts/nav.php"); ?>
            
        </nav>
    </div>

</header>
    
       	
             