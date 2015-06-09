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
		<header><h1>TODO</h1></header>
		<table cellspacing="0" cellpadding="0" class="table table-striped">
			<thead>
				<tr>
				<th scope="col"><?php echo $views->id;?>번 할일</th>
				<th scope="col">시작일 : <?php echo $views->created_on;?></th>
				<th scope="col">종료일 : <?php echo $views->due_date;?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th colspan="3">
					<?php echo $views->content;?>
				</th>
			</tbody>
			<tfoot>
				<tr><th colspan="4">
					<a href="/todo/index.php/main/list" class="btn btn-primary">목록</a>
					<a href="/todo/index.php/main/delete/<?php echo $this->uri->segment(3);?>" class="btn btn-danger">삭제</a>
					<a href="/todo/index.php/main/write" class="btn btn-success">쓰기</a>
				</th></tr>
			</tfoot>
		</table>
	</article>

	<footer id="footer">
		<blockquote>
			<p> 한국CI사용자포럼</p>
		</blockquote>
	</footer>

</div>

</body>
</html>
