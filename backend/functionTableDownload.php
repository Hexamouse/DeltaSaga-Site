            <?php
            include './config/dbConnection.php';

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT fileName AS file_name, fileSize AS file_size, file_path FROM files";
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
