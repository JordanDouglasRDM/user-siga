<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Siga</title>
</head>
<body>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        max-width: 350px;
        background: #F8F9FD;
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: #6D42BA 0px 30px 30px -20px;
        margin: 40px 20px 20px 20px ;
        text-align: center;
    }

    .heading {
        padding: 20px 45px;
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: #6D42BA;
    }

    .form {
        margin-top: 20px;
    }

    .form .input {
        width: 100%;
        background: white;
        border: none;
        padding: 15px 20px;
        border-radius: 20px;
        margin-top: 15px;
        margin-left: -22px;
        box-shadow: #6D42BA 0px 5px 5px -5px;
        border-inline: 2px solid transparent;
    }

    .form .input::-moz-placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input:focus {
        outline: none;
        border-inline: 2px solid #6D42BA;
    }

    .form .forgot-password {
        display: block;
        margin-top: 10px;
        margin-left: 10px;
    }

    .form .forgot-password a {
        font-size: 11px;
        color: #6D42BA;
        text-decoration: none;
    }

    .form .login-button {
        display: block;
        width: 100%;
        font-weight: bold;
        background: linear-gradient(45deg, #6D42BA 0%, #6D42BA 100%);
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        border: none;
        transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
        transform: scale(1.03);
        box-shadow: #6D42BA 0px 23px 10px -20px;
    }

    .form .login-button:active {
        transform: scale(0.95);
        box-shadow: #6D42BA 0px 15px 10px -10px;
    }

</style>
<div class="container">
    <div class="heading">Login SIGA</div>
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset
    {{ $slot }}
</div>
</body>
</html>
