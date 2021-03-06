<?php 
	session_start();

	$userid= $_SESSION['userid'];
	$usernick= $_SESSION['usernick'];
	$userlevel= $_SESSION['userlevel'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>가입인사</title>

 	<!-- 공통적용 css적용 -->
 	<link rel="stylesheet" type="text/css" href="../css/common.css">
 	<!-- 가입인사 전용 css적용 -->
 	<link rel="stylesheet" type="text/css" href="../css/greet.css">
 </head>
 <body>

 	<div id="wrap">
 		<header id="header">
 			<?php include "../lib/top_login2.php" ?>
 		</header>

 		<nav id="menu">
 			<?php include "../lib/top_menu2.php" ?>
 		</nav>

 		<div id="content">
 			<aside id="col1">
 				<div id="left_menu">
 					<?php include "../lib/left_menu.php" ?> 
 				</div> 								
 			</aside>

 			<!-- 가입인사 리스트 폼 영역! -->
 			<section id="col2">

 				<!-- 타이틀 이미지 영역 -->
 				<div id="title">
 					<img src="../img/title_greet.gif">
 				</div>
 				<!-- 글쓰기 타이틀 이미지 영역 -->
 				<div id="write_form_title">
 					<img src="../img/write_form_title.gif">
 				</div>
 				<!-- 가로 -->
 						<div class="write_line"></div>
 				<!-- 글쓰기-->
 				<form name="form_wirite" method="post" action="insert.php">
 					<div id="write_area">
 						<!-- 닉넴 표시 영역,html 쓰기 선택버튼 -->
 						<div id="write_row1">
 							<div class="col1">닉네임</div>
 							<!-- 닉네임 표시 -->
 							<div class="col2"><?=$usernick?></div>
 							<!-- html 체크 박스버튼 -->
 							<div class="col3"><input type="checkbox" name="is_html" value="y">HTML 쓰기</div>
 						</div>
 						<!-- 가로 -->
 						<div class="write_line"></div>
 						<!-- 글 제목 작성영역 -->
 						<div id="write_row2">
 							<div class="col1">제목</div>
 							<div class="col2"><input type="text" name="subject"></div>
 						</div>
 						<!-- 가로 -->
 						<div class="write_line"></div>
 						<!-- 글의 내용을 작성하는 영역 -->
 						<div id="write_row3">
 							<div class="col1">내용</div>
 							<div class="col2"><textarea rows="15" cols="80" name="content"></textarea></div>
 						</div>
 					</div>
 					<!-- 글작성 완료 및 목록 버튼영역 -->
 					<div id="write_buttons">
 					<!-- 완료버튼  -->
 					<input type="image" src="../img/ok.png">&nbsp;
 					<!-- 제출버튼 아니므로 input요소로 만들면 X -->
 					<a href="list.php"><img src="../img/list.png"></a>
 					</div>
 				</form>

 			</section>
 		</div>
 		
 	</div>
 
 </body>
 </html>