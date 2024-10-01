<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Keren</title>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Chakra Petch', sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #343a40;
            padding: 10px 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .navbar-brand img {
            margin: 5px;
            max-width: 100%;
            height: auto;
            margin-left: 50px;
        }
        .navbar-nav {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .nav-item {
            position: relative;
            margin-right: 20px;
            font-family: 'Chakra Petch', sans-serif;
            font-size: 16px;
            font-weight: 600;
        }
        .nav-item:last-child {
            margin-right: 0;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #83000B;
        }
        .nav-link.no-underline::after {
            display: none;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: transparent !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.8);
            border-radius: 5px; 
            top: 100%;
            left: 0;
            min-width: 100px;
            z-index: 1;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            opacity: 0;
            visibility: hidden;
            list-style: none;
        }
        .dropdown-menu a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }
        .dropdown-menu a:hover {
            backdrop-filter: blur(10px);
            text-decoration: none;
        }
        .nav-item:hover .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
        }
        .btn-get-started {
            border: 1px solid white;
            color: white;
            padding: 5px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-get-started:hover {
            background-color: #83000B;
            border-color: #83000B;
        }
        .glow-on-hover {
            width: 150px;
            height: 40px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
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
            border-radius: 10px;
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
            border-radius: 10px;
        }

        @keyframes glowing {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }jjjj
            0% { background-position: 0 0; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" style="backdrop-filter: blur(10px);">
        <a class="navbar-brand" href="../Index">
            <img src="../assets/img/DELTA PROJECT.png" width="100" alt="Logo">
            <img src="../assets/img/collab.png" width="200">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" style="margin-right: 8rem;">
            <li class="nav-item">
                    <a class="nav-link" href="../guide.php">Guide</a>
                    <div class="dropdown-menu">
                        <a href="../guide1.php">Guide 1</a>
                        <a href="../guide2.php">Guide 2</a>
                    </div>
                <li class="nav-item active">
                    <a class="nav-link" href="../Download">Download <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/Ranking">Ranking</a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Status">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Staff">Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link no-underline" href="../Community">Community</a>
                    <div class="dropdown-menu">
                        <a href="../discord.php">Discord</a>
                        <a href="https://www.facebook.com/lostsagaindoofficial2?locale=id_ID" target="_blank">Facebook</a>
                    </div>
                </li>
            </ul>
            <a class="nav-link btn btn-get-started glow-on-hover text-white" style="margin-right: 50px" href="../auth/Login">Get Started</a>
        </div>
    </nav>
</body>
</html>
