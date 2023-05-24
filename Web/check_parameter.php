<!DOCTYPE html>
<html>
<head>
    <title>Data from Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data from Database</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Universitas</th>
            <th>Peringkat</th>
            <th>lokasi Universitas</th>
        </tr>
<!-- DIHALAMAN INI UNTUK MEMUNCULKAN HASIL DARI PILIHAN PARAMETER. PROSES 
DILAKUKAN DI FILE: proses.php( •̀ ω •́ )y oke bagas? oke. -bagas-->
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "analisis_the_baru";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve data from the database
        // 
        //apabila parameter yang dipilih OVERALL maka akan menggunakan sql yg ini OVERALL
        $sql = "SELECT id_ova, nama_univ, wrld_rank, lokasi, score_ova, research, rank_rsc, citation, rank_ctn, income, rank_inc, int_outlook, rank_int_outlook, teaching, rank_teaching FROM overall";

        //apabila parameter yang dipilih CAMPUS_INFO maka akan menggunakan sql yg ini CAMPUS_INFO
        $sql = "SELECT id_info, nama_univ, wrld_rank, lokasi FROM campus_info";

        //apabila parameter yang dipilih CITATIONS maka akan menggunakan sql yg ini CITATIONS
        $sql = "SELECT id_ctn, nama_univ, wrld_rank, lokasi, citation, rank_ctn FROM citation";

        //apabila parameter yang dipilih INDUSTRY_INCOME maka akan menggunakan sql yg ini INDUSTRY_INCOME
        $sql = "SELECT id_info, nama_univ, wrld_rank, lokasi, income, rank_inc FROM industry_income";
        
        //apabila parameter yang dipilih INTERNATIONAL_OUTLOOK maka akan menggunakan sql yg ini INTERNATIOAL_OUTLOOK
        $sql = "SELECT id_info, nama_univ, wrld_rank, lokasi, int_outlook, rank_int_outlook FROM international_outlook";

        //apabila parameter yang dipilih RESEARCH maka akan menggunakan sql yg ini RESEARCH
        $sql = "SELECT id_info, nama_univ, wrld_rank, lokasi, research, rank_rsc FROM research";

        //apabila parameter yang dipilih TEACHING maka akan menggunakan sql yg ini TEACHING
        $sql = "SELECT id_info, nama_univ, wrld_rank, lokasi, teaching, rank_teaching FROM teaching";

        // Execute the query
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Loop through each row of data
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_info"] . "</td>";
                echo "<td>" . $row["nama_univ"] . "</td>";
                echo "<td>" . $row["wrld_rank"] . "</td>";
                echo "<td>" . $row["lokasi"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>
</html>
