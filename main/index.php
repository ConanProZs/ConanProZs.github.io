<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    if ($_POST["verifybox"]){
    }else{
        echo '<script type="text/javascript">

        window.location.href = "/notchecked.php";

</script>';
   }
    ?>

<body id="body">

<h1>Links:</h1>

<h2>
    <a href="http://www.conansite.net">www.conansite.net</a>
    <br>
    <a href="http://conanprozs.ga">conanprozs.ga</a>
    
</h2>

    
    
    <script src="code.js"></script>
</body>
</html>
