<!--Home Page-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<link rel="stylesheet" href="css/hstyle1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Home</title>
</head>
<body>
    <!--Navigation Bar Starts-->
    <div class="nav">
        <div class="max-width">
            <div class="logo">
                <a href="#">Spark <span>Bank</span></a>
            </div>
            <ul class="menu">
                <li class="hom">Home</li>
                <li><a href="customer">Customers</a></li>
                <li><a href="transaction">Transaction</a></li>
                <li><a href="history">History</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>


    <!--Home Section Starts-->
    <section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Welcome to online</div>
				<div class="text-2">Spark Bank</div>
                <?php if (isset($_GET['user'])) { ?>
				<div class="text-3">Mr/Mrs.<?php echo $_GET['user']; ?></div>
                <?php } ?>
			</div>
		</div>
	</section>


    <!-- Options section Starts-->
    <section class="option">
        <div class="max-width">
            <div class="options">
                <div class="field">
                <a href="customer">
                    <i class="fas fa-users"></i>
                    <div class="text">Customers</div>
                </a>
                </div>
                <div class="field">
                <a href="history">
                    <i class="fas fa-history"></i>
                    <div class="text">History</div>
                </a>
                </div>
                <div class="field">
                <a href="transaction">
                    <i class="fas fa-exchange-alt"></i>
                    <div class="text">Transaction</div>
                </a>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer section starts-->
	<footer>
		<span>Created By <a href="#">WebDev</a> | <span class="far fa-copyright"></span>2021 All rights reserved</span>
	</footer>
    <script src="script/script.js"></script>
</body>
</html>