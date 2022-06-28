<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>

    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/atm-menu.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo mt-4" src="/image/logoBesar.png" alt="" width="300">
                </a>
            </div>
        </nav>
        <!-- END NAV -->
        <div class="d-flex justify-content-end">
            <img class="kotak-bulet" src="/image/kotak-bulet.png" alt="">
        </div>
        <!-- <p style="margin-top:1rem; margin-bottom: 5rem; font-size:3vw; font-weight:bold; color:#343A40;">Menu</p>             -->
        <div class="container">
            <div class="row">
                <h1 class="text-center">Bottle</h1>
            </div>
            <div class="row text-center py-4">
                <a href="{{ url('/atm-jumlahBotol') }}" style="text-decoration: none !important; color: black;"><i
                        class="fa fa-arrow-down fa-8x"></i></a>
            </div>
            <div class="row py-4">
                <h3 class="text-center">Masukkan botol ke dalam lubang di bawah!</h3>
            </div>
            <div class="row">
                <h6 class="text-center">Masukkan botol perlahan👌</h6>
            </div>

        </div>
        <div class="pt-4 justify-content-start">
            <a href="/atm-menu" class="btn btn-lg p-3" style="color:white; background-color: #F52F53">Kembali</a>
        </div>
        <div class="d-flex justify-content-end">
            <img class="kotak-input" src="/image/kotak.png" alt="">
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>