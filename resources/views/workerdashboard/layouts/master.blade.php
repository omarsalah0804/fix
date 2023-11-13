
@if (Auth::check())
@if (Auth::user()->type == 'Worker')
@include('workerdashboard/layouts/header')
@include('workerdashboard/layouts/sidebar')
@yield('content')

@include('workerdashboard/layouts/footer')












@else
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .errorpagecontainer {
            display: flex;
            flex-flow: row wrap;
            align-content: center;
            justify-content: center;
        }

        .numbererror,
        .texterror {
            width: 100%;
            text-align: center;

        }

        .numbererror {
            margin-top: 5%;
            background: #fff;
            position: relative;
            font: 900 30vmin "Consolas";
            letter-spacing: 5vmin;
            text-shadow: 2px -1px 0 #000, 4px -2px 0 #0a0a0a, 6px -3px 0 #0f0f0f, 8px -4px 0 #141414, 10px -5px 0 #1a1a1a, 12px -6px 0 #1f1f1f, 14px -7px 0 #242424, 16px -8px 0 #292929;
        }

        .numbererror::before {
            background-color: #3d4e6d;
            background-image: radial-gradient(closest-side at 50% 50%, #3d4e6d 100%, rgba(0, 0, 0, 0)), radial-gradient(closest-side at 50% 50%, #3d4e6d 100%, rgba(0, 0, 0, 0));
            background-repeat: repeat-x;
            background-size: 40vmin 40vmin;
            background-position: -100vmin 20vmin, 100vmin -25vmin;
            width: 100%;
            height: 100%;
            mix-blend-mode: screen;
            -webkit-animation: moving 10s linear infinite both;
            animation: moving 10s linear infinite both;
            display: block;
            position: absolute;
            content: "";
        }

        @-webkit-keyframes moving {
            to {
                background-position: 100vmin 20vmin, -100vmin -25vmin;
            }
        }

        @keyframes moving {
            to {
                background-position: 100vmin 20vmin, -100vmin -25vmin;
            }
        }

        .texterror {
            font: 400 5vmin "Courgette";
        }

        .texterror span {
            font-size: 10vmin;
        }
    </style>
</head>

<body>
    <div class="errorpagecontainer">
        <div class="numbererror ">404</div>
        <div class="texterror"><span>Sorry...</span><br>This Page Is Available For Admins...</div>
        <a class="me" href="http://127.0.0.1:8000/">Home</a>
    </div>
</body>

</html>
@endif 
@else
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style>
    .errorpagecontainer {
        display: flex;
        flex-flow: row wrap;
        align-content: center;
        justify-content: center;
    }

    .numbererror,
    .texterror {
        width: 100%;
        text-align: center;

    }

    .numbererror {
        margin-top: 5%;
        background: #fff;
        position: relative;
        font: 900 30vmin "Consolas";
        letter-spacing: 5vmin;
        text-shadow: 2px -1px 0 #000, 4px -2px 0 #0a0a0a, 6px -3px 0 #0f0f0f, 8px -4px 0 #141414, 10px -5px 0 #1a1a1a, 12px -6px 0 #1f1f1f, 14px -7px 0 #242424, 16px -8px 0 #292929;
    }

    .numbererror::before {
        background-color: #5c677d;
        background-image: radial-gradient(closest-side at 50% 50%, #34425d 100%, rgba(0, 0, 0, 0)), radial-gradient(closest-side at 50% 50%, 
#adb3be 100%, rgba(0, 0, 0, 0));
        background-repeat: repeat-x;
        background-size: 40vmin 40vmin;
        background-position: -100vmin 20vmin, 100vmin -25vmin;
        width: 100%;
        height: 100%;
        mix-blend-mode: screen;
        -webkit-animation: moving 10s linear infinite both;
        animation: moving 10s linear infinite both;
        display: block;
        position: absolute;
        content: "";
    }

    .button {
appearance: none;
background-color: transparent;
border: 0.125em solid #34425D;
border-radius: 0.9375em;
box-sizing: border-box;
color: #3B3B3B;
cursor: pointer;
display: inline-block;
font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
font-size: 16px;
font-weight: 600;
line-height: normal;
margin: 0;
min-height: 3.75em;
min-width: 0;
outline: none;
padding: 1em 2.3em;
text-align: center;
text-decoration: none;
transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
will-change: transform;
margin-top: 20px
}

.button:disabled {
pointer-events: none;
}

.button:hover {
color: #fff;
background-color: #34425D;
box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
transform: translateY(-2px);
}

.button:active {
box-shadow: none;
transform: translateY(0);
}

    @-webkit-keyframes moving {
        to {
            background-position: 100vmin 20vmin, -100vmin -25vmin;
        }
    }

    @keyframes moving {
        to {
            background-position: 100vmin 20vmin, -100vmin -25vmin;
        }
    }

    .texterror {
        font: 400 5vmin "Courgette";
    }

    .texterror span {
        font-size: 10vmin;
    }
</style>
</head>

<body>
<div class="errorpagecontainer">
    <div class="numbererror ">404</div>
    <div class="texterror"><span>Sorry...</span><br>This Page Is Available For Admins</div>
    <a class="me button" href="http://127.0.0.1:8000/">Home</a>
</div>
</body>

</html>

@endif

