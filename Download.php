<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - Delta Project</title>
    <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/DownloadStyle.css">
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
    <h1>DOWNLOAD CLIENT</h1>
    <table>
        <thead>
            <tr>
                <th>File Name</th>
                <th>Size</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php include './backend/functionTableDownload.php' ?>
        </tbody>
    </table>

    <h1>DOWNLOAD LAUNCHER</h1>
    <table>
        <thead>
            <tr>
                <th>File Name</th>
                <th>Size</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config/dbConnection.php';

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT fileName AS file_name, fileSize AS file_size, file_path FROM launcherCDN";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td>" . $row["file_size"] . "</td>";
                    echo "<td>
                            <div class='container'>
                                <div class='center'>
                                    <a href='" . $row["file_path"] . "' class='btn'>
                                        <svg width='180px' height='60px' viewBox='0 0 180 60'>
                                            <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                            <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                        </svg>
                                        <span>Download</span>
                                    </a>
                                </div>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No files found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <h1>DOWNLOAD SDK</h1>
    <table>
        <thead>
            <tr>
                <th>File Name</th>
                <th>Size</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config/dbConnection.php';

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT fileName AS file_name, fileSize AS file_size, file_path FROM sdkCDN";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td>" . $row["file_size"] . "</td>";
                    echo "<td>
                            <div class='container'>
                                <div class='center'>
                                    <a href='" . $row["file_path"] . "' class='btn'>
                                        <svg width='180px' height='60px' viewBox='0 0 180 60' class='border'>
                                            <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                            <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                        </svg>
                                        <span>Download</span>
                                    </a>
                                </div>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No files found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <h1>PC REQUIREMENTS</h1>
    <table>
        <thead>
            <tr>
                <th>Component</th>
                <th>Minimum</th>
                <th>Recommended</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OS</td>
                <td>Windows 7 64-bit</td>
                <td>Windows 10 64-bit</td>
            </tr>
            <tr>
                <td>Processor</td>
                <td>Intel Pentium 4 1.2 GHz / AMD 1600+</td>
                <td>Intel Core i5-2500K / AMD Ryzen 5 1400</td>
            </tr>
            <tr>
                <td>Memory</td>
                <td>2 GB RAM</td>
                <td>4 GB RAM</td>
            </tr>
            <tr>
                <td>Graphics</td>
                <td>GeForce 4 Ti / ATI Radeon 9000</td>
                <td>GeForce 500 Series / Radeon HD 7850 or higher</td>
            </tr>
            <tr>
                <td>DirectX</td>
                <td>Version 9.0c / Higher</td>
                <td>Version 12</td>
            </tr>
            <tr>
                <td>Storage</td>
                <td>2 GB available space</td>
                <td>4 GB available space</td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>
    <br>
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
</body>
</html>
