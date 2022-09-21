@extends('layouts.app')

@section('content')

<div class="flex">
        <div class="card">
            <img src="{{URL('/images/english.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>English</b></h4>
                    <p>Na osnovu izabrane skole biće organizovan plan učenja</p>
                    <button id="languageButton" class="btn btn-success">Start</button>
                </div>
        </div>

        <div class="card">
            <img src="{{URL('/images/spanish.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Spanish</b></h4>
                    <p>Na osnovu izabrane skole biće organizovan plan učenja</p>
                    <button id="spanishButton" class="btn btn-success">Start</button>
                </div>
        </div>
</div>

<div class="languagePlanForm">
<div class="card">
    <div class="container">
        <form action="" method="POST">
            Cilj:
            <Input type="text" Name="Name" Size=15 Maxlength=15>
            <br>
            Pol:&nbsp;&nbsp;
            <Input type="radio" Name="Gender">&nbsp;M&nbsp;&nbsp;<Input type="radio" Name="Gender">&nbsp;F
            <br>
            Godine:&nbsp;
            <Input type="text" Name="Password">
            <br>
            Tip učenja:<br>
            <Textarea Name="Address" Rows="5" Cols="15"></Textarea>
            <br>
            Nivo znanja:<br>
            <Input type="checkbox" Name="Browsing">&nbsp;A1&nbsp;&nbsp;<Input type="checkbox" Name="Reading">&nbsp;B1<br><Input type="checkbox" name="Gaming">&nbsp;C1&nbsp;&nbsp;<Input type="checkbox" Name="Trekking">&nbsp;C2<br>
            <Input class="btn btn-success" type="Submit" Name="Submit" value="Submit">&nbsp;&nbsp;
        </form>
    </div>
</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/libs/app.js') }}"></script>
@endsection
