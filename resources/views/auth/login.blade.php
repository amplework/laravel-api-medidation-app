<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practice1css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <title>Sign-Up-Form Moti</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Alkatra', cursive;
    }

    #sign-form {
        width: 50%;
        height: 100%;
        margin: 10vh auto;
        /* background-color: brown; */
        padding: 5%;
    }

    label:not(label:first-of-type) {
        display: block;
        margin: 15px 0 5px 0;
        font-size: 14px;
    }

    .sentence-agree {
        display: inline;
        font-size: 14px;
    }

    #submit {
        display: block;
        width: 100%;
        height: 30px;
        padding: 0 20px;
        background-color: #bd7dd1 !important;
        color: #fff !important;
        font-size: 1rem;
        cursor: pointer;
    }

    #submit:hover {
        background-color: #bd7dd1 !important;
    }

    div.hr-left,
    div.hr-right {
        width: 30%;
        height: 1px;
        background-color: #cccccc;
    }

    p.guide-google {
        font-size: 14px;
        color: #cccccc;
        width: 40%;
        margin: auto 5px;
    }

    input:not(input#terms-agree) {
        background-color: #fff;
        width: 100%;
        height: 45px;
        padding-left: 20px;
        border: 1px solid #cccccc;
        border-radius: 30px;
        color: #333399;
    }

    input:focus {
        outline: 1px solid #bd7dd1;
    }

    .google-sign-btn {
        width: 100%;
        height: 45px;
        border: 1px solid #cccccc;
        border-radius: 30px;
        outline: none;
        background-color: #fff;
        font-size: 1rem;
        cursor: pointer;
    }

    .google-sign-btn:hover {
        background-color: #cccccc;
    }

    i.fa-google {
        font-size: 25px;
        margin-right: 5px;
        vertical-align: middle;
        color: #bd7dd1;
    }

    .form-caption {
        color: #737373;
        margin-bottom: 30px;
        ;
    }

    .star-required {
        color: #bd7dd1;
    }

    input[type=checkbox] {
        margin: 30px 0 30px 0;
        accent-color: #bd7dd1;
    }

    a {
        color: #bd7dd1;
        text-decoration: none;
        font-size: 14px;
    }

    a:hover {
        color: #bd7dd1;
    }

    .have-account-line {
        margin: 30px 0 30px 0;
        font-size: 14px;
    }

    .info {
        color: #737373;
        font-size: 14px;
    }

    .google-guide-container {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px 0;
    }

    select,
    option {
        background-color: #fff;
        width: 100%;
        height: 45px;
        padding-left: 20px;
        border: 1px solid #cccccc;
        border-radius: 30px;
        color: #333399;
    }
</style>

<body>
    <div class="container">
        <form action="{{ route('login') }}" method="POST" class="sign-form" id="sign-form" autocomplete="on">
            @csrf
            <h1 class="form-title">Login</h1>
            <p class="form-caption"> Welcome to World Motivation </p>
            <br>
            <div class="google-guide-container">
                <div class="hr-left"></div>
                <p class="guide-google">Login Reg. Email</p>
                <div class="hr-right"></div>
            </div>
            <label for="email">Email<span class="star-required">*</span></label>
            <input type="email" name="email" id="email" placeholder="mail@moti  .com" required>
            <label for="password">Password<span class="star-required">*</span></label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <br>
            <br>

            {{-- <input type="checkbox" name="terms-agree" id="terms-agree" required> --}}
            {{-- <p class="sentence-agree">I agree to the <a href="">Terms & Conditions</a></p> --}}
              {{-- <input type="checkbox" name="terms-agree" id="terms-agree" required> --}}
            {{-- <p class="sentence-agree">I agree to the <a href="">Terms & Conditions</a></p> --}}

            <input type="submit" value="Sign Up" id="submit">

            <p class="have-account-line">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>

        </form>

        <p class="info">&copy;Copyright © Moti 2023</p>

    </div>

</body>

</html>
