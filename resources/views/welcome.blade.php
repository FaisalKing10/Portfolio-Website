<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio Creator</title>
        <link rel="stylesheet" href="style.css">

        @livewireStyles
    </head>


    <body>
        <!-- Include Livewire Component -->
        <livewire:Portfolio-Component />
        @livewireScripts

        <section class="Signup_cred">
            <div class="auth_container">
                <form>
                    <label class="email">Email</label><br>
                    <input class="input_pass" type="text"><br>
                    <label class="password">Password</label><br>
                    <input class="input_pass" type="password"><br>
                    <input class="click_signup" type="button" value="SignUp"><br>
                </form>
            </div>
        </section>

    </body>
</html>
