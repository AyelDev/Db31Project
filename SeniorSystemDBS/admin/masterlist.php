<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            padding: 0%;
            margin: 0%;
        }
        body{
            padding: 0%;
            margin: 0%;
        }

        .main {
            width: 100%;
            height: 100vh;
            background-color: #CBF3F0;
            margin-top: 1%;
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
        }

        th,
        td {
            border: 1px solid black;
        }

        thead th {
            width: 10%;
            background-color: #adb5bd;
        }
        hr{
            border: 3px solid black;
            margin-top: 2%;
        }
        .info{
            margin-left: 16%;
            margin-top: -8%;
            width: 40%;
            height: 16%;
        }
        h3{
            margin: 5%;

        }
        .btn{
            padding: 3%;
            width: 40%;
            background-color: #FFBF69;
            margin-left: 3%;
        }
        .btn:hover{
            background-color: #ffdfb4;
        }
    </style>
    <div class="container">
        <div class="masterlistContent">
            <div class="imglogo">
                <img src="/DB31Project/SeniorSystemDBS/image/logo2.png" alt="">
            </div>
            <div class="info">Republic of the Philippinges <br>
                City of Cebu <br> <b>OFFICE OF THE MAYOR</b><br>
                <b>Elderly Friendly Management System</b><br>
                Exevutive Building, Cebu City Hall, Cebu City Tel #: 123-4567
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
                            <th></th>
                        <tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Labra</td>
                            <td>Cindy Mae</td>
                            <td></td>
                            <td>04-04-2002</td>
                            <td>142 - b Spolarium St. Duljo Fatima</td>
                            <td><button type="button" class="btn">Update</button></td>
                        </tr>
                        <tr>
                            <td>Abelgas</td>
                            <td>Ariel</td>
                            <td>Piodena</td>
                            <td>24-08-1998</td>
                            <td>37 A Andres Abellana Ext.</td>
                            <td><button type="button" class="btn">Update</button></td>
                        </tr>
                        <tr>
                            <td>Jayme</td>
                            <td>Sophia Brielle</td>
                            <td>Enolba</td>
                            <td>11-11-2012</td>
                            <td>142 - b Spolarium St. Duljo Fatima</td>
                            <td><button type="button" class="btn">Update</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>