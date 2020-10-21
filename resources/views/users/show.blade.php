@extends('../layouts.app')
@section('content')
    <h2>Dettaglio Utente</h2>
        <ul>
            <li>{{$user->name}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->avatar->avatar}}</li>
            <li>{{$user->avatar->telefono}}</li>
        </ul>

        <form action="{{route('users.destroy', $user->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" value="Cancella utente">
        </form>
        
        <h3>Post che ha scritto</h3>
        @foreach ($user->posts as $post)
            <div>
                <p>Titolo: {{$post->title}}</p>
                <p>Post: {{$post->body}}</p>
            </div>

        @endforeach
@endsection
