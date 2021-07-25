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
				</button>
				<a class="navbar-brand" href="#">Perfumes</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">花</a></li>
					<li><a href="#">植物</a></li>
					<li><a href="#">動物</a></a></li>
					<li><a href="#">人工</a></li>
					<li><a href='/posts/create'>投稿</a></li>
					<li><a href="like.blade.php">お気に入り</a></li>
					<li><a href="login.blade.php">ログイン</a></li>
					<li><a href="signup.blede.php">会員登録</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div> <!-- /project posts -->
<form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>香水名</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.perfume_id->name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.perfume_id->name') }}</p>
            </div>
            <div class="body">
                <h2>説明</h2>
                <textarea name="post[body]" placeholder="ブランド、値段など">{{ old('post.discription') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.discription') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
<br><br><br>

</body>
</html>