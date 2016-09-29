<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    img {
      cursor: pointer;
    }
  </style>
  <script>
    window.onload = function() {
      var code = document.getElementById('code');

      code.onclick = function() {
        this.src='code.php?tm=' + Math.random();
      };
    }
  </script>
</head>
<body>
  <img id="code" src="code.php" alt="验证码">
</body>
</html>