<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Nilai</title>
  <style>
    /* Import Google Font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    /* Styling Umum */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Styling untuk form */
    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    label {
      font-weight: 600;
      margin-bottom: 5px;
      display: block;
      color: #333;
    }

    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      width: 100%;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Styling untuk hasil */
    .result {
      background-color: #e7f3e7;
      padding: 15px;
      border-radius: 10px;
      margin-top: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }
  </style>
</head>
<body>

<?php
// Tabel Input Nilai
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" required><br><br>
  <label for="nim">NIM:</label>
  <input type="text" id="nim" name="nim" required><br><br>
  <label for="nilai">Nilai Pemrograman Internet (0-100):</label>
  <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
  <input type="submit" value="Submit">
</form>

<?php
// Memproses Nilai
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $nilai = $_POST["nilai"];

  // Konversi Nilai ke Grade
  if ($nilai >= 90) {
    $grade = "A";
  } elseif ($nilai >= 85) {
    $grade = "B+";
  } elseif ($nilai >= 80) {
    $grade = "B";
  } elseif ($nilai >= 75) {
    $grade = "C+";
  } elseif ($nilai >= 70) {
    $grade = "C";
  } elseif ($nilai >= 60) {
    $grade = "D";
  } else {
    $grade = "E";
  }

  // Display Hasil
  echo "<div class='result'>";
  echo "<strong>Nama:</strong> $nama<br>";
  echo "<strong>NIM:</strong> $nim<br>";
  echo "<strong>Nilai Pemrograman Internet:</strong> $nilai<br>";
  echo "<strong>Grade:</strong> $grade";
  echo "</div>";
}
?>

</body>
</html>
