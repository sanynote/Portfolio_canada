<?php
	
	include "00_conn.php";

	session_cache_expire(30);
	session_start();


	$sql = "SELECT * FROM lushmems ORDER BY no DESC";
	$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>index</title>
	<meta charset="utf-8"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
      @font-face {
        font-family: "Lush";
        src: url("font/Lush.ttf");
      }

      * {
        margin: 0;
        padding: 0;
      }
      body {
        margin: 0;
        padding: 0;
      }
      li {
        list-style-type: none;
      }
      a:link,
      a:visited {
        text-decoration: none;
        color: #000;
      }

      /*###################### header #######################*/
      #headerWrap {
        width: 100%;
      }
      #header {
        width: 1620px;
        margin: 0 auto;
      }
      #header h1 {
        width: 180px;
        float: left;
        padding-top: 8px;
      }
      #header h1 a img {
        width: 100%;
      }

      #header form {
        width: 1000px;
        height: 73px;
        padding-top: 12px;
        border: none;
        float: left;
        position: relative;
      }
      #header form #search {
        width: 100%;
        height: 60px;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        text-indent: 20px;
        font-size: 25px;
      }
      #header form #schBtn {
        width: 50px;
        position: absolute;
        right: 12px;
        top: 15px;
      }
      #header #more {
        width: 410px;
        height: 67px;
        float: left;
      }
      #header #more p {
        width: 50px;
        height: 50px;
        margin-top: 17px;
        margin-left: 15px;
        float: left;
        background-repeat: no-repeat;
        background-size: 100%;
        cursor: pointer;
      }

      #header #more .login {
        background-image: url("img/header/smile.png");
      }
      #header #more .uk {
        background-image: url("img/header/uk.png");
      }
      #header #more .basket {
        background-image: url("img/header/basket.png");
      }

	  #header #more p a {
		display:block;
		width: 50px;
        height: 50px;
    
      }

	  #header #more div{width:190px; padding-top:15px; text-align:right; float:left;}

      #header:after {
        display: block;
        clear: both;
        content: "";
      }

      /*####################### visual #######################*/
      #container {
        width: 100%;
      }
      #visual {
        width: 100%;
        height: 1020px;
        padding-top: 50px;
        background-image: url("img/index/visual.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
      }

      #visual .textBox {
        font-family: "Lush";
        font-size: 5em;
        font-weight: 700px;
        text-align: center;
        margin-top: 250px;
      }

      #menu {
        width: 1200px;
        overflow: hidden;
        margin: 0 auto;
        overflow:auto;
      }
      
      #menu::-webkit-scrollbar {
        height: 10px;
      }
      #menu::-webkit-scrollbar-thumb {
        background-color: #2f3542;
        border-radius: 10px;
        
      }
      #menu::-webkit-scrollbar-track {
        background-color: grey;
        border-radius: 10px;

      }
      #menu ul {
        width: 1670px;
        margin-bottom:15px;
      }
      #menu ul li {
        height: 40px;
        line-height: 40px;
        display: inline-block;
        background-color: #efefef;
        border-radius: 20px;
        border: 1px solid rgba(0, 0, 0, 0);
        margin-left: 10px;
      }
      #menu ul li a {
        padding: 0 20px;
      }

      #menu ul li:hover {
        border: 1px solid rgba(0, 0, 0, 1);
      }

      /*#################### best ###################*/
      #bestArea {
        width: 100%;
        height: 900px;
        background-image: url("img/index/best_bg.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        margin-top:100px;
      }

      #best {
        width: 1700px;
        margin: 0 auto;
        padding-top: 80px;
      }

      #best ul {
        width: 1650px;
        height: 655px;
        float: left;
      }
      #best li {
        width: 500px;
        padding-left: 50px;
        float: left;
      }
      #best li .img {
        height: 500px;
        overflow: hidden;
      }
      #best li .img img {
        height: 100%;
      }

      #best li .text {
        width: 400px;
        text-align: center;
        margin: 0 auto;
      }
      #best li .text h4 {
        font-size: 40px;
        padding: 20px 0;
        font-weight: 700;
      }
      #best li .text .link {
        padding: 30px 0;
        font-weight: 700;
      }
      #best li .text .link a {
        font-size: 20px;
        font-weight: 700px;
        text-decoration: underline;
      }

      #best li .text .link a:hover {
        text-decoration: none;
      }

      #best:after {
        content: "";
        display: block;
        clear: both;
      }

      /*#################### care ###################*/
      #careArea {
        width: 100%;
        height: 900px;
        background-image: url("img/index/care_bg.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        margin-top:100px;
      }

      #care {
        width: 1700px;
        margin: 0 auto;
        padding-top: 50px;
      }
      #care .textArea {
        width: 430px;
        font-size: 18px;
        padding-right: 30px;
        float: left;
      }
      #care .textArea h3 {
        font-weight: 700;
        font-size: 60px;
        padding-bottom: 30px;
      }

      #care ul {
        width: 1240px;
        height: 655px;
        float: left;
      }
      #care li {
        width: 570px;
        padding-left: 50px;
        float: left;
      }
      #care li .img {
        width: 567px;
      }
      #care li .img img {
        width: 100%;
      }

      #care li .text {
        width: 400px;
        text-align: center;
        margin: 0 auto;
      }
      #care li .text h4 {
        font-size: 40px;
        padding: 20px 0;
        font-weight: 700;
      }
      #care li .text .link {
        padding: 30px 0;
        font-weight: 700;
      }
      #care li .text .link a {
        font-size: 20px;
        font-weight: 700px;
        text-decoration: underline;
      }
      #care li .text .link a:hover {
        text-decoration: none;
      }

      #care:after {
        content: "";
        display: block;
        clear: both;
      }

      /*#################### sleepArea ###################*/
      #sleepArea {
        width: 100%;
        height: 520px;
        padding: 40px 0;
        margin-top:100px;
      }

      #sleep {
        width: 1895px;
        height: 100%;
      }
      #sleepMore {
        width: 350px;
        padding: 30px 20px 0;
        margin: 0 100px;
        height: 490px;
        background-color: #a1759c;
        font-size: 16px;
        font-weight: 700;
        float: left;
      }
      #sleepMore .icon {
        width: 90px;
        padding-bottom: 10px;
      }
      #sleepMore .icon img {
        width: 100%;
      }
      #sleepMore h3 {
        font-size: 40px;
      }
      #sleepMore .desc {
        padding: 30px 0;
      }
      #sleepMore .match {
        width: 200px;
        height: 60px;
        line-height: 60px;
        border: 1px solid #000;
        text-align: center;
      }
      #sleepMore .match a {
        display: block;
        width: 100%;
        height: 100%;
      }

      #sleepGoods {
        width: 1300px;
        height: 100%;
        float: left;
        overflow: hidden;
        overflow:auto;
      }
      
      #sleepGoods::-webkit-scrollbar {
        height: 10px;
      }
      #sleepGoods::-webkit-scrollbar-thumb {
        background-color: #2f3542;
        border-radius: 10px;
        
      }
      #sleepGoods::-webkit-scrollbar-track {
        background-color: grey;
        border-radius: 10px;

      }
      
      #sleepGoods ul {
        width: 2560px;
      }
      #sleepGoods ul li {
        width: 300px;
        height: 500px;
        padding-left: 10px;
        float: left;
      }
      #sleepGoods .product {
        width: 100%;
      }
      #sleepGoods .product a {
        display: block;
      }
      #sleepGoods .product a .img {
        display: block;
        width: 250px;
      }
      #sleepGoods .product a .img img {
        width: 100%;
      }
      #sleepGoods .product a .name {
        font-family: "Lush";
        font-size: 25px;
      }
      #sleepGoods .product a .type {
        display: block;
        padding: 10px 0;
        font-size: 13px;
      }
      #sleepGoods .product a .desc {
        display: block;
        width: 170px;
        font-size: 14px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
      }
      #sleepGoods .product a .price {
        display: block;
        padding: 10px 0;
        font-weight: 700;
      }
      #sleepGoods .bag {
        width: 200px;
        height: 50px;
        border: 1px solid #ccc;
        border-radius: 25px;
        margin-top: 25px;
        margin-left: 20px;
        position: relative;
      }

      #sleepGoods .bag:hover {
        border-color: #000;
      }

      #sleepGoods .bag a {
        display: block;
      }

      #sleepGoods .bag a .img {
        width: 45px;
        position: absolute;
        left: 13px;
        top: 3px;
      }
      #sleepGoods .bag a .img img {
        width: 100%;
      }

      #sleepGoods .bag a .text {
        padding-left: 30px;
        text-align: center;
        line-height: 50px;
        font-size: 18px;
        display: block;
      }

      #sleep {
        content: "";
        display: block;
        clear: both;
      }

      /*#################### bam ###################*/
      #bamArea {
        width: 100%;
        height: 900px;
        background-image: url("img/index/bam_bg.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        margin:100px 0;
      }

      #bam {
        width: 1700px;
        margin: 0 auto;
        padding-top: 80px;
      }

      #bam ul {
        width: 1650px;
        height: 655px;
        float: left;
      }
      #bam li {
        width: 500px;
        padding-left: 50px;
        float: left;
      }
      #bam li .img {
        width: 530px;
        overflow: hidden;
      }
      #bam li .img img {
        width: 100%;
      }

      #bam li .text {
        width: 400px;
        text-align: center;
        margin: 0 auto;
      }
      #bam li .text h4 {
        font-size: 40px;
        padding: 20px 0;
        font-weight: 700;
      }
      #bam li .text .link {
        padding: 30px 0;
        font-weight: 700;
      }
      #bam li .text .link a {
        font-size: 20px;
        font-weight: 700px;
        text-decoration: underline;
      }

      #bam li .text .link a:hover {
        text-decoration: none;
      }

      #bam:after {
        content: "";
        display: block;
        clear: both;
      }

      /*################### bgArea ##################*/

      #bgArea{
        width:100%;
        height:25vw;


      }
      #bgArea .bg {
        width: 100%;
        height: 100%;
        background-image: url("img/index/sleepMore.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
        text-align: center;
        overflow: hidden;
      }

      #bgArea .bg .textBox{
        width:35%; 
        height:300px;
        text-align:center;
        margin:90px auto 0;
      }

      #bgArea .bg .textBox h4{font-size:35px; font-weight:700; padding-top:15px; color:#efefef;}
      #bgArea .bg .textBox .desc{padding:30px; font-size:20px;}
      #bgArea .bg .textBox #news{display:inline-block;width:360px; height:45px; text-indent:15px; font-size:20px; padding:0;}
      #bgArea .bg .textBox #btn{display:inline-block;width:85px;height:49px; font-size:20px;}

      /*#################### forMe ###################*/
      #meArea {
        width: 100%;
        height: 900px;
        background-image: url("img/index/forMe_bg.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        margin-top:100px;
      }

      #forMe {
        width: 1700px;
        margin: 0 auto;
        padding-top: 50px;
      }
      #forMe .textArea {
        width: 430px;
        font-size: 20px;
        padding-right: 30px;
        float: left;
      }
      #forMe .textArea h3 {
        font-weight: 700;
        font-size: 70px;
        padding-bottom: 30px;
      }

      #forMe ul {
        width: 1240px;
        height: 655px;
        float: left;
      }
      #forMe li {
        width: 570px;
        padding-left: 50px;
        float: left;
      }
      #forMe li .img {
        width: 567px;
      }
      #forMe li .img img {
        width: 100%;
      }

      #forMe li .text {
        width: 450px;
        text-align: center;
        margin: 0 auto;
        font-size: 20px;
      }
      #forMe li .text h4 {
        font-size: 40px;
        padding: 20px 0;
        font-weight: 700;
      }
      #forMe li .text .link {
        padding: 30px 0;
        font-weight: 700;
      }
      #forMe li .text .link a {
        font-size: 20px;
        font-weight: 700px;
        text-decoration: underline;
      }

      #forMe li .text .link a:hover {
        text-decoration: none;
      }

      #forMe:after {
        content: "";
        display: block;
        clear: both;
      }
    </style>

	<script>
      function bgBtn() {
        var news = document.getElementById("news");
        var email = news.value;
        alert("welcome to LUSH :-D \n \n we'll send newsletter to " + email + "!");
      }
    </script>


 </head>
 <body>
	<div id="wrap">
		<div id="headerWrap">
		  <header id="header">
			<h1>
			  <a href="#" title="로고영역"
				><img src="img/header/logo.webp" alt="러쉬 로고 이미지"
			  /></a>
			</h1>
			<form>
			  <input
				id="search"
				name="search"
				type="text"
				placeholder="Search & Shop"
			  />
			  <input
				id="schBtn"
				type="image"
				name="schBtn"
				src="img/header/search.png"
				alt="돋보기 이미지"
				title="돋보기 이미지"
			  />
			</form>

			<div id="more">
			

