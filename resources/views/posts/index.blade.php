@extends('../layouts.app')
@section('content')

<h2>Elenco post</h2>
@if (session('insert'))
    <div class="alert alert-success">
        {{ session('insert')}}
    </div>
@endif
@foreach ($posts as $post)
    <div>
        <p>Titolo: {{$post->title}}</p>
        <p>Titolo: {{$post->body}}</p>
    </div>
@endforeach
@endsection
