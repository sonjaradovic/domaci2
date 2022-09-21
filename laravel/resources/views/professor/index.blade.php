@extends('layouts.app')

@section('content')
<div class="flexContainer">
    <div id="login-container">
    <div class="profile-img"></div>
    <h1>
        Oxford
    </h1>
    <div class="description">
        Akademija Oxford osnovana je 2008. godine i od tada sprovodi programe neformalnog obrazovanja, kurseve stranih jezika, prevodilačke usluge sudskih tumača.
    </div>
    <div class="social">
        <a href="https://www.instagram.com/akademija_oxford/?hl=sr">Instagram</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <a href="editProfessor/1" class="btn btn-primary professorDugme">Apply</a>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.5K</p>
        </div>
        <div class="projects">
        <p>Students</p>
        <p>1154</p>
        </div>
    </footer>
    </div>

    <div id="login-container">
    <div class="profile-img2"></div>
    <h1>
        St.Nicolas
    </h1>
    <div class="description">
        Osnovana 1999. godine, škola ST NICOLAS SCHOOL ima više od 20 godina iskustva u organizovanju kurseva stranih jezika za polaznike različitih uzrasta i profila.
    </div>
    <div class="social">
        <a href="https://www.instagram.com/st.nicholasschool/" >Instagram</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <button>Apply</button>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.3K</p>
        </div>
        <div class="projects">
        <p>Students</p>
        <p>1850</p>
        </div>
    </footer>
    </div>
</div>
@endsection
