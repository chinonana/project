<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perfumes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Perfumes</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">花</a></li>
					<li><a href="#">植物</a></li>
					<li><a href="#">動物</a></li>
					<li><a href="#">人口</a></li>
					<li><a href='/posts/create'>投稿</a></li>
					<li><a href='/posts/like'>お気に入り</a></li>
					<li><a href='/posts/login'>ログイン</a></li>
					<li><a href='/posts/signin'>会員登録</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div> <!-- /container -->

<body>
	<h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
 //お気に入り用       
<span>
<img src="{{asset('img/nicebutton.png')}}" width="30px">
 
<!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
@if($like)
 「いいね」取消用ボタンを表示 
	<a href="{{ route('unlike', $post) }}" class="btn btn-success btn-sm">
		いいね
		 「いいね」の数を表示 
		<span class="badge">
			{{ $post->likes->count() }}
		</span>
	</a>
@else
<!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
	<a href="{{ route('like', $post) }}" class="btn btn-secondary btn-sm">
		いいね
		<!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $post->likes->count() }}
		</span>
	</a>
@endif
</span>
        
        
<div class="container">
	<div class="row">
		 <div class="col-xs-12">
		 	<h3>口コミを投稿する</h3>
			<form action="" method="post">
				<textarea name="add_review" class="form-control" placeholder="口コミを記入してください。"></textarea>
				<button type="submit" class="btn btn-default">投稿する</button>
			</form>
		</div>
	</div>
</div
<br><br><br>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>