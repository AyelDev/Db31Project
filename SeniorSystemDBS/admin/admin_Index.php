<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="/DB31Project/SeniorSystemDBS/js/admin_script.js"></script>
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            color: #132a13;
        }
        body{
            background-color: #2EC4B6;
        }
        .main{
            background: url(wallpaper.webp);
            height: 100vh;
            margin-left: 0;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .sidenavbar {
            height: 100%;
            width: 0;
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #7DDCD3;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align:center;
        }
        .sidenavbar a{
            color: #2EC4B6;
            line-height: 60px;
            font-size: 20px;
            text-align: center;
            display: block;
            float: inline-start;
            overflow-x: hidden;
            margin-top: 0%;
        }
        .sidenavbar a:hover {
            color: #E5F9F8;
        }
        .sidenavbar .profile{
            position: relative;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            box-shadow: 5px 5px 12px #FFBF69,
            -5px -5px 12px #FFBF69;
        }
        .sidenavbar .closebtn {
            position: absolute;
            display: block;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 48px;
            color: #FFAF43;
        }
        h2 {
            font-size: 40px;
            margin-top: 7%;
            text-align: center;
        }
        h5 {
            padding: 0px;
            margin-top: 3%;
            font-family: monospace;
            text-align: center;
            letter-spacing: 1ch;
            word-spacing: -1ch;
        }
        h2,h2 i, h5, .sidenavbar a{
            color: #FF9F1C;
        }
        @media screen and (max-width: 400px) {
        .sidenavbar a {
            text-align: center;
            float: none;
        }
        }
        @media screen and (max-height: 450px) {
        .sidenavbar {padding-top: 15px;}
        .sidenavbar a {font-size: 18px;}
        }
        @media screen and (max-width: 768px) {
        .sidenavbar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }
        .about .main .fname{
            position: absolute;
            text-align: center;
            color: #faedcd;
            margin-top: 5em;
            letter-spacing: 0.2rem;
        }
        .about .main .greet{
            color: #faedcd;
            position: absolute;
            text-align: center;
            margin-top: 17em;
            word-spacing: 5px;
        }
        .container p{
            padding: 0.5rem;
            font-weight: bold;
            letter-spacing: 0.1rem;
            text-align: center;
            overflow: hidden;
            color: #faedcd;
        }
        .container p span.cursor{
            display: inline-block;
            color: #7DDCD3;
            margin-left: 0.1rem;
            width: 3px;
            animation: blink 1s infinite;
            margin-top: 20em;
        }
        .container p span.cursor.typing{
            animation: none;
        }
        @keyframes blink {
            0%{
                background-color: #faedcd;
            }
            49%{
                background-color: #faedcd;
            }
            50%{
                background-color: transparent;
            }
            99%{
                background-color: transparent;
            }
            100%{
                background-color: #faedcd;
            }
        }
        .masterlist{
            width: 100%;
            height:100%;
            position: absolute;
        }
        .masterlistContent{
            width: 100%;
            height: 100%;
            background-color: #CBF3F0;
        }
        img {
            max-width: 100%;
            width: 10%;
            background-color: black;
            border-radius: 50%;
            margin-top: 1%;
            margin-left: 5%;
        }

        .title {
            font-family: impact, fantasy;
            text-align: center;
            margin-top: 2%;
            font-size: 30px;
        }
        .tableb{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table {
            border-collapse: collapse;
            margin-top: 3%;
            width: 70%;
            height: 100%;
        }
        tbody{

        }
        th,
        td {
            border: 1px solid black;
        }

        thead th {
            width: 10%;
        }
        hr{
            border: 3px solid black;
            margin-top: 1%;
        }
        .info{
            margin-left: 18%;
            margin-top: -9%;
            width: 40%;
            height: 16%;
        }
        .deceasedlistContent{
            width: 100%;
            height: 100%;
            background-color: #2EC4B6;
            position: absolute;
            margin-top: 50%;
        }
    </style>
    <div id="navbar" class="sidenavbar">
        <img class="profile" src="/DB31Project/SeniorSystemDBS/image/profile.jpg" alt="">
        <h2>ADMIN</h2>
        <br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeBtn()">&times;</a>
        <a href="#">Home</a>
  		<a href="#masterlist">Master List</a>
        <a href="#deceasedlist">Deceased List</a>
        <a href="#payout">Payout</a>
        <a href="#signout">Sign out</a>
    </div>
    <span style="position:absolute;margin:20px;color:#FFAF43;font-size:30px;cursor:pointer" onclick="openBtn()">&#9776;</span>

    <section class="about" id="about">
        <div class="main">
            
        </div>
    </section>

    <section class="masterlist" id="masterlist">
        <div class="masterlistContent">
        <div class="imglogo">
                        <img src="/DB31Project/SeniorSystemDBS/image/logo2.png" alt="">
                    </div>
                    <div class="info">Republic of the Philippinges <br>
                        City of Cebu <br> <b>OFFICE OF THE MAYOR</b><br>
                        <b>Elderly Friendly Management System</b><br>
                        Exevutive Building, Cebu City Hall, Cebu City   Tel #: 123-4567
                    </div>
                    <hr>
                    <div class="title">Master List of Senior Citizen <br> Cebu City</div>
            <div class="tableb">
            
                <table>
                    <thead>
                        <tr>
                            <th>Last name</th>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                        <tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Labra</td>
                            <td>Cindy Mae</td>
                            <td></td>
                            <td>04-04-2002</td>
                            <td>142 - b Spolarium St. Duljo Fatima</td>
                        </tr>
                        <tr>
                            <td>Abelgas</td>
                            <td>Ariel</td>
                            <td>Piodena</td>
                            <td>24-08-1998</td>
                            <td>37 A Andres Abellana Ext.</td>
                        </tr>
                        <tr>
                            <td>Jayme</td>
                            <td>Sophia Brielle</td>
                            <td>Enolba</td>
                            <td>11-11-2012</td>
                            <td>142 - b Spolarium St. Duljo Fatima</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <section class="deceasedlist" id="deceasedlist">
        <div class="deceasedlistContent">
            deceasedlist
        </div>
    </section>
</body>
</html>  
