<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
  background-image:url("img/14.jpg");
background-size:cover;
}
fieldset
{
    width:200px;
    text-align: center;
    margin-left: 550px;
    background-color: black;
    color: white;
    margin-top: 100px;

}

</style>
<body>

    <div class="main ">
        <fieldset>

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action="logt.php">
                    <h2>Sign IN</h2>
					Please Remember your Login Credentials
                    <p class="desc"><span></span></p>
                    <div class="form-group">
                        <input type="text" class="form-input" name="email" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" required name="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="LOGIN"/>
                       
                    </div>
                </form>
            </div>
        </div>

    </div>
    </fieldset>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


