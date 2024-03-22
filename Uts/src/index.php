<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link CSS custom Anda -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body style="display:flex; align-items:center; justify-content:center;">
    <div class="login-page">
        <div class="form" style="background-color: var(--2);">
            <form class="register-form" method="POST">
                <h2 style=" color: var(--4); "><i class=""></i> Register</h2>
                <div class="pt-4">
                    <input id="input" type="text" placeholder="Full Name *" required />
                    <input id="input" type="text" placeholder="Username *" required />
                    <input id="input" type="email" placeholder="Email *" required />
                    <input id="input" type="password" placeholder="Password *" required />
                    <input id="input" type="password" placeholder="Confirm Password *" required />
                    <select id="input" placeholder=" Gender *   " class="form-select"
                        aria-label="Default select example">
                        <option selected>Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Emaile</option>
                        <option value="4">Mechanic</option>
                        <option value="5">Croissant</option>
                    </select>
                    <input id="input" type="date" name="birthdate" required />
                    <button type="submit" class="btn btn-primary">create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </div>
            </form>
            <form class="login-form" method="post">
                <h2 class="pb-4" style=" color: wheat; "> Login</h2>
                <input id="input" type="text" placeholder="Username" required />
                <input id="input" type="password" placeholder="Password" required />
                <button type="submit" name="send2" class="btn btn-primary">login</button>
                <p style="" class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>