<html>
    <head>
        <title>Simple Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">

        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    <section id="header">
				<a href="#"><img src="LOGO.png" class="logo" alt="" style="width:90px;height:80px;margin-top: -10px;"></a>
		
				<div>
					<ul id="navbar">
						<li><a class="active" href="index.html">Home</a></li>
						<!-- <li><a href="about.html">About Us</a></li> -->
						<li><a href="price.html">Price List</a></li>
						<!-- <li><a href="contact.html">Contact</a></li> -->
						<li><a href="user_page.php" class="pickup" style="color:red;"><b>Logout</b></a></li>
					</ul>
				</div>
			</section>
    </body>
    <body 
  
    class="container" style="background-image: url(img.jpg);">
    <div class="container">
    <a href="biodata.php"><button type="button" class="btn btn-primary btn-lg" >History</button></a>
    </div>
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
      

        <form name="myForm" action="./entryBiodata.Controller.php" method="POST" style="background-color:rgb(190, 215, 229); ">
            <div class="col-sm-15"> 
                <h1 class="border-bottom center pb-4 mb-4" style="text-align: center;">Schedule A Pickup</h1>
            </div> 

                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <label class="col-sm-3" for="firstName">Enter Name:</label>
                      <div class="col-sm-7">
                          <input type="text" name="fname" class="form-control" id="firstName" placeholder="First Name" required >
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <label class="col-sm-3 " for="lastName">Enter Time:</label>
                      <div class="col-sm-7">
                          <input type="text" name="lname" class="form-control" id="lastName" placeholder="Enter Time" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <label class="col-sm-3 " for="inputEmail">Enter Email:</label>
                      <div class="col-sm-7">
                          <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <label class="col-sm-3 " for="phoneNumber">Mobile Number:</label>
                      <div class="col-sm-7">
                          <input type="number" name="phone" class="form-control" id="phoneNumber" placeholder="Phone Number" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <label class="col-sm-3">Date:</label>
                      <div class="col-sm-3">
                        <input type="date"  name="date" required>
                        </div>
                          
                  </div>
                
                
                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <label class="col-sm-3 ">Place:</label>
                      <div class="col-sm-7 ">
                          <label class="mb-0 mr-3">
                              <input type="radio" class="mr-1" name="gender" value="Home"> Home
                          </label>
                          <label class="mb-0 mr-3">
                              <input type="radio" class="mr-1" name="gender" value="Office"> Office
                          </label>
                      </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="address">Address:</label>
                    <div class="col-sm-7">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" required>
                    </div>
                </div>

                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label class="col-sm-3 " >Scrap Type:</label>
                    <div class="col-sm-6">
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="exampleInlineCheckbox1" name="hobby[]" value="Paper">
                        <label class="custom-control-label" for="exampleInlineCheckbox1">Paper</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="exampleInlineCheckbox2" name="hobby[]" value="Plastic" >
                        <label class="custom-control-label" for="exampleInlineCheckbox2">Plastic</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="exampleInlineCheckbox3" name="hobby[]" value="Metal" >
                        <label class="custom-control-label" for="exampleInlineCheckbox3">Metal</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="exampleInlineCheckbox4" name="hobby[]" value="Electronic" >
                        <label class="custom-control-label" for="exampleInlineCheckbox4">Electronic</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="exampleInlineCheckbox5" name="hobby[]" value="Tyre" >
                        <label class="custom-control-label" for="exampleInlineCheckbox5">Tyre</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="exampleInlineCheckbox6" name="hobby[]" value="Other" >
                        <label class="custom-control-label" for="exampleInlineCheckbox6">Other</label>
                      </div>
                    </div>
                </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-1"></div>
                      <div class="col-sm-8 ">
                          <input type="submit" class="btn btn-dark" value="Submit">
                        </div>
                        <div class="col-sm-3">
                          <input type="reset" class="btn btn-dark" value="Reset">
                      </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                      
                    </div>
                </div>
    
        </form>
        
          </div>
          </div>

          
    </body>

</html>

