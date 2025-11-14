<?php
session_start();
$error = '';

require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($email === '' || $password === '') {
        $error = 'Email dan password harus diisi.';
    } else {
        $stmt = mysqli_prepare($config, "SELECT id, email, password FROM user WHERE email = ? LIMIT 1");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            if (mysqli_stmt_num_rows($stmt) === 1) {
                mysqli_stmt_bind_result($stmt, $id, $db_email, $db_password);
                mysqli_stmt_fetch($stmt);

                // verifikasi password
                if (password_verify($password, $db_password)) {
                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $id;
                    $_SESSION['user_email'] = $db_email;
                    header('Location: index.php');
                    exit;
                } else {
                    $error = 'Email atau password salah.';
                }
            } else {
                $error = 'Email atau password salah.';
            }
            mysqli_stmt_close($stmt);
        } else {
            $error = 'Terjadi kesalahan pada server.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: #FFEFE0;
        }
        .poetsen-one-regular {
            font-family: "Poetsen One", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }
        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .left {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .left img {
            width: 900px;
        }
        .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 40px;
        }
        .title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #FF4F2E;
            margin-bottom: 0.2rem;
        }
        .subtitle {
            font-size: 1.2rem;
            color: #444;
            margin-bottom: 4rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-label {
            font-size: 0.95rem;
            color: #888;
            margin-bottom: 0.3rem;
            display: block;
        }
        .form-input {
            width: 80%;
            height: 25px;
            padding: 0.8rem;
            border: 2px solid #FF4F2E;
            border-radius: 15px;
            font-size: 1rem;
            outline: none;
        }
        .form-input:focus {
            border-color: #FF4F2E;
        }
        .forgot {
            color: #FF4F2E;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            cursor: pointer;
        }
        .login-btn {
            background-color: #FF5542;
            color: #ffffff;
            font-size: 1.1rem;
            border-radius: 15px;
            padding: 0.5rem 2rem;
            cursor: pointer;
            margin-bottom: 1.5rem;
            border: none;
            width: 22%;
            height: 40px;
        }
        .error {
            color: #b00020;
            background: #ffdada;
            border: 1px solid #ff9a9a;
            padding: 10px 12px;
            margin-bottom: 12px;
            border-radius: 8px;
            max-width: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="gambar/Group 386.png" alt="Cake & Cupcake">
        </div>
        <div class="right">
            <div class="title poetsen-one-regular">Welcome Back!</div>
            <div class="subtitle poppins-semibold">Don't Have an account? <a href="register.php"><b>Sign Up</b></a></div>
            <?php if (!empty($error)) : ?>
                <div class="error"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-input" type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="forgot poppins-semibold">Forget Your Password ?</div>
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>