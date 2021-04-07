<?php
function randStr($n = 60){
	if ($n > 60){
          $n = 60;
        }
        if ($n < 8){
          $n = 8;
        }
        $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$?';
        $randomString = '';

        for ($i = 0; $i < $n; $i++){
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
        }

        return strval($randomString);
}

if (isset($_POST['len'])){
  $num = intval($_POST['len']);
}
else {
  $num = 30;
}

$pass = randStr($num);

?>

<html>
  <head>
    <title>Steve's Password-Better-Maker</title>
  </head>
  <style>
  th {
    border: 1px solid white;
    font-size: 150%;
    margin: auto;
    text-align: center;
    background-color: #222222;
  }
  td {
    border: 1px solid white;
    margin: auto;
    text-align: center;
    padding: 5px;
  }
  hr { 
    display: inline-block;
    width: 50%;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
    border-color: gray;
  }
  </style>

  <body style="color: white; background-color: #111111; font-family: sans-serif; font-size: 150%; text-align: center;">
    <h1 style="display: inline-block; padding: 0px 10px; border: 1px solid white;">Steve's Password-Better-Maker</h1>
    <span style="margin: auto; text-align: center;">
    <input type="text" value="<?=$pass; ?>" id="pass" style="border: none; background-color: #111111; color: white; text-align: center; font-size: 150%; width: 100%; overflow: scroll; cursor: default; margin: auto;" disabled>
    </span>
    <br>
    <button onclick="copyPass()">Copy text</button>
    <br><br>
    <form method="post">
      Length: <input type="number" name="len" maxlength="2" value="<?=$num; ?>" style="width: 2.5em; background-color: #111111; color: skyblue; font-size: 120%;" max="60" min="8">
      <br>
      <input type="submit" value="Generate!" style="font-size: 250%; margin-top: 20px;">
    </form>
    <a href="https://github.com/fingerguns83/password-better-maker" style="color: white;" target="_blank">View code on Github</a>
  </body>
  <script>
  function copyPass() {
  var copyText = document.getElementById("pass");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
  }
  </script>
</html>
