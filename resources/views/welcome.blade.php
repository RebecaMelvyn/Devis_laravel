<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <div class="contain_btn">
    <a class="btn blue" href="{{ route('auth.redirect') }}">Login</a>
    </div>
    <div class="message">
        @auth
            Bonjour {{ Auth::user()->name }} !<br/><br/>

            <a style="margin-top: 50px;" class="btn red" href="{{ route('auth.signout') }}">LogOut</a>
        @endauth
    </div>

    <body class="antialiased">

    </body>
</html>
<style>
    .contain_btn{
        margin-top: 5%;
    }
    .red{
        background-color: red;
    }
    .blue{
        background-color: blue;
        display: table;
        margin: 0 auto;
    }
    .btn{
        margin-top: 5%;
        padding-top: 1%;
        padding-bottom: 1%;
        padding-right: 2%;
        padding-left: 2%;
        border: 0px;
        color: white;
        text-decoration: none;
        border-radius: 15px;
        transition: all 0.4s;
    }
    .btn:hover{
        cursor: pointer;
        padding: 1%;
    }
</style>
