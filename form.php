<?php 
    session_start();
    // Check if the user is not logged in, redirect to login.php
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

        ::-webkit-scrollbar {
            width: 12px;
            background: linear-gradient(#000000, #414141);
        }

        ::-webkit-scrollbar-thumb {
            background-color: #2c2c2c;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        html, body {    
            background: -webkit-linear-gradient(bottom, #000000, #454545, #848484);
            font-family: 'Courier New', "Arial", "sans-serif";
            background-size: cover;
            height: 100vh;
        }

        #feedback-page{
            text-align:center;
        }

        #form-main{
            width:100%;
            float:left;
            padding-top:0px;
        }

        #form-div {
            background-color: rgba(0, 0, 0, 0.4); /* Adjusted background color */
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 35px;
            padding-bottom: 50px;
            width: 600px;
            float: left;
            left: 45%;
            position: absolute;
            margin-left: -260px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            margin-top:60px;
        }

        .feedback-input {
            color: #000;
            font-weight: 500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            margin-bottom: 10px;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            border: 3px solid rgba(0, 0, 0, 0);
        }

        .feedback-input:focus {
            background: #fff;
            box-shadow: 0;
            border: 3px solid #3498db;
            color: #000
            outline: none;
        }

        .focused {
            color: #30aed6;
            border: #30aed6 solid 3px;
        }

        /* Icons ---------------------------------- */
        #email,
        #comment {
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        textarea {
            height: 250px;
            line-height: 150%;
            resize: vertical;
            padding-left: 10px; /* Adjusted padding */
        }

        input:hover,
        textarea:hover,
        input:focus,
        textarea:focus {
            background-color: white;
        }

        #button-blue {
            float: left;
            width: 100%;
            border: #fbfbfb solid 4px;
            cursor: pointer;
            background-color: #000000; /* Adjusted button background color */
            color: white;
            font-size: 24px;
            padding-top: 22px;
            padding-bottom: 22px;
            -webkit-transition: background-color 0.3s, color 0.3s; /* Adjusted transition properties */
            -moz-transition: background-color 0.3s, color 0.3s; /* Adjusted transition properties */
            transition: background-color 0.3s, color 0.3s; /* Adjusted transition properties */
            margin-top: -4px;
            font-weight: 700;
        }

        #button-blue:hover {
            background-color: rgba(0, 0, 0, 0); /* Adjusted button hover background color */
            color: #000; /* Adjusted button hover text color */
        }

        .submit:hover {
            color: #3498db;
        }

        .ease {
            width: 0px;
            height: 74px;
            background-color: #000;
            -webkit-transition: 0.3s ease;
            -moz-transition: 0.3s ease;
            -o-transition: 0.3s ease;
            -ms-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .submit:hover .ease {
            width: 100%;
            background-color: white;
        }

        @media only screen and (max-width: 580px) {
            #form-div {
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }
        }

        .Contacts {
            color: #fff;
            text-align: center;
            margin-top: 60px;
        }

        .contact-group {
            display: flex;
            justify-content: space-evenly;
            margin-bottom: 20px;
        }

        .contact-group p {
            margin: 0;
        }

        a {
            color: #EDEDED;
            text-decoration: none;
            font-size:20px;
        }

        a:hover {
            color: #f5d65b;
            transition: all 0.2s ease;
        }

        .home, .signout {
            display: inline-block;
            justify-content: center;
            padding: 10px 30px;
            border: 2px solid #fff;
            text-decoration: none;
            text-align:center;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            width: 150px; /* Set a specific width */
        }
        
        .buttons {
            display:flex;
            justify-content:space-evenly;
            margin-bottom:30px;
        }

        .success-message {
            background-color: rgba(255, 255, 255, 0.1); /* Use rgba for transparent background */
            padding: 10px; /* Add padding for better readability */
            margin-bottom: 10px; /* Add margin to separate messages */
            text-align:center;
            color: #16F13B;
            font-weight: bold;
        }

        .error-message {
            background-color: rgba(255, 255, 255, 0.1); /* Use rgba for transparent background */
            padding: 10px; /* Add padding for better readability */
            margin-bottom: 10px; /* Add margin to separate messages */
            text-align:center;
            color: #FF3333;
            font-weight: bold;
        }
    </style>

</head>
<body>
    <div id="form-main">
        <div id="form-div">
            <form class="form" id="form1" action="" method="post">
                <div class="buttons">   
                    <a href="index.php" class="home">HOME</a>
                    <a href="logout.php" class="signout">SIGN OUT</a>
                </div>
                <?php 
                    // Include your database connection file
                    require_once "database.php";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Check if comment field is not empty
                        if (!empty($_POST["text"])) {
                            // Retrieve email of the logged-in user from the session
                            if(isset($_SESSION["email"])) {
                                $email = $_SESSION["email"];
                                $comment = htmlspecialchars($_POST["text"]);
                            
                                // Prepare the SQL statement to insert the comment and email into the database
                                $sql = "INSERT INTO comments (Email, Comment) VALUES (?, ?)";
                                
                                // Prepare and bind parameters
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("ss", $email, $comment);
                                
                                // Execute the SQL statement
                                if ($stmt->execute()) {
                                    echo "<p class='success-message'>Comment stored successfully.</p>";
                                } else {
                                    echo "<p class='error-message'>Error storing comment: " . $stmt->error . "</p>";
                                }
                        
                                // Close the prepared statement
                                $stmt->close();
                            } else {
                                echo "<p class='error-message'>Email not found in session.</p>";
                            }
                        } else {
                            echo "<p class='error-message'>Comment field is empty.</p>";
                        }
                    }
                ?>
                <p class="text">
                    <textarea name="text" class="feedback-input" id="comment" placeholder="Comment"></textarea>
                </p>
                
                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>

                <div class="Contacts">
                    <h3>Other Contacts / Social Media</h3>
                    <div class="contact-group">
                        <p><a href="https://www.linkedin.com/in/lascanomalvinjonas/" target="_blank">LinkedIn</a></p>
                        <p><a href="mailto:lascanomb@students.nu-fairview.edu.ph" target="_blank">Student Email</a></p>
                        <p><a href="mailto:lascanomalvinjonas@gmail.com" target="_blank">Gmail</a></p>
                    </div>
                    <div class="contact-group">
                        <p><a href="https://www.instagram.com/mjaolnvaisn" target="_blank">Instagram</a></p>
                        <p><a href="https://www.facebook.com/profile.php?id=100082813854414" target="_blank">Facebook</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>