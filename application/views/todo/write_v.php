<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-witdh,initial-scale=1,user-scalable=no"/>
	<title>CodeIgniter</title>
	<![if lt IE 9]>
	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link type="text/css" rel='stylesheet' href="http://localhost/todo/include/css/bootstrap.css" />
</head>

<body>

<div id="main">

	<header id="header" data-role="header" data-position="fixed"><!--Header Start-->
		<blockquote> 만들면서 배우는 CodeIgniter 실행예제1</blockquote>
	</header>

	<nav id="gnd">
		<ul>
			<li><a rel="external" href="/todo/index.php/main/lists/">TODO 프로그램</a></li>
		</ul>
	</nav>

	<article id="board_area">
		<header><h1>TODO 등록</h1></header>
	
		<form class="form-horizontal" method="post" action="" id="write_action">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="input01">내용</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="input01" name="content">
						<p class="help-block"></p>
					</div>
					<label class="control-label" for="input02">시작일</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="input02" name="created_on">
						<p class="help-block"></p>
					</div>
					<label class="control-label" for="input03">종료일</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="input03" name="due_date">
						<p class="help-block"></p>
					</div>
					<div class="form actions">
						<input type="submit" class="btn btn-primary" id="write_btn" value="작성"></button>
					</div>
				</div>
			</fieldset>
	</article>

	<footer id="footer">
		<blockquote>
			<p> 한국CI사용자포럼</p>
		</blockquote>
	</footer>

</div>

</body>
</html>
