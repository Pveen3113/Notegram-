<html>
<head>
    <meta charset="UTF-8">
    <style media="screen">
        body{
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: sans-serif;
            background-image: url("background.jpg");
            background-size: cover;
        }
        .box{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 410px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.6);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        .box h2{
            margin: 0 0 30px;
            padding: 0px;
            color: #fff;
            text-align: center;
        }
        .box .{
            position: relative;
            padding: 40px;
        }

        .link li{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: linear-gradient(45deg,#87adfe,#ff77cd);
            padding: 10px 20px;
            border-radius: 5px;
            cursor:pointer;
        }

        .link li:hover{
            background: transparent;
            background-color: lightblue;
        }

        .link ul li
        {
            display: inline-block;
            position: center;
        }

        .link ul li a
        {
            text-decoration: none;
            transition: 0.5s ease;
        }

        .link ul li a:hover
        {
            background-color: lightblue;
            border-radius: 5px;
            padding: 10px 20px;
            color: #000;
        }
        .box img
        {
            width: 70px;
            margin-top: -50px;
        }
        .box .welcome-box h1
        {
            color: yellowgreen;
        }
        .welcome{

            color: #fff;
            text-transform: uppercase;
            align-items: center;
        }
        .welcome h1
        {
            margin:0 auto;
            width:900px;
            padding:20px 0;
            align-content: center;
            margin-top: auto;
            color: darkgreen;
            text-shadow: 2px 2px 5px red;
        }
        .welcome img
        {
            width: 100px;
        }
        .welcome .starting
        {
            margin-left: auto;
        }
        .welcome .starting p1
        {
            color: red;
            text-decoration: black;
            font-size: 50px;
            font-weight: bold;
            text-shadow: 2px 2px 5px lightgreen;
        }
        .welcome p
        {
            font-family: "Comic Sans MS";
            color: black;
        }



    </style>
    <title>HOME PAGE</title>
</head>
<body>
<div class="welcome">
    <div class="starting">
        <img src="fileLOGO.png">
        <p1>NOTEGRAM</p1>
    </div>
    <h1>WELCOME TO THE WEBPAGE</h1>
    <p> This website is designed for the students to add their notes </p>
</div>

<div class="box">
    <div class="welcome-box">
        <img src="students.png">
        <h1> HOLA, Students &#128516</h1>
        <h2> LEts get Started </h2>
    </div>
    <div class="link">
        <ul>
            <li><a href="Addnotes.php">Add Notes</a></li>
            <li><a href="Openfile.php">Open Notes</a></li>
        </ul>
    </div>
</div>
</body>
</html>
