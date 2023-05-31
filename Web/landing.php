<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Landing</title>
  <style>
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid yellow;
        }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TO come</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid pt-3 text-center">
    <h1>Selamat datang!</h1>
  </div>
  <!-- <div class="border"> -->
  <div class="container mt-5">
    <h3>Silahkan pilih parameter yang akan digunakan!</h3>

    <div class="mt-5 dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        Klik untuk melihat parameter yang tersedia
      </button>
      <ul class="dropdown-menu">
        <form action="landing.php" method="POST">
          <select name="parameter" class="dropdown-item">
            <option value="research" name="research">Research</option>
            <option value="citation" name="citation">Citation</option>
            <option value="teaching" name="teaching">Teaching</option>
            <option value="industry_income" name="industry_income">Industry Income</option>
            <option value="international_outlook" name="international_outlook">International Outlook</option>
            <option value="ova" name="ova">Overall Score</option>
            <option value="campus_info" name="campus_info">Campus Info</option>
          </select>
          <input type="submit" value="Submit" name="submit">
        </form>
      </ul>
    </div>


    <?php
    if (isset($_POST['submit'])) {
      $selectedParameter = $_POST['parameter'];
      echo "<h4>You selected: $selectedParameter</h4>";
    }
    ?>
  </div>
  <!-- </div> -->
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
        $conn->close();
    }
    ?>

</body>

</html>