<?php
session_start();

// If user already logged in → go to dashboard
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php");
    exit;
}

include "db.php";

// Handle Login
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND deleted_at IS NULL");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if ($user['status'] == 0) {
            $error = "Your account is disabled!";
        }
        elseif (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login Page</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #6E00FF, #FF4EC5);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        width: 380px;
        padding: 40px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
        text-align: center;
    }

    .login-container h2 {
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: bold;
        color: #333;
    }

    .input-box {
        text-align: left;
        margin-bottom: 15px;
    }

    .input-box label {
        font-size: 14px;
        color: #444;
        font-weight: 600;
    }

    .input-box input {
        width: 100%;
        padding: 12px 15px;
        margin-top: 5px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: 0.2s;
    }

    .input-box input:focus {
        border-color: #6E00FF;
        box-shadow: 0px 0px 5px rgba(110,0,255,0.3);
    }

    .forgot {
        text-align: right;
        margin: 5px 0 20px;
    }

    .forgot a {
        text-decoration: none;
        font-size: 13px;
        color: #6E00FF;
        font-weight: 600;
    }

    .login-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #3CD3AD, #4CB8C4);
        border: none;
        border-radius: 25px;
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-bottom: 20px;
        transition: 0.3s;
    }

    .login-btn:hover {
        opacity: 0.9;
        transform: scale(1.03);
    }

    .social-text {
        margin: 15px 0 10px;
        color: #666;
        font-size: 14px;
        font-weight: 600;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 18px;
    }

    .social-icons img {
        width: 35px;
        height: 35px;
        cursor: pointer;
        transition: 0.2s;
    }

    .social-icons img:hover {
        transform: scale(1.1);
    }

    .signup-text {
        margin-top: 20px;
        font-size: 14px;
        color: #555;
    }

    .signup-text a {
        color: #6E00FF;
        font-weight: bold;
        text-decoration: none;
    }

    .error {
        color: red;
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: 600;
    }
</style>
</head>

<body>

<div class="login-container">
    <h2>Login</h2>

    <?php if(!empty($error)) { ?>
        <p class="error"><?= $error ?></p>
    <?php } ?>

    <form method="post" action="">
        <div class="input-box">
            <label>Username</label>
            <input type="text" name="username" placeholder="Type your username" required>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" placeholder="Type your password" required>
        </div>

        <!-- <div class="forgot">
            <a href="#">Forgot password?</a>
        </div> -->

        <button type="submit" class="login-btn">LOGIN</button>
    </form>

   

   
</div>

</body>
</html>
