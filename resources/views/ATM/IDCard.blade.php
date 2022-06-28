<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>

    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/atmstyle.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/dcode.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keyboard.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/atmstyle.css') }}"> -->
</head>

<body>
    <div class="container bg1">
        <img class="headerLogo" src="{{url('/image/logoBesar.png')}}">
        <div class="content">
            <form action="atm-menu-id" method="POST">
                @csrf
                <p style="margin-top:4.3vw; font-size:3vw; font-weight:bold; color:#343A40; margin-bottom:2vw">Masukan
                    No Rekening</p>
                <input class="use-keyboard-input" name="rekening" type="text" placeholder="contoh : 12022">
                <div>
                    <button class="btn btn-small" type="submit" style="margin-top: 20px">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script src="js/keyboard.js"></script>