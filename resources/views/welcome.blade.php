<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio Creator</title>
        <link rel="stylesheet" href="css/style.css">

        @livewireStyles
    </head>


    <body>
        <!-- Include Livewire Component -->
        <livewire:Portfolio-Component />
        @livewireScripts

        <?php
        echo "WELCOME!";
        ?>

        <section class="Signup_cred">
            <div class="auth_container">
                <form>
                    E-mail: 
                    <input class="input_EMAIL" type="text" name="Email"><br>
                    Passowrd:
                    <input class="input_pass" type="password">
                    <br>
                    <input class="byn_signup" type="button" value="SignUp">
                    <br>
                    <input class="btn_login" type="button" value="Login">
                </form>
            </div>
        </section>

    </body>
</html>
