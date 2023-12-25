<title>my blog</title>
<body>

    <article>
        <strong>This title <?= $post->title ?> </strong>
       <strong>This body <?= $post->body ?> </strong>
       <strong>This excerpt <?= $post->excerpt ?> </strong>
    <a href="#">{{ $post->category->name }} </a>
    </article>
    <a href="/">Go back</a>
</body>