<?php if( empty($_SESSION['userid']) ){ ?>

				<p class="login"><a href="03_login.php" title="로그인페이지"></a></p>
				<p class="uk"><a href="#none" title="Q&A페이지"></a></p>
				<p class="basket"><a href="cal.html" title="증감문페이지"></a></p>

<?php }else{ ?>
				<p class="login"><a href="03_login.php" title="로그인페이지"></a></p>
				<p class="uk"><a href="#none" title="Q&A페이지"></a></p>
				<p class="basket"><a href="cal.html" title="증감문페이지"></a></p>
				<div>
					WELCOME <strong style="color:purple;"><?=$_SESSION['userid']?></strong>!<br/>
					<span>*</span><a href="03_1_logout.php" title="login">LOGOUT</a>
				</div>

<?php } ?>
				
				
		
			</div>
		  </header>
		</div>
		<div id="container">
		  <div id="visual">
			<div id="menu">
			  <ul>
				<li><a href="#" title="메뉴선택">Lush Delivery Pass</a></li>
				<li><a href="#" title="메뉴선택">EID Gifts</a></li>
				<li><a href="#" title="메뉴선택">New Products</a></li>
				<li><a href="#" title="메뉴선택">Bestsellers</a></li>
				<li><a href="#" title="메뉴선택">Gifts</a></li>
				<li><a href="#" title="메뉴선택">Bath Bombs</a></li>
				<li><a href="#" title="메뉴선택">Shower Products</a></li>
				<li><a href="#" title="메뉴선택">Hair Care</a></li>
				<li><a href="#" title="메뉴선택">Body Care</a></li>
				<li><a href="#" title="메뉴선택">Handmade Soap</a></li>
				<li><a href="#" title="메뉴선택">Makeup</a></li>
				<li><a href="#" title="메뉴선택">Vegan</a></li>
			  </ul>
			</div>
			<div class="textBox">make some bunny's easter</div>
		  </div>

		  <div id="bestArea">
			<div id="best">
			  <ul>
				<li>
				  <p class="img">
					<img src="img/index/best00.avif" alt="베스트이미지0" />
				  </p>
				  <div class="text">
					<h4>Disco Duck</h4>
					<p class="desc">
					  With an invigorating boost of Guarana powder, this disco
					  saviour knows how to party!
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop Disco Duck</a>
					</p>
				  </div>
				</li>
				<li>
				  <p class="img">
					<img src="img/index/best01.webp" alt="베스트이미지1" />
				  </p>
				  <div class="text">
					<h4>New Shampoo Bar</h4>
					<p class="desc">
					  Allow stimulating clove bud oil to work its follicular magic
					  as you massage it onto the scalp and into the hair.
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop New Shampoo Bar</a>
					</p>
				  </div>
				</li>
				<li>
				  <p class="img">
					<img src="img/index/best02.webp" alt="베스트이미지2" />
				  </p>
				  <div class="text">
					<h4>Blooming Beautiful!</h4>
					<p class="desc">
					  This trio contains a Rose Jam Bubbleroon, a Sakura Bath Bomb
					  and a Sex Bomb Bath Bomb. This gift set will calm, soothe and
					  uplift with its sweetly floral scents.
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop Blooming Beautiful</a>
					</p>
				  </div>
				</li>
			  </ul>
			</div>
		  </div>

		  <div id="careArea">
			<div id="care">
			  <div class="textArea">
				<h3>Give your skin barrier a break</h3>
				<p>
				  With forty-five years of skincare expertise, Helen, our
				  co-founder, has developed
				  <strong
					>new self-preserving skincare that doesn't use synthetic
					preservatives </strong
				  >- giving you fresher products that nourish both your complexion
				  and the protective microorganisms that live there
				</p>
			  </div>
			  <ul>
				<li>
				  <p class="img">
					<img src="img/index/care00.avif" alt="케어이미지0" />
				  </p>
				  <div class="text">
					<h4>Cleanse</h4>
					<p class="desc">
					  From gentle natural scrubs to fresh buttery polishes that
					  cleanse, hydrate and refresh
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop Cleansers</a>
					</p>
				  </div>
				</li>
				<li>
				  <p class="img">
					<img src="img/index/care01.avif" alt="케어이미지1" />
				  </p>
				  <div class="text">
					<h4>Moisturise</h4>
					<p class="desc">
					  Boost your skin's defence against the elements with our
					  natural moisturisers for a healthy glow
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop Moisturisers</a>
					</p>
				  </div>
				</li>
			  </ul>
			</div>
		  </div>

		  <div id="sleepArea">
			<div id="sleep">
			  <div id="sleepMore">
				<p class="icon">
				  <img src="img/index/sleep_icon.png" alt="잠자는아이콘" />
				</p>
				<h3>Great skin needs some beauty sleep</h3>
				<p class="desc">
				  Relax with our lavender-infused naturally sleep-inducing Sleepy
				  range
				</p>
				<p class="match">
				  <a href="#none"> Meet your match </a>
				</p>
			  </div>

			  <div id="sleepGoods">
				<ul>
				  <li>
					<div class="product">
					  <a href="cal.html" title="수량페이지">
						<em class="img">
						  <img src="img/index/sleep00.avif" alt="상품이미지0" />
						</em>
						<b class="name">A French Kiss</b>
						<span class="type">BUBBLE BAR</span>
						<span class="desc">A calming kiss goodnight</span>
						<i class="price">£5.50</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="cal.html" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep01.avif" alt="상품이미지1" />
						</em>
						<b class="name">Beauty Sleep</b>
						<span class="type">FACE AND BODY MASK</span>
						<span class="desc">Sublime, hydrating and luxurious</span>
						<i class="price">£13.00</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep02.avif" alt="상품이미지2" />
						</em>
						<b class="name">Deep Sleep</b>
						<span class="type">BATH BOMB</span>
						<span class="desc">A soothing lavender lullaby</span>
						<i class="price">£7.00</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep03.avif" alt="상품이미지3" />
						</em>
						<b class="name">Deep Sleep</b>
						<span class="type">GIFT</span>
						<span class="desc"
						  >A trio of bathers for the deepest sleep</span
						>
						<i class="price">£18.00</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep04.avif" alt="상품이미지4" />
						</em>
						<b class="name">Dream Cream</b>
						<span class="type">BODY LOTION</span>
						<span class="desc">Oat and lavender cult classic</span>
						<i class="price">£5.50</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep05.avif" alt="상품이미지5" />
						</em>
						<b class="name">Eau Roma Water</b>
						<span class="type">TONER WATER</span>
						<span class="desc">Skin soothing floral infusion</span>
						<i class="price">£7.00</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep06.avif" alt="상품이미지6" />
						</em>
						<b class="name">Gorgeous</b>
						<span class="type">MOISTURISER</span>
						<span class="desc">Decadent and luxurious</span>
						<i class="price">£45.00</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				  <li>
					<div class="product">
					  <a href="#none" title="상품공간">
						<em class="img">
						  <img src="img/index/sleep07.avif" alt="상품이미지7" />
						</em>
						<b class="name">Ickle Baby Bot</b>
						<span class="type">BATH BOMB</span>
						<span class="desc">A light blue lavender lullaby</span>
						<i class="price">£3.00</i>
					  </a>
					</div>
					<div class="bag">
					  <a href="#none" title="장바구니">
						<span class="img"
						  ><img src="img/index/basket.png" alt="장바구니"
						/></span>
						<span class="text">Add to bag</span>
					  </a>
					</div>
				  </li>
				</ul>
			  </div>
			</div>
		  </div>

		  <div id="bamArea">
			<div id="bam">
			  <ul>
				<li>
				  <p class="img">
					<a href="" title="샵 링크">
					  <img src="img/index/bam00.avif" alt="밤이미지0" />
					</a>
				  </p>
				  <div class="text">
					<h4>Lakes</h4>
					<p class="desc">
					  Grounding aromas of herbaceous Siberian fir and honeyed osmanthus absolute make this the ultimate mind cleanser.
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop now</a>
					</p>
				  </div>
				</li>
				<li>
				  <p class="img">
					<img src="img/index/bam01.avif" alt="밤이미지1" />
				  </p>
				  <div class="text">
					<h4>Black Rose</h4>
					<p class="desc">
					  Cast your eye over the entwining black and violet hues and prepare to be spellbound with an intoxicating perfume of geranium, lemon and rose.
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop now</a>
					</p>
				  </div>
				</li>
				<li>
				  <p class="img">
					<img src="img/index/bam02.jpg" alt="밤이미지2" />
				  </p>
				  <div class="text">
					<h4>Luxe</h4>
					<p class="desc">
					  The hydrating boost bakuchi oil brings benefits that go way beyond bathing in this luxury bath bomb.
					</p>
					<p class="link">
					  <a href="#" title="샵 링크">Shop now</a>
					</p>
				  </div>
				</li>
			  </ul>
			</div>
		  </div>

		  <div id="bgArea">
			<div class="bg">
			  <div class="textBox">
				<h4>Join our Newsletter</h4>
				<p class="desc">Stay up to date with product launches, events and more. We won't share your information with any third parties and you can unsubscribe at any time. For more information see our Privacy Notice and Terms and Conditions.</p>
				<input id="news" type="text" name="news" placeholder="email"/>
				<input id="btn" type="button" name="btn" value="submit" onclick="bgBtn();"/>
			  </div>
			</div>

		  </div>

		  <div id="meArea">
			<div id="forMe">
			  <div class="textArea">
				<h3>
				  Get some extra special ‘me’ time delivered to you every month
				</h3>
				<p>
				  Exclusive brand-new and long-lost favourite cosmetics that you
				  can’t get anywhere else - all blended and crafted in our kitchens
				  and sent straight to you monthly
				</p>
			  </div>
			  <ul>
				<li>
				  <p class="img">
					<img src="img/index/forMe00.avif" alt="선물이미지0" />
				  </p>
				  <div class="text">
					<h4>Lush Kitchen</h4>
					<p class="desc">
					  Personalise your box by voting and receive super exclusive
					  full-sized vegan cosmetics not available anywhere else
					</p>
					<p class="link">
					  <a href="#" title="더보기 링크"
						>Come with me and you'll be...</a
					  >
					</p>
				  </div>
				</li>
				<li>
				  <p class="img">
					<img src="img/index/forMe01.avif" alt="선물이미지1" />
				  </p>
				  <div class="text">
					<h4>Fresh and Flowers</h4>
					<p class="desc">
					  The best things in life are fresh. Our freshest and newest
					  inventions, packed with ingredients straight from the field
					</p>
					<p class="link">
					  <a href="#" title="더보기 링크">We'll bring you flowers in the pouring rain</a>
					</p>
				  </div>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
		<footer id="footer"></footer>
	</div>
 </body>
</html>
