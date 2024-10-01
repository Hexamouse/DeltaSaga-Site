<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - Delta Project</title>
    <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/StaffStyle.css">
    <style>
        .staff-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .staff-member {
            width: 20rem;
            color: white;
            text-align: center;
            margin: 50px;
            padding: 50px;
            background-color: transparent;
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .staff-photo {
            top: 10px;
            width: 150px;
            border-radius: 20%;
            margin-bottom: 1rem;
        }

        h2 {
            color: white;
            text-align: center;
            font-family: 'Chakra Petch', sans-serif;
            font-weight: bold;
            font-size: 3rem !important;
        }

        h3 {
            font-family: 'Chakra Petch', sans-serif;
        }

        p {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<div class="background-wrapper">
    <div class="background"></div>
</div>

<canvas id="animationCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></canvas>

<div class="navbar">
    <?php require_once("pages/Navbar.php"); ?>
</div>

<div class="content">
    <br>
    <br>
    <h2 id="animatedTitle"></h2>
    <div class="staff-list">
        <div class="staff-member">
            <img src="assets/img/devpict2.png" class="staff-photo">
            <h3>Nyxml</h3>
            <p>Owners</p>
        </div>
        <div class="staff-member">
            <img src="assets/img/devpict.png" class="staff-photo">
            <h3>Mysticalx</h3>
            <p>Developer</p>
        </div>
        <div class="staff-member">
            <img src="assets/img/ragna_chibi_2.png" class="staff-photo">
            <h3>Aena</h3>
            <p>Game Master</p>
        </div>
    </div>
    <br>
    <br>
    <div class="footer">
        <?php require_once("pages/Footer.php"); ?>
    </div>
</div>

<script src="js/PhoneBlocked.js"></script>
<script src="js/thiefThemeBlocked.js"></script>
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
        opacity: Math.random() * 0.5 + 0.5
    });
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    points.forEach(point => {
        point.x += point.vx;
        point.y += point.vy;

        if (point.x < 0 || point.x > canvas.width) point.vx *= -1;
        if (point.y < 0 || point.y > canvas.height) point.vy *= -1;

        ctx.fillStyle = `rgba(255, 255, 255, ${point.opacity})`;
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
                ctx.strokeStyle = `rgba(255, 255, 255, ${(1 - distance / 100) * points[i].opacity})`;
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
</script>

<script>
const title = document.getElementById('animatedTitle');
const text = "Developer Delta Project";
title.innerText = '';
let index = 0;
let cursorVisible = true;

function type() {
    if (index < text.length) {
        title.innerText += text.charAt(index);
        index++;
        setTimeout(type, 100);
    } else {
        setInterval(() => {
            title.innerText = title.innerText.endsWith('|') ? text : text + '|';
        }, 500);
    }
}

type();
</script>
</body>
</html>
