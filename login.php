<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="logo.jpg">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Login</title>
</head>
<body>

<section class="login">
  <form action="" method="post">
  <?php
    session_start();

    // Include your database connection file
    require_once "database.php";

    // Check if the user is already logged in, redirect to dashboard if so
    if (isset($_SESSION['user'])) {
        // Redirect only if user is logged in
        header("Location: form.php");
        exit();
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        // Retrieve form data
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Validate if email and password are not empty
        if (!empty($email) && !empty($password)) {
            // Prepare and execute SQL query to fetch user info based on email
            $sql = "SELECT * FROM user_info WHERE Email = ?";
            $stmt = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    // Verify password
                    if (password_verify($password, $row['Password'])) {
                      // Password is correct, set session and redirect
                      $_SESSION['user'] = $row['ID']; // Assuming 'ID' is the column name for user ID
                      $_SESSION['email'] = $row['Email']; // Store the email in the session
                      header("Location: form.php");
                      exit();
                  } else {
                      // Incorrect password
                      echo "<div class='alert alert-danger'>Incorrect email or password.</div>";
                  }
                } else {
                    // User not found
                    echo "<div class='alert alert-danger'>User not found.</div>";
                }
            } else {
                // SQL statement preparation failed
                echo "<div class='alert alert-danger'>SQL statement preparation failed.</div>";
            }

            // Close statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        } else {
            // Email or password is empty
            echo "<div class='alert alert-danger'>Email and password are required.</div>";
        }
    }
?>
    <div class="input">
      <input type="email" name="email" id="email" placeholder="Email Address" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
    </div>
    <div class="submit">
      <button type="submit" name="login">Login</button>
    </div>
    <div class="link">Don't have an account? <a href="signup.php">Sign Up</a></div>
  </form>
</section>
</body>
</html>