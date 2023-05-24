<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selected Parameter</title>
</head>

<body>
  <h1>Selected Parameter</h1>

  <?php
  function fetchDataForParameter($selectedParameter)
  {
      // Database connection details
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "analisis_the_baru";

      // Create a new database connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check the connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Prepare and execute the SQL query
      $sql = "SELECT id_info, nama_univ, wrld_rank, lokasi FROM campus_info";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $selectedParameter);
      $stmt->execute();

      // Fetch the results
      $result = $stmt->get_result();

      // Check if any rows are returned
      if ($result->num_rows > 0) {
          $data = array();
          while ($row = $result->fetch_assoc()) {
              $data[] = $row;
          }
          return $data;
      } else {
          return false;
      }

      // Close the database connection
      $stmt->close();
      $conn->close();
  }

  if (isset($_POST['parameter'])) {
      $selectedParameter = $_POST['parameter'];
      $data = fetchDataForParameter($selectedParameter);

      if ($data) {
          echo "<h2>$selectedParameter</h2>";
          echo "<table>";
          echo "<thead>
          <tr>
          <th>id_info</th>
          <th>nama_univ</th>
          <th>wrld_rank</th>
          <th>lokasi</th>
          </tr>
          </thead>";
          echo "<tbody>";
          foreach ($data as $row) {
              echo "<tr>
              <td>{$row['id_info']}</td>
              <td>{$row['nama_univ']}</td>
              <td>{$row['wrld_rank']}</td>
              <td>{$row['lokasi']}</td>
              </tr>";
          }
          echo "</tbody>";
          echo "</table>";
      } else {
          echo "<p>No data available for the selected parameter.</p>";
      }
  } else {
      echo "<p>No parameter selected.</p>";
  }
  ?>

  <p><a href="landing.php">Go back to parameter selection</a></p>
</body>

</html>
