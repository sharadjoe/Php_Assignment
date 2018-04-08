<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datafloor Login</title>
    <link rel="stylesheet" type="text/css" href="css/bulma.css">
</head>
<body>
<section class="hero is-fullheight is-dark is-bold">
    <div class="hero-body">
        <div class="container has-text-centered" >
            <h1   class="title" style="font-size: 5.5em ; font-family: Roboto ;color: whitesmoke">
                <strong>D</strong>ata <strong>F</strong>loor
            </h1>

        </div>
<script type="text/javascript">
    function verify(){
        password = document.getElementById("pass");
        if(password.value == ''){
            alert("Password Field Empty");
            return false;
        }
        return true ;
    }
</script>
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4" style="min-width: 300px ; height: auto">
                    <h1 class="tiusernametle">
                        Login
                    </h1>
                    <div class="box" >
                        <form action="login.php" method="POST">
                        <label class="label">Email</label>
                        <p class="control">
                             <input class="input" type="text" name="email"  placeholder="vader">
                        </p>
                        <label class="label">Password</label>
                        <p class="control">
                            <input class="input" type="password" name="password" id="pass" placeholder="Password">
                        </p>
                        <hr>
						<?php include('errors.php'); ?>
                        <p class="control">
                            <input class="button is-primary" type="submit" name="login_user" onclick = "return verify() ;" value="Log In">
                        </p>
                        </form>
                    </div>
                    <p class="has-text-centered">
                        <a href="register.php">Register an Account</a>
                        |
                        <a href="#">Need help?</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>