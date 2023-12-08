<!doctype html>
<html lang="en">

<head>
    <!-- color pallete -->
    <!-- https://coolors.co/palette/ff9f1c-ffbf69-ffffff-cbf3f0-2ec4b6 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <link rel="stylesheet" href="/DB31Project/SeniorSystemDBS/css/style.css">
</head>

<body>

    <div class="container-sm">
        <div class="row">
            <div class="col h-100" style="margin-top:6%">
                <!-- Login Card -->
                <div class="card rounded-5 text-bg-light" style="padding:4%">
                    <!-- image and form -->
                    <div class="container px-4">
                        <div class="row gx-5 align-items-center">
                            <div class="col">
                                <div class="p-3">
                                    <img class="imageFront" src="/DB31Project/SeniorSystemDBS/image/seniorFrontLogin.png" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <h1 class="text-center">Sign-in</h1>
                                </div>
                                <!-- ////// forms for text //////// -->
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="email" class="form-control border border-warning" id="inputUsername">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control border border-warning" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input border border-warning" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                    </div>
                                    <button type="submit" class="btn" style="background-color: #2EC4B6">Sign-in</button>
                                </form>
                                <!-- //// -->
                            </div>
                        </div>
                    </div>
                    <!-- //// -->

                    <p class="card-text"><small>&copy; DB31 Project By: Ariel Abelgas, Cindy Mae Labra, Allyza Indiola</small></p>
                </div>

            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>