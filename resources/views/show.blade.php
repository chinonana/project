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
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Perfumes</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href='/posts/flower'>花</a></li>
					<li><a href='/posts/plant'>植物</a></li>
					<li><a href='/posts/animal'>動物</a></a></li>
					<li><a href='/posts/human'>人工</a></li>
					<li><a href='/posts/create'>投稿</a></li>
					<li><a href='/posts/like'>お気に入り</a></li>
					<li><a href='/login'>ログイン</a></li>
				    <li><a href='/register'>会員登録</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div> <!-- /project posts -->

<body>


<div class="container">
<div class="row">
		<div class="col-xs-12">
        <h1 class="title">
            {{ $post->title }}
        </h1>
        
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>  
            
            </div>
		
		<h3>コメント一覧</h3>
          @foreach($post->comments as $single_comment)
        	<p>{{ $single_comment->comment }}</p><br />
          @endforeach
          
          
   
	<form class="mb-4" method="POST" action="{{ route('comment.store') }}">
    @csrf
 
    <input
        name="post_id"
        type="hidden"
        value="{{ $post->id }}"
    >
 
    <div class="form-group">
        
 

    <div class="form-group">
     <label for="body">
     口コミを投稿してください
     </label>
 
        <textarea
            id="comment"
            name="comment"
            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
            rows="4"
        >{{ old('comment') }}</textarea>
        @if ($errors->has('comment'))
         <div class="invalid-feedback">
         {{ $errors->first('comment') }}
         </div>
        @endif
    </div>
 
    <div class="mt-4">
     <button type="submit" class="btn btn-primary">
     コメントする
     </button>
    </div>
</form>
 
@if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
     {{ session('commentstatus') }}
    </div>
@endif
        

        <div class="footer">
            <a href="/">戻る</a>
        </div>

<br><br><br>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>