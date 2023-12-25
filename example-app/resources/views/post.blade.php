<title>my blog</title>
<body>

    <article>
       <strong>By <a href="#">{{ $post->user->name }}</a> </strong><br>
        <strong>This title <?= $post->title ?> </strong><br>
       <strong>This body <?= $post->body ?> </strong><br>
       <strong>This excerpt <?= $post->excerpt ?> </strong><br>
       <strong>In <a href="#">{{ $post->category->name }} </a>Category</strong><br>
    </article>
    <a href="/">Go back</a>
</body>
