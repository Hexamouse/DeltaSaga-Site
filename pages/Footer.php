<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Keren</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "SUSE", system-ui;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            flex: 1;
        }
        .footer {
            background-color: transparent; /* Menghapus warna latar belakang footer */
            /* backdrop-filter: blur(10px); Efek blur pada latar belakang */
            color: white; /* Warna teks footer */
            padding: 5px 0; /* Padding atas dan bawah */
            text-align: center; /* Teks rata tengah */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-top: auto; /* Tambahkan ini untuk memastikan footer tetap di bawah */
        }
        .footer a {
            color: white; /* Warna teks link */
            transition: color 0.3s; /* Tambahkan animasi transisi untuk link */
        }
        .footer a:hover {
            color: #83000B; /* Warna teks link saat hover */
        }
    </style>
</head>
<body>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="mt-3">
                <p>&copy; 2024 Design by <a href="https://www.discordapp.com/users/519799462101647361">Nyxml</a>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
