<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Receiver</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $selectedParameter = $_POST['parameter'];
        echo "<h4>You selected: $selectedParameter</h4>";

        // Database connection settings
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "coba2";

        // Create a database connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to select data from the respective tables based on the selected parameter
        $sql = "";

        if ($selectedParameter === "campus_info") {
            $sql = "SELECT * FROM campus_info";
            if ($sql !== "") {
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "</tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_info"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        }
        elseif ($selectedParameter === "citation") {
            $sql = "SELECT * FROM citation";
            if ($sql !== "") {
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "<th>Citation</th>";
                    echo "<th>Rank Citation</th>";
                    echo "</tr>";
    
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_ctn"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "<td>" . $row["citation"] . "</td>";
                        echo "<td>" . $row["rank_ctn"] . "</td>";
                        echo "</tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        }
        elseif ($selectedParameter === "research") {
            $sql = "SELECT * FROM research";
            if ($sql !== "") {
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "<th>Research</th>";
                    echo "<th>Rank Research</th>";
                    echo "</tr>";
    
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_rsc"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "<td>" . $row["research"] . "</td>";
                        echo "<td>" . $row["rank_rsc"] . "</td>";
                        echo "</tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        } 
        elseif ($selectedParameter === "industry_income") {
            $sql = "SELECT * FROM industry_income";
            if ($sql !== "") {
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "<th>Industry Income</th>";
                    echo "<th>Rank Industry Income</th>";
                    echo "</tr>";
    
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_inc"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "<td>" . $row["income"] . "</td>";
                        echo "<td>" . $row["rank_inc"] . "</td>";
                        echo "</tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        } 
        elseif ($selectedParameter === "international_outlook") {
            $sql = "SELECT * FROM international_outlook";
            if ($sql !== "") {
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "<th>International Outlook</th>";
                    echo "<th>Rank International Outlokk</th>";
                    echo "</tr>";
    
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_int_outlook"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "<td>" . $row["int_outlook"] . "</td>";
                        echo "<td>" . $row["rank_int_outlook"] . "</td>";
                        echo "</tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        } 
        elseif ($selectedParameter === "teaching") {
            $sql = "SELECT * FROM teaching";
            if ($sql !== "") {
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "<th>Teaching</th>";
                    echo "<th>Rank Teaching</th>";
                    echo "</tr>";
    
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_teaching"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "<td>" . $row["teaching"] . "</td>";
                        echo "<td>" . $row["rank_teaching"] . "</td>";
                        echo "</tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        } 
        elseif ($selectedParameter === "ova") {
            $sql = "SELECT * FROM overall";
            if ($sql !== "") {//
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>World Rank</th>";
                    echo "<th>Nama Universitas</th>";
                    echo "<th>Lokasi</th>";
                    echo "<th>Citation</th>";
                    echo "<th>Rank Citation</th>";
                    echo "<th>Teaching</th>";
                    echo "<th>Rank Teaching</th>";
                    echo "<th>International Outlook</th>";
                    echo "<th>Rank International Outlokk</th>";
                    echo "<th>Industry Income</th>";
                    echo "<th>Rank Industry Income</th>";
                    echo "<th>Research</th>";
                    echo "<th>Rank Research</th>";
                    echo "<th>Citation</th>";
                    echo "<th>Rank Citation</th>";
                    echo "</tr>";
    
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_ova"] . "</td>";
                        echo "<td>" . $row["wrld_rank"] . "</td>";
                        echo "<td>" . $row["nama_univ"] . "</td>";
                        echo "<td>" . $row["lokasi"] . "</td>";
                        echo "<td>" . $row["citation"] . "</td>";
                        echo "<td>" . $row["rank_ctn"] . "</td>";
                        echo "<td>" . $row["teaching"] . "</td>";
                        echo "<td>" . $row["rank_teaching"] . "</td>";
                        echo "<td>" . $row["int_outlook"] . "</td>";
                        echo "<td>" . $row["rank_int_outlook"] . "</td>";
                        echo "<td>" . $row["income"] . "</td>";
                        echo "<td>" . $row["rank_inc"] . "</td>";
                        echo "<td>" . $row["research"] . "</td>";
                        echo "<td>" . $row["rank_rsc"] . "</td>";
                        echo "<td>" . $row["citation"] . "</td>";
                        echo "<td>" . $row["rank_ctn"] . "</td>";
                        echo "</tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No data available.";
                }
            }
        } 
    }

    // Execute the SQL query
    // if ($sql !== "") {
    //     $result = $conn->query($sql);

    //     if ($result->num_rows > 0) {
    //         echo "<table>";
    //         echo "<tr>";
    //         echo "<th>ID</th>";
    //         echo "<th>World Rank</th>";
    //         echo "<th>Nama Universitas</th>";
    //         echo "<th>Lokasi</th>";
    //         echo "</tr>";

    //         // Output data of each row
    //         while ($row = $result->fetch_assoc()) {
    //             echo "<tr>";
    //             echo "<td>" . $row["id_info"] . "</td>";
    //             echo "<td>" . $row["wrld_rank"] . "</td>";
    //             echo "<td>" . $row["nama_univ"] . "</td>";
    //             echo "<td>" . $row["lokasi"] . "</td>";
    //             echo "</tr>";
    //         }

    //         echo "</table>";
    //     } else {
    //         echo "No data available.";
    //     }
    // }

    // Close the database connection
    $conn->close();

    ?>

    <form action="" method="POST">
        <select name="parameter">
            <option value="research">Research</option>
            <option value="citation">Citation</option>
            <option value="teaching">Teaching</option>
            <option value="industry_income">Industry Income</option>
            <option value="international_outlook">International Outlook</option>
            <option value="ova">Overall Score</option>
            <option value="campus_info">Campus Info</option>
        </select>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>