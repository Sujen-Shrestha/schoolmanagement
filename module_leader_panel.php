<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module Leader Panel</title>

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
              <!-- Home menu  here -->
            <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">

 <!-- section 1 here -->
            <!-- Admin menu here -->
            <?php include './module_leader_files/menu.php';?>
            <!-- Admin menu end here -->

            </div>


 <!-- section 2 here -->
            <div class="col-lg-10  tmp_h">

                <!-- date and time here -->

                    <!-- date and time here -->
                    <?php include './module_leader_files/upper_navbar.php';?>
                    <!-- lower menu start here -->

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">



                 <!-- content start here -->

                 <div id="mod_l_content" style="display: none !important;"
                     class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                     <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                         <h3 class="w-50 mt-5 ml-2">Module Content</h3>

                     </div>
                     <div class="h-75 w-100  d-flex align-items-center flex-column justify-content-around ">

                         <div
                             class="w-75 h-30  bg-dark-b d-flex align-items-center flex-row justify-content-between">

                             <div class=" w-30 h-100 d-flex align-items-center flex-column justify-content-center">

                                 <h4 class="m-0 mb-2">Week 1</h4>
                                 <div
                                     class="position-relative d-flex align-items-center flex-column justify-content-center">
                                     <p class="m-0 under-line-hover position-relative cursor-p">Lecture File 1</p>
                                     <p class="m-0 under-line-hover position-relative cursor-p">Tutorial File 1</p>
                                     <p class="m-0 under-line-hover position-relative cursor-p w-max-c">File 3</p>
                                 </div>


                             </div>
                             <div class=" w-25 h-100  d-flex align-items-center flex-column justify-content-around">
                                <div>
                                    <span class="mod-l-module-content-c-box">
                                        <i class="fa fa-envelope mod-l-module-content-c" aria-hidden="true"></i>
                                    </span>
                                    <span class="mod-l-module-content-c-box">
                                        <i class="fa fa-ellipsis-h mod-l-module-content-c" aria-hidden="true"></i>
                                   </span>
                                </div>
                                 <p class="m-0">12 March, 2021</p>
                             </div>
                         </div>

                         <!-- row 2 -->

                         <div
                         class="w-75 h-30  bg-dark-b d-flex align-items-center flex-row justify-content-between">

                         <div class=" w-30 h-100 d-flex align-items-center flex-column justify-content-center">

                             <h4 class="m-0 mb-2">Week 2</h4>
                             <div
                                 class="position-relative d-flex align-items-center flex-column justify-content-center">
                                 <p class="m-0 under-line-hover position-relative cursor-p">Lecture File 1</p>
                                 <p class="m-0 under-line-hover position-relative cursor-p">Tutorial File 1</p>
                                 <p class="m-0 under-line-hover position-relative cursor-p w-max-c">File 3</p>
                             </div>


                         </div>
                         <div class=" w-25 h-100  d-flex align-items-center flex-column justify-content-around">
                            <div>
                                <span class="mod-l-module-content-c-box">
                                    <i class="fa fa-envelope mod-l-module-content-c" aria-hidden="true"></i>
                                </span>
                                <span class="mod-l-module-content-c-box">
                                    <i class="fa fa-ellipsis-h mod-l-module-content-c" aria-hidden="true"></i>
                               </span>
                            </div>
                             <p class="m-0">12 March, 2021</p>
                         </div>
                     </div>

                     </div>
                     <div class="  pl-5 pb-3 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                        <button class="input_btn w-max-c " style="margin-top: 11px;">Add Content</button>
                    </div>
                 </div>

                 <!-- content end here -->




                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/myscript.js"></script>

</body>

</html>