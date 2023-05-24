<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Landing</title>
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
  <div class="border">
    <div class="container mt-5">
      <h3>Silahkan pilih parameter yang akan digunakan!</h3> -->
<!-- buat teks yang sama panjangnya dengan dropdown yang dibawah seperti figma -->

<!-- <div class="mt-5 dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Klik untuk melihat parameter yang tersedia
        </button>
        <ul class="dropdown-menu">
          <form action="#" method="POST">
            <li><a class="dropdown-item" href="#" name="research">Research</a></li>
            <li><a class="dropdown-item" href="#" name="citation">Citation</a></li>
            <li><a class="dropdown-item" href="#" name="teaching">Teaching</a></li>
            <li><a class="dropdown-item" href="#" name="industry_income">Industry Income</a></li>
            <li><a class="dropdown-item" href="#" name="international_outlook">International Outlook</a></li>
            <li><a class="dropdown-item" href="#" name="ova">Overall Score</a></li>
            <li><a class="dropdown-item" href="#" name="campus_info">Campus Info</a></li>
        
        </ul>
        <input type="submit" value="submit" name="submit">
        </form>

      </div>
    </div>
  </div>
</body>
</html> -->





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
  <div class="border">
    <div class="container mt-5">
      <h3>Silahkan pilih parameter yang akan digunakan!</h3>

      <div class="mt-5 dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Klik untuk melihat parameter yang tersedia
        </button>
        <ul class="dropdown-menu">
          <form action="terima.php" method="POST">
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

        <!-- <form action="http://localhost/Proyek2baru/Web/proses.php" method="POST">
            <select name="parameter" class="dropdown-item">
              <option value="research" name="research">Research</option>
              <option value="citation" name="citation">Citation</option>
              <option value="teaching" name="teaching">Teaching</option>
              <option value="industry_income" name="industry_income">Industry Income</option>
              <option value="international_outlook" name="international_outlook">International Outlook</option>
              <option value="ova" name="ova">Overall Score</option>
              <option value="campus_info" name="campus_info">Campus Info</option>
            </select>
        </ul>
        <input type="submit" value="Submit" name="submit">
        </form> -->
      </div>

      <?php
      if (isset($_POST['submit'])) {
        $selectedParameter = $_POST['parameter'];
        echo "<h4>You selected: $selectedParameter</h4>";
      }
      ?>
    </div>
  </div>
</body>

</html>