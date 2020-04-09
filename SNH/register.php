<?php session_start();


?>

<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial scale=1.">
        <link rel="stylesheet" href="style.css">
        </link>
        <title> SEC: Sign Up</title>
    </head>

    <body>

        <div id="page_container">
            <div id="heading_container">
                <p><strong>Welcome, Please Sign Up Here</strong></p>
                <p>All Fields are Required </p>
            </div>

            <div id=form_container>
                <form method="POST" action="processregister.php">
                <p>
                <?php 
                if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                    echo  "<span style= 'color:red' >" . $_SESSION ['error']. "</span "; 

                    session_destroy();
                }
                ?>
                </p>

                    <p>
                        <label> First Name </label> <br>
                        <input
                        <?php
                        if(isset($_SESSION['first_name'])){
                            echo  "value=" . $_SESSION['first_name']; 
                        }
                
                        ?>
                        type="text" name="first_name" placeholder="First name" />
                    </p>

                    <p>
                        <label> Last Name </label> <br>
                        <input 
                        <?php
                        if(isset($_SESSION['last_name'])){
                            echo  "value=" . $_SESSION['last_name']; 
                        }
                        ?>
                        
                        type="text" name="last_name" placeholder="Last name" />
                    </p>

                    <p>
                        <label> Email Address </label> <br>
                        <input 
                        <?php
                        if(isset($_SESSION['email'])){
                            echo  "value=" . $_SESSION['email']; 
                        }              
                        ?>

                        type="text" name="email" placeholder="Email Address" />
                    </p>

                    <p>
                        <label> Password </label> <br>
                        <input type="password" name="password" placeholder="Password" />
                    </p>

                    <p>
                        <label> Gender </label> <br>
                        <select name="gender">
                            <option> Select One </option>
                            <option  
                            <?php
                        if(isset($_SESSION['gender'])  && $_SESSION['gender'] == 'Female'){
                            echo  "selected"; 
                        }
                
                        ?>
                            > Female</option>
                            <option 
                            <?php
                        if(isset($_SESSION['gender'])  && $_SESSION['gender'] == 'Male'){
                            echo  "selected"; 
                        }
                
                        ?>
                            > Male</option>
                        </select>
                    </p>


                    <p>
                        <label> Designation </label> <br>
                        <select name="designation">
                            <option value=""> Select One </option>
                            <option  
                            <?php
                        if(isset($_SESSION['designation'])  && $_SESSION['designation'] == 'Medical Team (MT)'){
                            echo  "selected"; 
                        }
                
                        ?>
                            > Medical Team (MT) </option>
                            <option 
                            <?php
                        if(isset($_SESSION['designation'])  && $_SESSION['designation'] == 'Patient'){
                            echo  "selected"; 
                        }
                
                        ?>
                            > Patient </option>
                        </select>
                    </p>

                    <p>
                        <label> Department </label> <br>
                        <input 
                        <?php
                        if(isset($_SESSION['department'])){
                            echo  "value=" . $_SESSION['department']; 
                        }
                
                        ?>
                        type="text" name="department" placeholder="Department" />
                    </p>

                    <p>

                    </p>
                    <button type="submit"> Proceed </button>
                    </p>
            </div>
            </form>

            <p>
                <a href="dashboard.php"> Home </a> <br>
                <a href="login.php"> Login </a> <br>
                <a href="register.php"> Register </a> <br>
                <a href="forgot.php"> Forgot Password </a> <br>

        </div>



    </body>
