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
	<title> Drinks </title>
    <script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">	
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="drink.css">
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
			<li><a href="javascript:void(0)" sort=".others">others</a></li>
			<li><a href="javascript:void(0)" sort=".signature">signature</a></li>
			
		</ul>

		<section>
			<article class='others'>
				<div>
					<img src="img/1.jpg" alt=""></a>
					<h3>블랙티 레몬네이드에이드</h3>
					<p></p>
				</div>
			</article>
			<article class='signature'>
				<div>
					<img src="img/main_블루레몬.jpeg" alt="">
					<h3>Wwave 에이드</h3>
					<p>순수한 프랑스 알프스의 깨끗한 물로 만들어낸 2000 블루레몬시럽과 강렬한 꽃향기로 시작되어 딸기,감귤류,배,수박등 다채로운 맛과 향을 가진 달콤한 리치시럽이 조화롭고 죠스바가 연상되는 프랑스 특화 에이드</p>
				</div>
			</article>
			<article class='others'>
				<div>
					<img src="img/2.jpg" alt="">
					<h3>쿨라임에이드</h3>
					<p></p>
				</div>
			</article>
			<article class='signature'>
				<div>
					<img src="img/main_커피.jpeg" alt="">
					<h3>Pacific Wwave Latte</h3>
					<p>태평양 최대수심 마리아나 해구를 연상시키는 음료로 딥한 바닐라크림과 콜드 브루가 조화로운 태평양 특화 콜드 브루 음료</p>
				</div>
			</article>
			<article class='others'>
				<div>
					<img src="img/3.jpg" alt="">
					<h3>유자 패션 에이드</h3>
					<p></p>
				</div>
			</article>
			<article class='signature'>
				<div>
					<img src="img/main_서머스윗라떼.jpeg" alt="">
					<h3>Sweet Summer Latte</h3>
					<p> 블루 연유 베이스에 커피를 더하고, 그 위에 바닐라 젤라또 아이스크림을 얹어  부드러운 라떼와 아포카토를 모두 맛 볼 수 있는 스윗 서머라떼</p>
				</div>
			</article>
			<article class='others'>
				<div>
					<img src="img/8.jpg" alt="">
					<h3>유자 민트 에이드</h3>
					<p></p>
				</div>
			</article>
			<article class='signature'>
				<div>
					<img src="img/main_바나나.jpeg" alt="">
					<h3>Frozen blue banana</h3>
					<p>오렌지껍질을 원료로 제조한 바다를 닮은 푸른빛의 시럽이 들어간 바나나 프라프치노.</p>
				</div>
			</article>
			<article class='others'>
				<div>
					<img src="img/4.jpg" alt="">
					<h3>패션 탱고티 레모네이드 에이드</h3>
					<p></p>
				</div>
			</article>
			
			<article class='others'>
				<div>
					<img src="img/5.jpg" alt="">
					<h3>아이스 아메리카노</h3>
					<p></p>
				</div>
			</article>
			
			</article>
			<article class='others'>
				<div>
					<img src="img/6.jpg" alt="">
					<h3>아이스 라떼</h3>
					<p></p>
				</div>
			</article>
			
			</article>
			<article class='others'>
				<div>
					<img src="img/7.jpg" alt="">
					<h3>아이스 캬라멜 마끼아또</h3>
					<p></p>
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
