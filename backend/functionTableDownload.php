            <?php
            // Koneksi ke database
            include './config/dbConnection.php';

            // Cek koneksi
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query untuk mengambil data file
            $sql = "SELECT fileName AS file_name, fileSize AS file_size, file_path FROM files";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data dari setiap baris
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