<?php
include "connection.php";

session_start();

if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
    exit;
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<!-- <!doctype html>
<title>Main Page</title>
<html>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 30px 50px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            display: flex;
            justify-content: end;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            position: relative;
        }

        .header h1 {
            color: white;
            font-size: 24px;
            white-space: nowrap;
            position: absolute;
            left: 0;
            animation: moveText 20s linear infinite; 
        }

        .header form {
            display: inline;
        }

        .header button {
            background-color: #3498db;
            color: white;
            border: 0;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .header button:hover {
            background-color: #2980b9;
        }

        iframe {
            width: 100%;
            height: 90vh;
            max-width: 90%;
            max-height: 90vh;
            margin-left: 70px;
            margin-top: 20px;
        }

        @keyframes moveText {
            0% {
                left: -30%;
            }
            100% {
                left: 120%; 
            }
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Rock n Roll to the World</h1>
    <form method='post' action="">
        <button type="submit" name="but_logout">Logout</button>
    </form>
</div>

<iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=A41zYeZJyOwlcb3-&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js" integrity="sha512-ml/QKfG3+Yes6TwOzQb7aCNtJF4PUyha6R3w8pSTo/VJSywl7ZreYvvtUso7fKevpsI+pYVVwnu82YO0q3V6eg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- HTML -->
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>PDF To Text Extractor</h1>
  <div class="hero">
    <button class="another" onclick="location.replace()">Extract Another PDF</button>
    <span>Select PDF</span>
    <input type="file" class="selectpdf">
    <button class="upload">Upload</button>
    <div class="afterupload">
      <span>Select Page</span>
      <select class="selectpage" onchange="afterProcess()"></select>
      <a href="" class="download">Download PDF Text</a>
      <textarea class="pdftext"></textarea>
    </div>
  </div>

  <form method='post' action="">
        <button type="submit" name="but_logout">Logout</button>
    </form>
  <!-- Project -->
  <script src="index.js"></script>
</body>
</html>

<style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
  }

  h1 {
    width: 100;
    text-align: center;
    margin-top: 20px;
    color: #333;
  }

  .hero,
  .afterupload {
    display: flex;
    align-center: center;
    justify-content: center;
    flex-direction: column;
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .hero * {
    margin-top: 10px;
  }

  .selectpdf,
  .upload {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    border: 2px dashed #008CBA;
    border-radius: 8px;
    background-color: #f8f8f8;
    color: #333;
    cursor: pointer;
  }

  .upload {
    background-color: #4caf50;
    color: #fff;
  }

  .upload:hover {
    background-color: #45a049;
  }

  .afterupload {
    display: none;
    width: 80%;
    margin-top: 20px;
  }

  textarea {
    height: 50vh;
    width: 100%;
  }

  .another {
    display: none;
    background: #008CBA;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
  }

  .another:hover {
    background-color: #0077a6;
  }

  .selectpage,
  .pdftext {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .download {
    margin-top: 10px;
    text-decoration: none;
    background-color: #333;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
    display: inline-block;
  }

  .download:hover {
    background: #555;
  }

  @media (max-width: 600px) {
    .hero,
    .afterupload {
      width: 90%;
    }
  }
</style>