<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PT Wahana Inti Selaras</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/indojd.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/deerelist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <link rel="shortcut icon" href="{{ asset('storage/img/logoicon/favicon.ico') }}">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            width: 100%;
        }

        * {
            box-sizing: border-box;
        }

        #header {
            background: #fff;
            border-bottom: 2px solid #e5e5e5;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar {
            margin-bottom: 0;
            border: none;
        }

        .header-flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 22px;
            color: #0a5c36 !important;
            margin: 0;
        }

        /* NAV DESKTOP */
        .navdeere {
            display: flex;
            align-items: center;
            gap: 25px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navdeere li a {
            color: #0a5c36 !important;
            font-weight: 600;
            text-decoration: none;
        }

        .navdeere li a:hover {
            color: #4CAF50 !important;
        }

        /* HAMBURGER */
        .menu-toggle {
            display: none;
            font-size: 22px;
            cursor: pointer;
            color: #0a5c36;
        }

        .divider_header {
            margin: 0;
            border-top: 1px solid #ddd;
        }

        .container {
            max-width: 1140px;
            width: 100%;
            margin: 0 auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .footer-top-line {
            width: 100%;
            height: 15px;
            background: #d9d9d9;
        }

        #footer {
            width: 100%;
            background: #3fa33f;
            padding: 30px 15px;
            color: #fff;
            text-align: center;
        }

        #footer p {
            margin: 0;
            font-size: 13px;
        }

        #toTop {
            position: fixed;
            right: 15px;
            bottom: 15px;
            display: none;
            background: #2e7d32;
            color: #fff;
            padding: 10px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            z-index: 999;
        }

        #toTop:hover {
            background: #1b5e20;
        }

        img, iframe, video {
            max-width: 100%;
            height: auto;
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {

            .header-flex {
                flex-direction: row;
                align-items: center;
            }

            .navbar-brand {
                font-size: 18px;
            }

            .menu-toggle {
                display: block;
            }

            .navdeere {
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background: #fff;
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
                gap: 15px;
                display: none;
                border-top: 1px solid #eee;
            }

            .navdeere.show {
                display: flex;
            }

            .navdeere li {
                width: 100%;
            }

            .navdeere li a {
                display: block;
                width: 100%;
                padding: 8px 0;
            }
        }
    </style>
</head>

<body>

<header id="header">
    <div class="container">
        <div class="header-flex">

            <a class="navbar-brand" href="{{ route('home') }}">
                PT WAHANA INTI SELARAS
            </a>

            <!-- HAMBURGER -->
            <div class="menu-toggle" onclick="toggleMenu()">
                ☰
            </div>

            <ul class="navdeere" id="menu">
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('parts.index') }}">Parts</a></li>
                <li><a href="{{ route('home') }}#service">Service</a></li>
                <li><a href="{{ route('home') }}#ourcompany">Our Company</a></li>
                <li><a href="{{ route('home') }}#careers">Careers</a></li>
                <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
            </ul>

        </div>
    </div>
    <hr class="divider_header">
</header>

@yield('content')

<div class="footer-top-line"></div>

<div id="toTop" onclick="goToTop()">▲</div>

<footer id="footer">
    <p>
        ©{{ date('Y') }}. PT Wahana Inti Selaras | Indomobil Group Agriculture Equipment.
        All Rights Reserved.
    </p>
</footer>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script>
function goToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

window.onscroll = function() {
    let btn = document.getElementById("toTop");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

function toggleMenu() {
    document.getElementById("menu").classList.toggle("show");
}
</script>

</body>
</html>