{{-- @php
    $response = Http::get('https://cataas.com/cat?json=true',);
@endphp --}}
<!DOCTYPE html>
@include('partials.header')

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="app.css">
    <title>E-Commerce Larvel</title>
</head>

<body>

    <div style="display:flex; gap:20%">
        <div class="title">
            <h1 style="white-space:nowrap; margin-left:10%"> Bienvenue sur XXX shop</h1>
            <p style="font-size:40px"> Any time <br> Any place. </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero dolore assumenda possimus consectetur
                sint, non esse at eaque nihil ratione perspiciatis voluptatum! Dolore fuga minima minus facere vero
                voluptatem harum?</p> <button class="landing_page_button"> Commencez vos achats <img
                    style="width: 25px; margin-left: 5px" src="https://cdn-icons-png.flaticon.com/512/2040/2040514.png">
            </button>
        </div>
        <div> <img style="width:95%; height:90%; margin-top:3%; border-radius:15%"
                src="https://bin.staticlocal.ch/localplace-images/18/1801de28df7e4db137dabd03d299e524f6f59275/Diligent%20AdobeStock_264744377.jpg">
            <p class="promo"> Promo : 20% </p>
        </div>
    </div>

    <div style="background-color:#e9ebf1; padding-bottom:15%"> <p style="text-align: center; color:#f8769c;font-style:italic; font-size:50px"> service </p>
        <p style="text-align: center;font-style:italic; font-size:50px; font-weight:bold"> Millons of person use : XXX </p>
        <div class="flex_advantages"> 

            <div> <div> <img src="https://www.svgrepo.com/show/480853/shipping.svg" width="100px"> </div> <p>Free Shipping</p>  <p style=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ducimus. </p>  </div>
            <div> <div> <img src="https://www.svgrepo.com/show/498950/cloud.svg" width="100px"> </div> <p>24/7 hour support </p>  <p style=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ducimus. </p></div>
            <div> <div> <img src="https://www.svgrepo.com/show/498220/money-recive.svg" width="100px"> </div> <p>100% Moneyback</p>  <p style=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ducimus. </p></div>
        </div>


    </div>
</body>

</html>
