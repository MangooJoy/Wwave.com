<?php
    session_start();
    include_once('dbconn.php');
    $logged = false; 
    if(isset($_SESSION['email'])) {
        $name = $_SESSION['name'];
        $logged = true;
    }
?>  
<!DOCTYPE html>
<!--------------------------------
      FILE: event.html
      이벤트 메인 페이지
      23.06.07
-->
  <html>
      <head>
        <title>event</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="event.css">
      </head>
      <body>
        <!--상단 메뉴바-->
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
      <!--상단 메뉴바-->
      <!--이벤트-->
      <div class="main">
        <h1>이벤트</h1>
        <p>다양한 이벤트를 확인하고 참여해보세요.</p>
        <div class="contents">
          <div class="cont">
            <ul>
              <li>
                <a href="event_signature.php">
                  <div class="box">
                    <div class="img">
                      <img src="image/event_03.jpg">
                    </div>
                    <div class="txt">
                      <div class="txt_wrap">
                        Wwave 시그니처 커피 발매
                      </div>
                      <div class="txt_date">
                        2023.06.03
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="event_swim.php">
                  <div class="box">
                    <div class="img">
                      <img src="image/swim_01.png">
                    </div>
                    <div class="txt">
                      <div class="txt_wrap">
                        Wwave swimming event
                      </div>
                      <div class="txt_date">
                        2023.06.03
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="event_mem.php">
                  <div class="box">
                    <div class="img">
                      <img src="image/텀블러_01.png">
                    </div>
                    <div class="txt">
                      <div class="txt_wrap">
                        Join Wwave membership
                      </div>
                      <div class="txt_date">
                        2023.06.03
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <!--이벤트-->
      <!--반응형 웹 스크립트-->
    <script>
    document.getElementById('toggleBtn').addEventListener('click', function () {
    var menu = document.getElementById('main-menu');
    menu.classList.toggle('show');
    });
    </script>
    <!--반응형 웹 스크립트-->
      </body>
      <footer>
        <p><br>대표이사 : 김정민 교수님.</p>
		    <p>사업자등록번호 : 000-00-000000 주식회사 Wwave 대표이사 : 김정민교수님 TEL : 1234-5678 개인정보 책임자 : 김정민교수님 </p>
		    <p> &copy; 2023 Wwave Coffee.com All Rights Reserved.</p> <br>
      </footer>
  </html>

    