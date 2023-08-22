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
    }

    .container {
        max-width: 350px;
        background: #F8F9FD;
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: red 0px 30px 30px -20px;
        margin: 100px 20px 20px 20px ;
        text-align: center;
    }

    .heading {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: red;
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
        box-shadow: red 0px 5px 5px -5px;
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
        border-inline: 2px solid red;
    }

    .form .forgot-password {
        display: block;
        margin-top: 10px;
        margin-left: 10px;
    }

    .form .forgot-password a {
        font-size: 11px;
        color: red;
        text-decoration: none;
    }

    .form .login-button {
        display: block;
        width: 100%;
        font-weight: bold;
        background: linear-gradient(45deg, red 0%, red 100%);
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: red 0px 20px 10px -15px;
        border: none;
        transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
        transform: scale(1.03);
        box-shadow: red 0px 23px 10px -20px;
    }

    .form .login-button:active {
        transform: scale(0.95);
        box-shadow:red 0px 15px 10px -10px;
    }

</style>
<div class="container">
    <div class="heading">Informe seu acesso do Siga</div>
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset
    {{ $slot }}
</div>
</body>
</html>