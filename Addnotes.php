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
        .box .input-box{
            position: relative;
        }
        .box .{
            position: relative;
            padding: 40px;
        }
        .box .input-box input{
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
        .box .input-box label{
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0px;
            font-size: 16px;
            color: #fff;
            transition: .5s;
        }
        .box .input-box input:focus ~ label,
        .box .input-box input:valid ~ label{
            top: -18px;
            left: 0px;
            color: #03a9f4;
            font-size: 12px;
        }
        .box input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: linear-gradient(45deg,#87adfe,#ff77cd);
            padding: 10px 20px;
            border-radius: 5px;
            cursor:pointer;
        }
        .box input[type="submit"]:hover{
            background-color: #3067b9;
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
            width: 100px;
            padding-left: 40px;
            padding-top: 50px;
        }
        .box .note-area textarea
        {
            background-color: lightblue;
        }

    </style>
    <title>Add Notes</title>
</head>
<body>
<div class="box">
    <h2>ENTER YOUR NOTES HERE</h2>
    <form action="write.php">
        <div class="input-box">
            <input type="text" name="username"  autocomplete="off" required>
            <label for="">Username_matrik number</label>
        </div>
        <div class="input-box">
            <input type="text" name="topic"  autocomplete="off" required>
            <label for="">Topic</label>
        </div>
        <div class ="note-area">
            <br>
            <textarea name="Notes" class="input-box" placeholder="Notes here"  required></textarea><br>
            <input type="submit" value="Save">
        </div>
    </form>
    <img src="notes.jpg">
    <img src="home.jpg">
    <div class="link">
        <ul>
            <li><a href="Openfile.php">View Notes</a></li>
            <li><a href="Home.php">Home</a></li>
        </ul>
    </div>
</div>
</body>
</html>
