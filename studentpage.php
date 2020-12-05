<!DOCTYPE html>
<html lang="en">
<head>

     <title>Student Result Management System</title>

     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

<script src='js/l.js'></script>
   
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">𝓢𝓡𝓜𝓢</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#myprofile" class="nav-link smoothScroll">my profile</a>
                    </li>

                    
                    <li class="nav-item">
                        <a href="#viewcourse" class="nav-link smoothScroll">course detail</a>
                    </li>
                    <li class="nav-item">
                        <a href="#viewresult" class="nav-link smoothScroll">view result</a>
                    </li>
                    <li class="nav-item">
                        <a href="#changepassword" class="nav-link smoothScroll">change password</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll btn-lg btn btn-danger" title="log out"><i class='fas fa-sign-out-alt'></i>Log out</a>
                        
                    </li>
                     

                </ul>

                
            </div>

        </div>
    </nav>


     
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="myprofile">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5">
                                  <div class="text-white" data-aos="fade-up" data-aos-delay="500">
  <?php
  include('myprofile.php');
  ?>
</div>
                                    
                                                </div>
                                   
                              </div>
                         </div>

                    </dv>
               </div>
     </section>


  <section class="hero d-flex flex-column justify-content-center align-items-center" id="viewcourse">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5">
                                  <div class="text-white" data-aos="fade-up" data-aos-delay="500">
  <?php
  include('coursedetailforstudent.php');
  ?>
</div>
                                    
                                                </div>
                                   
                              </div>
                         </div>

                    </dv>
               </div>
     </section>


    <section class="hero d-flex flex-column justify-content-center align-items-center" id="viewresult">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 ">
                                  <div class="text-white" data-aos="fade-up" data-aos-delay="500">
  <?php
  include('resultview.php');
  ?>
</div>
                                    
                                                </div>
                                   
                              </div>
                         </div>

                    </dv>
               </div>
     </section>
<section class="hero d-flex flex-column justify-content-center align-items-center" id="changepassword">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 ">
                                  <div class="text-white" data-aos="fade-up" data-aos-delay="500">
  <?php
  include('studentchangepassword.php');
  ?>
</div>
                                    
                                                </div>
                                   
                              </div>
                         </div>

                    </dv>
               </div>
     </section>
               
            </form>
          </div>

          

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>