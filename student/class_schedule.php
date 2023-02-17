
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./mystyle.css">

</head>

<body>

    <section class="container-fluid max-height c-white">

        <div class="row main-box  max-height">



            <?php include './menu.php';?>

        </div>

        <div class="col-lg-9  tmp_h">

            <?php include './upperNav.php';?>

            <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">



                <!-- Edit Profile start here -->

                <!-- content start here -->

                
                <div id="schedule" style="dissplay: none !important;"
                        class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50"> Class Schedule</h3>

                        </div>
                        <div class="h-75 w-100  d-flex align-items-center flex-column justify-content-center ">

                            <div class="w-100 h-50 d-flex align-items-center flex-row justify-content-center">
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Sunday</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Monday</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Tuesday</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Wednesday</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Thursday</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Friday</p>
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">8:00 - 9:30</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                            </div>
                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">10:00 - 11:30</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">11:30 - 12:30</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Break</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Break</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Break</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Break</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Break</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">Break</p>
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">12:30 - 2:00</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p">2:00 - 3:30</p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                                <div
                                    class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <p class="sch-p"></p>
                                </div>
                            </div>



                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <p class="mt-4 w-50">View Due Dates</p>

                        </div>
                    </div>



                <!-- content end here -->


                <!-- Edit Profile start here -->


            </div>

        </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/myscript.js"></script>

</body>

</html>