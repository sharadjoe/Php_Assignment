<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datafloor Logged In</title>
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
                    </h1>
						<div class = "error success">
					   <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>

                    </div>


                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>