<?php
require 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!');</script>";
    } elseif (strlen($password) < 6) {
        echo "<script>alert('Password minimal 6 karakter!');</script>";
    } else {
        // cek apakah email sudah ada
        $check = mysqli_prepare($config, "SELECT id FROM user WHERE email = ? LIMIT 1");
        if ($check) {
            mysqli_stmt_bind_param($check, 's', $email);
            mysqli_stmt_execute($check);
            mysqli_stmt_store_result($check);
            if (mysqli_stmt_num_rows($check) > 0) {
                mysqli_stmt_close($check);
                echo "<script>alert('Email sudah digunakan!');</script>";
            } else {
                mysqli_stmt_close($check);
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $ins = mysqli_prepare($config, "INSERT INTO user (email, password) VALUES (?, ?)");
                if ($ins) {
                    mysqli_stmt_bind_param($ins, 'ss', $email, $hashedPassword);
                    if (mysqli_stmt_execute($ins)) {
                        $newId = mysqli_insert_id($config);
                        mysqli_stmt_close($ins);
                        $_SESSION['user_id'] = $newId;
                        $_SESSION['user_email'] = $email;
                        echo "<script>alert('Registrasi berhasil! Mengarahkan ke beranda...'); window.location='index.php';</script>";
                        exit;
                    } else {
                        mysqli_stmt_close($ins);
                        echo "<script>alert('Gagal menyimpan data. Silakan coba lagi.');</script>";
                    }
                } else {
                    echo "<script>alert('Terjadi kesalahan pada server.');</script>";
                }
            }
        } else {
            echo "<script>alert('Terjadi kesalahan pada server.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: #FFEFE0;
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
            font-family: "Poetsen One", sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: #FF4F2E;
            margin-bottom: 0.2rem;
        }
        .subtitle {
            font-family: "Poppins", sans-serif;
            font-size: 1.2rem;
            color: #444;
            margin-bottom: 4rem;
        }
        .subtitle a {
            color: #FF4F2E;
            text-decoration: none;
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
        .register-btn {
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
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="gambar/Group 386.png" alt="Cake & Cupcake">
        </div>
        <div class="right">
            <div class="title poetsen-one-regular">Create Account</div>
            <div class="subtitle poppins-semibold">Sudah punya akun? <a href="login.php"><b>Login</b></a></div>

            <form id="registerForm" method="post" action="">
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-input" type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
