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
            top: 57%;
            left: 51%;
            transform: translate(-50%,-50%);
            width: 400px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.6);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        .box .input-file{
            position: relative;
        }
        .box .input-file input{
            width: 100%;
            padding: 10px 0px;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: none;
            outline: none;
            background: transparent;
            border-bottom: 1px solid #fff;
        }
        .box .input-file label{
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0px;
            font-size: 16px;
            color: #fff;
            transition: .5s;
        }
        .box .input-file input:focus ~ label,
        .box .input-file input:valid ~ label{
            top: -18px;
            left: 0px;
            color: #03a9f4;
            font-size: 12px;
        }
        .welcome{
            text-transform: uppercase;
            align-items: center;
        }
        .welcome img
        {
            width: 100px;
        }
        .welcome .starting
        {
            margin-left: auto;
            text-align: center;
        }
        .welcome .starting p1
        {
            color: red;
            text-decoration: black;
            font-size: 50px;
            font-weight: bold;
            text-shadow: 2px 2px 5px lightgreen;
        }
        .box h2
        {
            color: lightgreen;
            text-shadow:2px 2px 5px lightblue;
            text-transform: uppercase;
        }
        .Home img
        {
            width: 100px;
            padding-top: 10px;
            padding-left: 10px;
        }
        .link li{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: linear-gradient(45deg,#87adfe,#ff77cd);
            padding: 10px 20px;
            border-radius: 10px;
            cursor:pointer;
        }

        .link li:hover{
            background: transparent;
            background-color: lightblue;
        }

        .link  li
        {
            display: block;
            width: 40px;
            margin-left: 20px;
            position: center;
        }

        .link  li a
        {
            text-decoration: none;
            transition: 0.5s ease;
        }

        .link  li a:hover
        {
            background-color: lightblue;
            border-radius: 5px;
            padding: 10px 20px;
            color: #000;
        }
        .box .input-file [type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: linear-gradient(45deg,#87adfe,#ff77cd);
            padding: 10px 20px;
            border-radius: 5px;
            cursor:pointer;
        }
        .box .input-file [type="submit"]:hover{
            background: transparent;
            background-color: lightblue;
        }
    </style>
    <Title>Open File</Title>
</head>
<div class="Home">
    <div class="link">
        <img src="home.png">
        <li><a href="Home.php">Home</a></li>
    </div>
</div>
<div class="welcome">
    <div class="starting">
        <img src="fileLOGO.png">
        <p1>NOTEGRAM</p1>
    </div>
</div>


<body>
<div class="box">
    <h2>Enter your username here</h2>
    <form method="post" action="retrive.php">
        <div class="input-file">
            <input type="text" name="filename"  autocomplete="off" required>
            <label for="">Username_matrik number</label>
            <input type="submit" value="Login">
        </div>
    </form>
</div>

</body>
</html>
