@extends('layout')
{{-- this is for the name of the view that will be extended  --}}
{{-- you can use one of them the extends or you can use x-layout another abroash
the section used to set all content inside the section into content inside the layout --}}
@section('content')
    <?php foreach ($posts as $value):
    ?>
    <article>
        <h1>
            <a href="/post/{{ $value->id }}">
                {{ $value->title }}
            </a>
        </h1>
    {!! $value->body !!}
    </article>


    <?php endforeach; ?>
@endsection
