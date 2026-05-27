<?php
include_once('process_register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"><title>GRIS-BLOG</title>

    <style>
        body {

            background-color: #0a0707; 
            margin: auto;
            margin-top: 20px;
        }
        section { 
            background-color: #947878; 
            width: 40%;
            height: 90vh;
            margin: auto;
            border-radius: 3%;
            border: 1px black solid;
            
        }

        .error {
            background-color: whitesmoke;
            width: 30%;
            text-align: center;
            color: red;
            padding: 10px;
            height: 30px;
            font-size: larger;
            font-weight: bolder;
        }

        div {
            width: 100%;
            margin: auto;
            display: flex;
            align-items: center; /* Centers vertically */
            justify-content: center; /* Centers horizontally (optional) */
  
        }

        button {
            background-color: whitesmoke;
            color: #050001;
        }

        form {
            width: 100%;
            margin: auto;
            display: inline-block;
        }

        .form {
            margin: 25px 0;
        }

        label {
            margin: 25px;
        }

        button {
            margin-top: 20px;
            color: whitesmoke;
            background-color: #0a0707;
            border: 1px #0a0707 solid;
            border-radius: 3px;
            width: 90%;
        }

        .btn {
            padding: 20px;
            width: 50%;
        }

        .log {
            margin: 10px 1px;
        }

        h5 {
            text-align: center;
        }

        hr {
            width: 50%;
        }
    </style>
</head>
<body>
    <section class="error"><?php echo $error; ?></section></p>
    <section>
        <div>
            <h2>SIGNING-UP...</h2>
        </div>
        <hr>
        <div class="form">
            <form action="register.php" method="POST">
                <div>
                    <label for="name">Pseudo</label>
                    <input id="name" name="pseudo" value="<?php echo $pseudo ?>" required />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="<?php echo $email ?>" required />
                </div>
                <div>
                    <label for="email">Password</label>
                    <input id="email" type="password" name="password" required />
                </div>
                <div>
                    <label for="email">Confirm PW</label>
                    <input id="email" type="password" name="password1" required />
                </div>
                <div class="btn">
                    <button type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
        <hr>
        <h5>Already get an account? <a href="login.php">Login</a></h4>
        
    </section>

</body>