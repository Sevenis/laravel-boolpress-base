@extends('../layouts.app')
@section('content')

    <form action="{{route('posts.store')}}" method="post">
    @csrf
    @method('POST')
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->id}}</option>
        @endforeach
    </select>


    <label for="title">Titolo</label>
    <input type="text" name="title" placeholder="Titolo">
    <label for="content">Testo</label>
    <textarea name="post" rows="8" cols="80" placeholder="Inserire il testo del post"></textarea>
    <input type="submit" value="Invia">
    </form>
@endsection
