<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container{
            width: 100%;
            height: 100%;
            display: flex;
            overflow-x: hidden;
        }
        .main{
            width: 100%;
            height: 100%;
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
        }
        .title{
            width: 40%;
            height: 15%;
            position: absolute;
            text-align: center;
            margin-left: 30%;
        }
        .formtitle{
            width: 70%;
            height: 5%;
            background-color: #ced4da;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -20%;
        }
        .fillup{
            width: 70%;
            height: 60%;
            background-color: #ffffff;
            position: absolute;
            margin-top: 14.5%;
            margin-left: 15%;
        }
        .formemergency{
            width: 100%;
            height: 8%;
            background-color: #ced4da;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -13%;
        }
    </style>

    <div class="container">
        <div class="main">
            <div class="formtitle">PERSONAL DETIALS</div>
        </div>
        <div class="title"><h2>Elderly Friendly Management System</h2><br><h1>REGISTRATION FORM</h1></div>
        <div class="fillup">
            <form action="">
                <div class="forms" style="justify-content: space-evenly;display: flex; align-items: center;">
                    <label class="form-label">Last name</label>
                    <input type="lastname" class="form-control" id="lastname" style="width: 20%;">
                    <label class="form-label">First name</label>
                    <input type="firstname" class="form-control" id="firstname" style="width: 20%;">
                    <label class="form-label">Middle name</label>
                    <input type="middlename" class="form-control" id="middlename" style="width: 20%;">
                </div>
                <div class="forms">
                    <label class="form-label">Address</label>
                    <input type="address" class="form-control border" id="address" style="width: 70%;">
                </div>
                <div class="forms" style="justify-content: space-evenly;display: flex; align-items: center;">
                    <label class="form-label">Province</label>
                    <input type="province" class="form-control border" id="province" style="width: 30%;">
                    <label class="form-label">City</label>
                    <input type="city" class="form-control border" id="city" style="width: 30%;">
                    <label class="form-label">ZIP Code</label>
                    <input type="zipcode" class="form-control border" id="zipcode" style="width: 30%;">
                    <label class="form-label">Barangay</label>
                    <input type="barangay" class="form-control border" id="barangay" style="width: 30%;">
                </div>
                <div class="forms">
                    <label class="form-label">Phone Number:</label>
                    <input type="email" class="form-control" id="inputUsername" style="width: 20%;">
                </div>
                <div class="forms" style="justify-content: space-evenly;display: flex; align-items: center; margin-top:5%;">
                    <label class="form-label">Name</label>
                    <input type="name" class="form-control border" id="name" style="width: 40%;">
                    <label class="form-label">Relationship</label>
                    <input type="relationship" class="form-control border" id="relationship" style="width: 40%;">
                </div>
                <button type="submit" class="btn" style="background-color: #FFBF69; margin-left: 40%; margin-top:1%; width:20%;">Sign-in</button>
            </form>
            <div class="formemergency">EMERGENCY CONTACT #</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>