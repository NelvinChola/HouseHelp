<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> HouseHelp | Login </title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        //This is the php that is going to handle the registration of a user
        if(isset($_POST["submit"])){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $passwordCreate = $_POST["passwordCreate"];
            $passwordConfirm  = $_POST["passwordConfirm"];
            $errors = array();

            //checks if any of the form entry is empty
            if (empty($firstname) OR empty($lastname) OR empty($email) OR empty($passwordCreate) OR empty($passwordConfirm)) {
                array_push($errors, "please fill in all entries before submission"); //pushes an array to the end of the elements
            }
            //checks if the email is a valid address
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Invalid valid");
            }
            //checks if the password has 8 characters
            if (strlen($password)<8){
                array_push($errors, "password must contain atleast 8 characters long");
            }
            //checks if the retyped password is the same as the newly created password
            if ($passwordCreate!==$passwordConfirm){
                array_push($errors, "password passwords do not match");
            }
            //counts the amount errors depending on how many the user has made 
            if (count($errors)>0) {
                foreach($errors as $error){
                    echo $error;
                }
            }else{
                //later
            }
        }
        ?>
        <section class="container forms">s
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="loginHandler.php" method="post" autocomplete="on">
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>
            
            <!-- Signup Form -->
            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="registration.php" method="post">
                        <div class="field input-field">
                            <input type="text" placeholder="First Name" name="firstname" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="text" placeholder="Last Name" name="lastname" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" name="passwordCreate" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" name="passwordConfirm" class="password">
                        </div>

                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>
                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>