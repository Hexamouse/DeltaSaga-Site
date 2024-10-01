<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ranking - Delta Project</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/RankingStyle.css">
    <link rel="shortcut icon" href="../assets/img/fav.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">x    
</head>
<body>
    <div class="background-wrapper"></div>
    <!-- Navbar -->
    <?php include './Navbar.php' ?>

    <div class="container mt-5 pt-8">
        <div class="content">
            <form method="post" class="mb-4">
                <div class="btn-group" role="group" aria-label="Ranking buttons" style="margin-top: 40px;">
                    <button type="submit" name="ranking" value="exp" class="glow-on-hover">Top 10 Exp</button>
                    <button type="submit" name="ranking" value="guild" class="glow-on-hover">Top 10 Guild</button>
                    <button type="submit" name="ranking" value="playtime" class="glow-on-hover">Top 10 Playtime</button>
                    <button type="submit" name="ranking" value="ladder" class="glow-on-hover">Top 10 Ladder</button>
                    <button type="submit" name="ranking" value="donator" class="glow-on-hover">Top 10 Donator</button>
                </div>
            </form>

            <?php
            $rankingTitles = [
                'exp' => 'RANKING 10 TOP EXP',
                'guild' => 'Ranking 10 Top Guild',
                'playtime' => 'Ranking 10 Top Playtime',
                'ladder' => 'Ranking 10 Top Ladder',
                'donator' => 'Ranking 10 Top Donator'
            ];
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ranking'])) {
                $rankingType = $_POST['ranking'];
                echo "<h1>{$rankingTitles[$rankingType]}</h1>";
            } else {
                echo "<h1>Ranking 10 Top</h1>";
            }
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ranking'])) {
                        $rankingType = $_POST['ranking'];
                        $data = [
                            'exp' => [
                                ['rank' => 1, 'name' => 'Player 1', 'score' => 10000],
                                ['rank' => 2, 'name' => 'Player 2', 'score' => 9000],
                                ['rank' => 3, 'name' => 'Player 3', 'score' => 8000],
                                ['rank' => 4, 'name' => 'Player 4', 'score' => 7000],
                                ['rank' => 5, 'name' => 'Player 5', 'score' => 6000],
                                ['rank' => 6, 'name' => 'Player 6', 'score' => 5000],
                                ['rank' => 7, 'name' => 'Player 7', 'score' => 4000],
                                ['rank' => 8, 'name' => 'Player 8', 'score' => 3000],
                                ['rank' => 9, 'name' => 'Player 9', 'score' => 2000],
                                ['rank' => 10, 'name' => 'Player 10', 'score' => 1000],
                            ],
                            'guild' => [
                                ['rank' => 1, 'name' => 'Guild 1', 'score' => 5000],
                                ['rank' => 2, 'name' => 'Guild 2', 'score' => 4500],
                                ['rank' => 3, 'name' => 'Guild 3', 'score' => 4000],
                                ['rank' => 4, 'name' => 'Guild 4', 'score' => 3500],
                                ['rank' => 5, 'name' => 'Guild 5', 'score' => 3000],
                                ['rank' => 6, 'name' => 'Guild 6', 'score' => 2500],
                                ['rank' => 7, 'name' => 'Guild 7', 'score' => 2000],
                                ['rank' => 8, 'name' => 'Guild 8', 'score' => 1500],
                                ['rank' => 9, 'name' => 'Guild 9', 'score' => 1000],
                                ['rank' => 10, 'name' => 'Guild 10', 'score' => 500],
                            ],
                        ];

                        if (array_key_exists($rankingType, $data)) {
                            foreach ($data[$rankingType] as $row) {
                                echo "<tr>
                                        <td>{$row['rank']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['score']}</td>
                                      </tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
     <?php include './Footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
