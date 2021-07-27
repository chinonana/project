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
					<li><a href="#">動物</a></a></li>
					<li><a href="#">人工</a></li>
					<li><a href='/posts/create'>投稿</a></li>
					<li><a href='/posts/like'>お気に入り</a></li>
					<li><a href='/posts/login'>ログイン</a></li>
					<li><a href='/posts/signin'>会員登録</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div> <!-- /project posts -->
<form action="/posts" method="POST">
             @csrf
            <div class="title">
                <h2>香水名</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>説明</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category_id">
            	<h2>カテゴリー</h2>
                <div class="col-md-6">
                <select class="form-control" id="categories[id]" name="categories[category]">
                <option value="1">花</option>
                <option value="3">植物</option>
                <option value="3">動物</option>
                <option value="4">人工</option>
                </select>
                </div>
            </div>
　

            
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>