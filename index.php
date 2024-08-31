<?php

session_start()
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Main Page</title>
</head>
<body>
    
   <?php include 'sidebar.php'; ?>

   <div class="main--content">
       <div class="header--wrapper">
           <div class="header--title">
               <h2>Welcome Back 
                   <?php 
                   if (isset($_SESSION['username'])) {
                       echo htmlspecialchars($_SESSION['username']);
                   } else {
                       echo 'Guest';
                   }
                   ?>
               </h2>
               <span>Dashboard</span>
              <p>Your Information Is Always Updated</p>
           </div>
           <div class="user--info">
                <?php if (isset($_SESSION['username'])): ?>
                    <!-- User is logged in -->
                    <div class="user--info-loggedin">
                        <div class="search--box">
                            <i class="ri-search-line"></i>
                            <input type="search" placeholder="Search">
                        </div>
                        <img src="image/photo_2024-05-26_20-58-05.jpg" alt="userinfo">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                <?php else: ?>
                    <!-- User is not logged in -->
                    <div class="user--info-notloggedin">
                        <a href="login.php" id="signin-link" class="btn btn-primary">
                        <i class="ri-id-card-fill"></i>                     Sign In</a>
                         
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
           


       <!-- Information Container -->
       <div class="information--container">
           <h3 class="main--title">Heng's Information</h3>
        
           <div class="container mt-5">
            <div class="row mb-4">
              <h3>Finance</h3>
                <div class="col-md-4">
                    <div class="card card-custom">
                        <div class="card-body card-body-custom">
                            <div class="icon">
                              <i class="ri-money-dollar-circle-line"></i>
                            </div>
                            <h5 class="card-title">$10,000</h5>
                            <p class="card-text">Total Payable</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom">
                        <div class="card-body card-body-custom">
                            <div class="icon">
                              <i class="ri-chat-check-line"></i>
                            </div>
                            <h5 class="card-title">$5,000</h5>
                            <p class="card-text">Total Paid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom">
                        <div class="card-body card-body-custom">
                            <div class="icon">
                              <i class="ri-book-fill"></i>
                            </div>
                            <h5 class="card-title">$300</h5>
                            <p class="card-text">Books</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Enrolled Courses</h4>
            <div class="text-end">
              <a href="#" class="text-decoration-none">See all</a>
          </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card card-custom">
                        <div class="card-body card-body-custom">
                            <div class="icon">💻</div>
                            <h5 class="card-title">Object Oriented Programming</h5>
                            <a href="https://www.youtube.com/watch?v=e4fwY9ZsxPw" target="_BLANK" class="btn btn-primary">View</a>
                    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card card-custom">
                        <div class="card-body card-body-custom">
                            <div class="icon">
                              <i class="ri-hard-drive-3-line"></i>
                            </div>
                            <h5 class="card-title">Data Structures And Algorithms</h5>
                            
                            <a href="https://www.youtube.com/watch?v=0euvEdPwQnQ"  target="_BLANK"class="btn btn-primary">View</a>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="card card-custom">
                      <div class="card-body card-body-custom">
                          <div class="icon">
                            <i class="ri-macbook-line"></i>
                          </div>
                          <h5 class="card-title">Computer Networks</h5>
                          <a href="https://www.youtube.com/watch?v=keeqnciDVOo" target="_BLANK" class="btn btn-primary">View</a>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card card-custom">
                    <div class="card-body card-body-custom">
                        <div class="icon">
                          <i class="ri-computer-line"></i>
                        </div>
                        <h5 class="card-title">System Analysis</h5>
                        <a href="https://www.youtube.com/watch?v=rK0xSNQeHnU" target="_BLANK" class="btn btn-primary">View</a>
                       
                    </div>
                </div>
            </div>
            </div>
           
        </div>
       </div>
   </div>
</body>
</html>
   
</body>
</html>
