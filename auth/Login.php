<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Delta Project</title>
    <link rel="shortcut icon" href="../assets/img/fav.png" type="image/x-icon">
</head>
<style>
            html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            width: 100vw;
            height: 100vh;
            box-sizing: border-box;
        }
        .background-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -2;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; /* Kembali ke 100% */
            height: 100%;
            background-image: url('../assets/img/20180308_halloween_1920x1200.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            filter: blur(1px) brightness(0.5) grayscale(80%); /* Tambahkan grayscale(100%) untuk hitam putih */
            z-index: -1;
            transform: scale(1.1); /* Tambahkan ini untuk zoom */
        }
        .content {
            position: relative;
            z-index: 1;
            overflow-y: auto; /* Ubah dari scroll ke auto */
            -ms-overflow-style: none;
            scrollbar-width: none;
            display: flex; /* Tambahkan ini */
            justify-content: center; /* Tambahkan ini */
            align-items: center; /* Tambahkan ini */
        }
        .content::-webkit-scrollbar {
            display: none;
        }
        .login-form {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 300px; /* Ubah dari persentase ke piksel */
            max-width: 90%; /* Tambahkan ini untuk responsif */
            position: relative; /* Tambahkan ini */
        }
        .login-form::before {
            content: "";
            position: absolute;
            top: 0;
            left: -50px; /* Sesuaikan posisi gambar */
            width: 50px; /* Sesuaikan lebar gambar */
            background-image: url('../assets/img/sidebar-image.png'); /* Ganti dengan path gambar yang sesuai */
            background-size: cover;
            background-repeat: no-repeat;
            border-top-left-radius: 5px; /* Sesuaikan dengan border-radius form */
            border-bottom-left-radius: 5px; /* Sesuaikan dengan border-radius form */
        }
        .login-form input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }
        h1 {
            color: #ffffff;
            padding-top: 8rem;
            font-family: "SUSE", system-ui;
            font-weight: 800;
            text-align: center;
            margin-bottom: 10rem;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-top: 5rem; /* Tambahkan margin-top yang lebih besar untuk menurunkan posisi h1 */
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            color: white;
            margin-right: 150px;
            flex-direction: row; /* Pastikan ini ada */
            white-space: nowrap; /* Pastikan ini ada */
            font-size: 16px;
        }
        .remember-me input[type="checkbox"] {
            display: none; /* Sembunyikan checkbox asli */
        }
        .remember-me input[type="checkbox"] + label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            user-select: none;
        }
        .remember-me input[type="checkbox"] + label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            border: 2px solid #ccc;
            border-radius: 3px;
            background: #fff;
        }
        .remember-me input[type="checkbox"]:checked + label::before {
            background: #83000B;
            border-color: #83000B;
        }
        .remember-me input[type="checkbox"]:checked + label::after {
            content: "";
            position: absolute;
            left: 6px;
            top: 50%;
            transform: translateY(-60%) rotate(50deg);
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
        }
        .glow-on-hover {
            width: 100%; /* Sesuaikan dengan lebar tombol login */
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 5px;
            margin-top: -5px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 5px;
        }

        .glow-on-hover:active {
            color: #000;
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 5px;
        }

        @keyframes glowing {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }
            100% { background-position: 0 0; }
        }
    </style>
<body>

<div class="background-wrapper">
    <div class="background"></div>
</div>

<canvas id="animationCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: calc(100% - 50px); z-index: 1;"></canvas>

<?php include '../pages/Navbar.php' ?>

<h1>Login</h1>

<div class="content">
    <div class="login-form">
        <form action="login_process.php" method="POST" id="loginForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="remember-me">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="glow-on-hover">Login</button>
        </form>
        <p style="text-align: center; color: white; margin-top: 10px;">
            <a href="register.php" style="color: #ffffff; text-decoration: underline;">Create Account</a>
        </p>
    </div>
</div>

<!-- Footer -->
 <?php include '../pages/Footer.php' ?>


<script src="../js/PhoneBlocked.js"></script>
<script src="../js/thiefThemeBlocked.js"></script>
<script>
const canvas = document.getElementById('animationCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const points = [];
const numPoints = 120;

for (let i = 0; i < numPoints; i++) {
    points.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        vx: (Math.random() - 0.5) * 2,
        vy: (Math.random() - 0.5) * 2,
        opacity: Math.random() * 0.5 + 0.5 // Tambahkan opacity random antara 0.5 dan 1
    });
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    points.forEach(point => {
        point.x += point.vx;
        point.y += point.vy;

        if (point.x < 0 || point.x > canvas.width) point.vx *= -1;
        if (point.y < 0 || point.y > canvas.height) point.vy *= -1;

        ctx.fillStyle = `rgba(255, 255, 255, ${point.opacity})`; // Gunakan opacity
        ctx.beginPath();
        ctx.arc(point.x, point.y, 2, 0, Math.PI * 2);
        ctx.fill();
    });

    for (let i = 0; i < numPoints; i++) {
        for (let j = i + 1; j < numPoints; j++) {
            const dx = points[i].x - points[j].x;
            const dy = points[i].y - points[j].y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < 100) {
                ctx.strokeStyle = `rgba(255, 255, 255, ${(1 - distance / 100) * points[i].opacity})`; // Gunakan opacity berdasarkan jarak
                ctx.beginPath();
                ctx.moveTo(points[i].x, points[i].y);
                ctx.lineTo(points[j].x, points[j].y);
                ctx.stroke();
            }
        }
    }

    requestAnimationFrame(draw);
}

draw();

document.getElementById('loginForm').addEventListener('submit', function() {
    if (document.getElementById('rememberMe').checked) {
        localStorage.setItem('username', document.querySelector('input[name="username"]').value);
        localStorage.setItem('password', document.querySelector('input[name="password"]').value);
    } else {
        localStorage.removeItem('username');
        localStorage.removeItem('password');
    }
});

window.onload = function() {
    if (localStorage.getItem('username') && localStorage.getItem('password')) {
        document.querySelector('input[name="username"]').value = localStorage.getItem('username');
        document.querySelector('input[name="password"]').value = localStorage.getItem('password');
        document.getElementById('rememberMe').checked = true;
    }
};
</script>
</body>
</html>