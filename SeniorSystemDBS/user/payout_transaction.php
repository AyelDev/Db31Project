<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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
        .title {
            font-family: impact, fantasy;
            text-align: left;
            margin-top: 3%;
            font-size: 30px;
            padding: 30px;
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
        }
        tr{
            background-color: #FFFFFF;
        }
        
    </style>
    <div class="container">
        <div class="main" style="width:100%; height:100vh;" >
                <div class="title">Transaction History</div>
                    <hr>  
            <div class="tableb">
            
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                        <tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Labra</td>
                            <td>Cindy Mae</td>
                            <td></td>
                            
                        </tr>
                        <tr>
                            <td>Abelgas</td>
                            <td>Ariel</td>
                            <td>Piodena</td>
                            
                        </tr>
                        <tr>
                            <td>Jayme</td>
                            <td>Sophia Brielle</td>
                            <td>Enolba</td>
                       
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>