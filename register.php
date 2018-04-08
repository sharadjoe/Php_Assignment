<?php include('server.php') ?>
<!DOCTYPE html>



<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datafloor Signup</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bulma.css">
</head>
<body>

<script type="text/javascript">
function verify(){
var name = document.getElementById("name");
var phoneno = document.getElementById("phone");
var pass1 = document.getElementById("pass1");
var pass2 = document.getElementById("pass2");
if(name.value == '' || phoneno.value == '' || pass1.value == '' || pass2.value == '' ){
alert("Fields Empty");
return false ; 
}
else{
if(pass1.value != pass2.value){
alert("Passwords Dont Match");
return false ;
}
}
alert("Registration Form Clean : Name " + name.value + " Phone Number " + phoneno.value );
return true;
}
</script>


<section class="hero is-fullheight is-dark is-bold">
    <div class="hero-body">
        <div class="container has-text-centered" >
            <h1   class="title" style="font-size: 5.5em ; font-family: Roboto ;color: whitesmoke">
                <strong>D</strong>ata <strong>F</strong>loor
            </h1>

        </div>
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4" style="min-width: 300px ; height: auto">
                    <h1 class="title">
                        Register an Account
                    </h1>
                    <div class="box" >
                        <form action="register.php" method="POST">
                        <label class="label">Name</label>
                        <p class="control">
                            <input class="input" type="text" name="username" id="name" placeholder="Darth Vader">
                        </p>
                        <label class="label">Email</label>
                        <p class="control">
                            <input class="input" type="email" name="email" id="email" placeholder="vader@firstorder.org">
                        </p>

                        <hr>
                        <label class="label">Password</label>
                        <p class="control">
                            <input class="input" type="password" name="password_1" id="pass1" placeholder="Password - Lukeismyson">
                        </p>
                        <label class="label">Confirm Password</label>
                        <p class="control">
                            <input class="input" type="password" name="password_2" id="pass2" placeholder="Password">
                        </p>
                        <hr>
						<?php include('errors.php'); ?>

                        <p class="control">
                            <input type="submit" class="button is-primary"  name="reg_user" onclick="return verify();"> Register>
                        </p>
                    </div>
                    <p class="has-text-centered">
                        <a href="login.php">Login</a>
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