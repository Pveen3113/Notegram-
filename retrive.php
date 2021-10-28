<html>
<head>
    <meta charset="UTF-8">
    <style media="screen">
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url("background.jpg");
            background-size: cover;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            padding: 40px;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        .starting
        {
            margin-left: auto;
            text-align: center;
            text-transform: uppercase;
            align-items: center;
        }
        .starting p1
        {
            color: red;
            text-decoration: black;
            font-size: 50px;
            font-weight: bold;
            text-shadow: 2px 2px 5px lightgreen;
        }
        .starting img
        {
            width: 100px;
            padding-top: 10px;
            padding-left: 10px;
        }

        .Home img
        {
            width: 100px;
            padding-top: 10px;
            padding-left: 10px;
            position: absolute;
            top: 75%;
            margin-left: 705px;
            text-align: center;
            font-size: 18px;
        }
        .Home li
        {
            position: absolute;
            top: 90%;
            width: 98%;
            text-align: center;
            font-size: 18px;
            border: none;
            outline: none;
        }
        .Home li a
        {
            background-color: lightblue;
            border: none;
            border-radius: 12px;
            color: blue;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
        }
        .Home li :hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }


    </style>
    <title>Notes</title>
</head>
<body>

<div class="starting">
    <img src="fileLOGO.png">
    <p1>NOTEGRAM</p1>
</div>

<div class="box">
    <?php

    $file=$_POST['filename'];
    if(!file_exists($file))
    {
        echo ("SORRY, *_*").'<br>';
        echo("File not found");
    }
    else {
        echo "Hello , " .$file . "<br>";
        echo"<br>";
        $document = file_get_contents($file);
        $lines = explode("\n", $document);

        foreach ($lines as $newline) {
            echo $newline . '<br>';
        }
    }
    ?>
</div>

<div class="Home">
    <img src="home.png">
    <li><a href="Home.php">Home</a></li>
</div>

</body>
</html>
