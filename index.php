<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fabbricando</title>
    
    <!-- MDB UI Kit CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<!-- Section containing the login form -->
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        
        <!-- Card for Login UI -->
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            
            <!-- Left Side - Login Form -->
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <!-- Logo and Team Name -->
                <div class="text-center">
                  <img src="assets/don.jpg" style="width: 185px;" alt="logo"><br>
                  <img src="assets/other.png" style="width: 400px;" alt="logo"> 
                  <img src="assets/confi.png" style="width: 100px;" alt="logo"> 
                  <img src="assets/ITS.png" style="width: 100px;" alt="logo"> 
                  
                  <h4 class="mt-1 mb-5 pb-1">Don Bosco Cairo Team</h4>
                </div>

                <!-- Login Form -->
                <form action="pages/login.php" method="post">
                  <p>Please login to your account</p>

                  <!-- Email/Username Input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" name="email"/>
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <!-- Password Input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="user_password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <!-- Submit Button -->
                  <div class="text-center pt-1 mb-5 pb-1">
                    <input data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" 
                    type="submit" value="Log in" name="submit">
                  </div>
                </form>

              </div>
            </div>

            <!-- Right Side - Information about Hourus Arm -->
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                
                <!-- Corner Images -->
                <img src="assets/horus.png" alt="Left Image" class="corner-image left">
                <img src="assets/horus.png" alt="Right Image" class="corner-image right">
                
                <!-- Description -->
                <h3 class="mb-4">HA</h3>
                <p class="small mb-0">
                  HA (Hourus Arm) ti permette di accedere al robot tramite la rete ovunque si trovi. 
                  Puoi non solo monitorarlo, ma anche controllarlo e muoverlo liberamente a tuo piacimento.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- MDB UI Kit JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

</body>
</html>
