@extends('layouts.admin')

@section('content')
<div class="card">
    <h1>Messages</h1>
        @if($message)
            @foreach($message as $messages)
            <form action="submitProfessorMessage" method="POST">
                <h3>{{$messages->subject}}</h3>
                <p>{{$messages->message}}</p>

                <h2>Response:</h2>

                <h3>Title</h3>
                <input class="form-control" name="title" type="text" placeholder="Subject">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <h3>Message</h3>
                <input class="form-control" name="poruka" type="text" placeholder="Type a message">
                <button class="btn btn-primary">Send</button>
            </form>
            @endforeach
        @endif
</div>
@endsection