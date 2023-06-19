<?php
    session_start();
    include_once('dbconn.php');
    $logged = false; 
    if(isset($_SESSION['email'])) {
        $name = $_SESSION['name'];
        $logged = true;
    }
?>   
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Food </title>	
	<script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="food.css">
    <script src="js/isotope.pkgd.min.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
<nav class="navigation">
        <div class="navb">
            <div class="logo">
                <a href="index.php"><img src="image/logo.png" alt="Wwave coffee"></a>
            </div>
            <ul id="main-menu" class="main-menu">
                <li><a href="brand.php">Wwave story</a>
                    <ul id="sub-menu">
                    <li><a href="brand.php" aria-label="subemnu">브랜드</a></li>
                    <li><a href="campaign.php" aria-label="subemnu">캠페인</a></li>
                    <li><a href="store.php" aria-label="subemnu">매장찾기</a></li>
                </ul>
                </li>
                <li><a href="drink.php">Menu</a>
                <ul id="sub-menu">
                    <li><a href="drink.php" aria-label="subemnu">커피</a></li>
                    <li><a href="food.php" aria-label="subemnu">푸드</a></li>
                </ul>
                </li>
                <li><a href="membership.php">Wwave membership</a>
                <ul id="sub-menu">
                    <li><a href="membership.php" aria-label="subemnu">멤버십 소개</a></li>
                </ul>
                </li>
                <li><a href="notice.php">FAQ</a>
                <ul id="sub-menu">
                    <li><a href="notice.php" aria-label="subemnu">공지사항</a></li>
                    <li><a href="event.php" aria-label="subemnu">이벤트</a></li>
                </ul>
                </li>
                <li><a href="mypage.php"><?=$name?>님</a>
                    <ul id="sub-menu">
                        <li><a href="mypage.php" aria-label="subemnu">내 정보</a></li>
                        <li><a href="signout.php" aria-label="subemnu">로그아웃</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar_link">
                <li><i class="fa-brands fa-square-instagram"></i></li>
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
            </ul>
            <ul class="navbar__toggleBtn">
                <li><i id="toggleBtn" class="fa-sharp fa-solid fa-bars"></i></li>
            </ul>
		</div>
	</nav>
	<main>
		<ul>
			<li class='on'><a href="javascript:void(0)" sort="*">ALL</a></li>
			<li><a href="javascript:void(0)" sort=".icecream">icecream</a></li>
			<li><a href="javascript:void(0)" sort=".bread">bread</a></li>
			<li><a href="javascript:void(0)" sort=".salad">salad</a></li>
			<li><a href="javascript:void(0)" sort=".cake">cake</a></li>
			
			
		</ul>

		<section>
			<article class='icecream'>
				<div>
					<img src="img/vanila_ice.png" alt=""></a>
					<h2>vanila icecream</h2>
					
				</div>
			</article>
			<article class='bread'>
				<div>
					<img src="img/fish_bread.png" alt="">
					<h2>붕어빵</h2>
					
				</div>
			</article>
			<article class='salad'>
				<div>
					<img src="img/chicken_salad.jpg" alt="">
					<h2>chicken salad</h2>
					
				</div>
			</article>
			<article class='cake'>
				<div>
					<img src="img/choco_cake.png" alt="">
					<h2>choco cake</h2>
				</div>
			</article>
			<article class='icecream'>
				<div>
					<img src="img/choco_ice.png" alt="">
					<h2>choco icecream</h2>
					
				</div>
			</article>
			<article class='bread'>
				<div>
					<img src="img/salt_bread.png" alt="">
					<h2>소금빵</h2>
				</div>
			</article>
			<article class='salad'>
				<div>
					<img src="img/salmon_salad.png" alt="">
					<h2>salmon salad</h2>
					
				</div>
			</article>
			<article class='cake'>
				<div>
					<img src="img/Tiramisu.png" alt="">
					<h2>Tiramisu</h2>
					
				</div>
			</article>
			<article class='bread'>
				<div>
					<img src="img/egg_bread.png" alt="">
					<h2>에그 베이컨 과카몰리 샌드위치</h2>
					
				</div>
			</article>
			
			<article class='salad'>
				<div>
					<img src="img/roast_chicken_salad.png" alt="">
					<h2>roastchicken salad</h2>
					
				</div>
			</article>
			
			</article>
			<article class='cake'>
				<div>
					<img src="img/wave_cake2.png" alt="">
					<h2>wave cake</h2>
					
				</div>
			</article>
			
		</section>
	</main>
	<script>
		document.getElementById('toggleBtn').addEventListener('click', function () {
		var menu = document.getElementById('main-menu');
		menu.classList.toggle('show');
		});
	</script>
</body>
</html>

