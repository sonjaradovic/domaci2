<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/userPlans.css') }}">
</head>
<body>
    <div class="flex">
        <div class="card">
            <img src="{{URL('/images/english.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>English</b></h4>
                    <p>Na osnovu izabrane skole biće vam organizovan plan učenja engleskog jezika</p>
                </div>
        </div>
        <div class="card">
            <img src="{{URL('/images/spanish.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Spanish</b></h4>
                    <p>Na osnovu izabrane skole biće vam organizovan plan učenja španskog jezika</p>
                </div>
        </div>
    </div>
</body>
</html>