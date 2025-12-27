<?php 
    session_start();
?>
    
<html>
    <head>
        <title>Property list Chennai</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="PGLife is a website build to help users to book there interested rooms in the city Chennai">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="pg-life-property-list-chennai-css.css"/>
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    </head>
    <body>
        
        <nav  class="a"> 
            <ul class="sidebar">
             <li onclick="hidesidebar()" style="height: auto;margin-bottom:15px;"><a href="#" aria-label="close"><span class="material-icons" style="font-size: 40px;opacity: 0.6;border-radius: 100%;" id="glow">close</span></a></li>
               
                <?php       if(!isset($_SESSION['user_id'])){         ?>
               
             <li> 
             <div class="c12">
             <a href="#popup1" class="button1" style="text-decoration: none;margin-bottom:15px;" aria-label="Signup">
                 <div style=" height: auto;display: flex;align-items: center;gap: 5px;font-size: 25px;" class="glow"> 
                
                    <span class="material-icons" id="i" style="filter: brightness(80%);" aria-hidden="true">person</span>
                        <span style="opacity : 0.5; font-size: 20px;margin-top: 0px;">
                          Signup
                        </span>
                 </div>
                 </a>
                <a href="#popup2" class="button1" style="text-decoration: none;" aria-label="login">
                 <div style="height: auto; display: flex;align-items: center;gap: 5px;font-size: 25px;text-decoration: none;"class="glow"><span class="material-icons" style="filter: brightness(80%);" id="i" aria-hidden="true">login</span>
                <span class="p1" style="text-decoration: none;margin-top: 0px;" >
                    Login
                </span>
                </div></a>
             </div>
            </li>
              <?php } else{ ?>  
                     <a href="pg-life-dashboard.php" class="button1" style="text-decoration: none;" aria-label="dashboard">
                 <div style="height: auto; display: flex;align-items: center;gap: 5px;font-size: 25px;text-decoration: none;"class="glow"><span class="material-icons" style="filter: brightness(80%);" id="i" aria-hidden="true">person</span>
                <span class="p1" style="text-decoration: none;margin-top: 0px;" >
                    Dashboard
                </span>
                </div></a>

                <a href="pg-life-apis/logout.php" class="button1" style="text-decoration: none;" aria-label="logout">
                 <div style="height: auto; display: flex;align-items: center;gap: 5px;font-size: 25px;text-decoration: none;"class="glow"><span class="material-icons" style="filter: brightness(80%);" id="i" aria-hidden="true">logout</span>
                <span class="p1" style="text-decoration: none;margin-top: 0px;" >
                    Logout
                </span>
                </div></a>
            <?php } ?>


             <div id="popup1" class="popup">
                <div class="inside">
                    <div class="div1">
                        <h3 style="width: auto;">Signup with PGLife</h3>
                           <a href="#" style="justify-content: right;width: 20%;" aria-label="close">
                              <span class="material-icons" style="font-size: 30px;opacity: 0.6;">close</span>
                           </a>
                    </div>
                    <div class="div2">
                        <form style="width: 95%;display: flex;justify-content: center;flex-direction: column;" method="POST" action="pg-life-apis/signup-pg-life.php">
                            <div class="f1">
                                <span class="material-icons" id="ii1">person</span>
                                <input name="name" type="text" placeholder="Full Name" class="input1" aria-label="Name">
                            </div>
                            <div class="f1">
                               <span class="material-icons" id="ii1">phone</span>
                                <input name="phone" type="tel" placeholder="Phone Number" class="input1" aria-label="phone number">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">email</span>
                                <input name="email" type="email" placeholder="Email" class="input1" aria-label="email">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">lock</span>
                                <input name="password" type="password" placeholder="Password" class="input1" aria-label="password">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">school</span>
                                <input name="college" type="text" placeholder="College Name" class="input1" aria-label="college">
                            </div>
                            <div class="f2">
                                I'm a 
                                <input type="radio" name="gender" value="male" style="margin-left: 20px;" aria-label="male">Male
                                <input type="radio" name="gender" value="female" style="margin-left: 20px;" aria-label="Female">Female
                            </div>
                            <div class="f3">
                                <button class="button2">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <div class="div3">
                        <p style="display: flex;justify-content: center;align-items: center;">already have an account?<a href="index.php#popup2" style="color: #88b8e9;font-weight: 700;" aria-label="login">Login</a></p>
                    </div>
                </div>
             </div>



             <div id="popup2" class="popup">
                <div class="inside2">
                     <div class="div1">
                        <h3 style="width: auto;">Login with PGLife</h3>
                           <a href="#" style="justify-content: right;width: 20%;" aria-label="close">
                              <span class="material-icons" style="font-size: 30px;opacity: 0.6;">close</span>
                           </a>
                    </div>
                    <div class="div2">
                        <form style="width: 95%;display: flex;justify-content: center;flex-direction: column;" method="POST" action="pg-life-apis/login-pg-life.php">
                          <div class="f1">
                                <span class="material-icons" id="ii1">email</span>
                                <input name="email" type="email" placeholder="Email" class="input1" aria-label="email">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">lock</span>
                                <input name="password" type="password" placeholder="Password" class="input1" aria-label="password">
                            </div>
                            <div class="f3">
                                <button class="button2">Login</button>
                            </div> 
                        </form>
                    </div>
                    <div class="div3">
                       <p style="display: flex;justify-content: space-between;align-items: center;width: 71%;"><a href="index.php#popup1" style="color: #88b8e9;font-weight: 700;padding-right: 5px; width: auto;" aria-label="signin">Signup</a>to register a new account</p>
                     </div>
                </div>
             </div>
          </ul> 
         



          <ul style="height: 100%;"> 
            <div style="display: flex;width: 100%;height: 100%;width: 100%;justify-content: left;">
            <div class="c111">
                <a href="index.php" aria-label="logo">
                    <img src="logo.png" alt="logo" class="i1"/>
                </a>
            </div>
           <div class="hideonmobile">
               <a href="#popup3" style="align-items: center;height: 100%;justify-content: center;text-decoration: none;" aria-label="Signup">
                    <div style="display: flex;align-items: center;gap: 5px;justify-content: center;" class="glow"> 
                        <span class="material-icons" id="i" aria-label="Signup">person</span>
                        <span style="opacity : 0.45; font-size: 18px;margin-top: 0px;color:black;font-weight: 700;">Signup</span>
                    </div>
                </a>
                <a href="#popup4" style="align-items: center;justify-content: center;text-decoration: none;margin-right: 25px;" aria-label="login">
                    <div style="display: flex;align-items: center;gap: 5px;" class="glow">
                        <span class="material-icons" id="i" aria-label="Login">login</span>
                        <span style="padding-right: 5px; opacity: 0.45;font-size: 18px;font-weight: 700;"> Login </span>
                    </div>
                </a>
            </div>
                <li class="menu-button" onclick=showsidebar() style="width: 50px;">
                    <a style="display: flex;align-items: end;justify-content: end;width: auto;margin-right:20px;" href="#" aria-label="menu">
                        <div id="glow" style="border-radius: 10px;font-weight: 600;">
                            <span class="material-icons" id="menu">menu</span>
                        </div>
                    </a>
                </li>
            </div>


            <div id="popup3" class="popup">
                <div class="inside">
                    <div class="div1">
                        <h3 style="width: auto;">Signup with PGLife</h3>
                           <a href="#" style="justify-content: right;width: 20%;" aria-label="close">
                              <span class="material-icons" style="font-size: 30px;opacity: 0.6;">close</span>
                           </a>
                    </div>
                    <div class="div2">
                        <form style="width: 95%;display: flex;justify-content: center;flex-direction: column;" method="POST" action="pg-life-apis/signup-pg-life.php">
                            <div class="f1">
                                <span class="material-icons" id="ii1">person</span>
                                <input name="name" type="text" placeholder="Full Name" class="input1" aria-label="Name">
                            </div>
                            <div class="f1">
                               <span class="material-icons" id="ii1">phone</span>
                                <input name="phone" type="tel" placeholder="Phone Number" class="input1" aria-label="phone number">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">email</span>
                                <input name="email" type="email" placeholder="Email" class="input1" aria-label="email">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">lock</span>
                                <input name="password" type="password" placeholder="Password" class="input1" aria-label="password">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">school</span>
                                <input name="college" type="text" placeholder="College Name" class="input1" aria-label="college">
                            </div>
                            <div class="f2">
                                I'm a 
                                <input type="radio" name="gender" value="male" style="margin-left: 20px;" aria-label="male">Male
                                <input type="radio" name="gender" value="female" style="margin-left: 20px;" aria-label="Female">Female
                            </div>
                            <div class="f3">
                                <button class="button2" type="submit">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <div class="div3">
                        <p style="display: flex;align-items: center;width: 65%;justify-content: space-between;">already have an account? <a href="index.php#popup4" style="color: #88b8e9;font-weight: 700;" aria-label="Login"> Login</a></p>
                    </div>
                </div>
             </div>



             <div id="popup4" class="popup">
                <div class="inside2">
                     <div class="div1">
                        <h3 style="width: auto;">Login with PGLife</h3>
                           <a href="#" style="justify-content: right;width: 20%;" aria-label="close">
                              <span class="material-icons" style="font-size: 30px;opacity: 0.6;">close</span>
                           </a>
                    </div>
                    <div class="div2">
                        <form style="width: 95%;display: flex;justify-content: center;flex-direction: column;" method="POST" action="pg-life-apis/login-pg-life.php">
                          <div class="f1">
                                <span class="material-icons" id="ii1">email</span>
                                <input name="email" type="email" placeholder="Email" class="input1" aria-label="email">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">lock</span>
                                <input name="password" type="password" placeholder="Password" class="input1" aria-label="password">
                            </div>
                            <div class="f3">
                                <button class="button2">Login</button>
                            </div> 
                        </form>
                    </div>
                    <div class="div3">
                        <p style="display: flex;justify-content: space-between;align-items: center;width: 71%;"><a href="index.php#popup3" style="color: #88b8e9;font-weight: 700;padding-right: 5px;" aria-label="signin">Signup</a>to register a new account</p>
                    </div>
                </div>
             </div>
           </ul></div> 
        </nav>  
        
        <div class="space"></div>

            
        <div class="b">
            <div class="di1">
                <div class="di2"><img src="filter.png" class="i5" /><span class="p3">Filter</span></div>
                <div class="di2"><img src="desc.png" class="i5" /><span class="p3">Highest Rent First</span></div>
                <div class="di2"><img src="asc.png" class="i5" /><span class="p3">Lowest Rent First</span></div>
            </div>

            <?php 
                foreach($properties as $property){
                    $property_images = glob("img/properties/" . $property['id'] . "/*");
                }
            ?>

            <div class="di3">
                <div class="img"><img src="1d4f0757fdb86d5f.jpg" class="i6" /></div>
                <div class="div4">
                  <div style=" display: flex;justify-content: space-between;">
                    <div style="height: auto;width: 100%;" class="star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="far fa-star" aria-hidden="true"></i>   
                    </div>
                    <div style="font-size: 25px;padding-right: 5px;color: red;">
                      <i class="far fa-heart" aria-hidden="true"></i>
                    </div>    
                  </div>
                  <div style="margin-top: 0px;">
                    <b>The Park Chennai</b>
                    <p style="opacity: 0.5;margin-bottom: 0px;">601, Anna Salai, near US Embassy, Tirumurthy Nagar, Nungambakkam, Chennai, Tamil Nadu 600006</p>
                    <img src="unisex.png" style="width: 40px;" />
                  </div>
                  <div class="view">
                    <p><b class="rate">Rs 5,500/-</b> per person</p>
                    <a href="pg-life-property-detail.php" style="text-decoration:none;" ><button class="button">View</button></a>
                  </div>
                </div>
            </div>


            <div class="di3">
                <div class="img"><img src="1d4f0757fdb86d5f.jpg" class="i6" /></div>
                <div class="div4">
                  <div style=" display: flex;justify-content: space-between;">
                    <div style="height: auto;width: 100%;" class="star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="far fa-star" aria-hidden="true"></i>   
                    </div>
                    <div style="font-size: 25px;padding-right: 5px;color: red;">
                      <i class="far fa-heart" aria-hidden="true"></i>
                    </div>   
                  </div>
                  <div style="margin-top: 0px;">
                    <b>Pride Hotel,Chennai</b>
                    <p style="opacity: 0.5;margin-bottom: 0px;">216, E V R Periyar Salai, Poonamalle High Road, near Sangam Cinema, Kilpauk, Chennai, Tamil Nadu 600010</p>
                    <img src="male.png" style="width: 40px;" />
                  </div>
                  <div class="view">
                    <p><b class="rate">Rs 6,000/-</b> per person</p>
                    <a href="pg-life-property-detail.php" style="text-decoration: none;"><button class="button">View</button></a>
                  </div>
                </div>
            </div>


            <div class="di3">
                <div class="img"><img src="1d4f0757fdb86d5f.jpg" class="i6" /></div>
                <div class="div4">
                  <div style=" display: flex;justify-content: space-between;">
                    <div style="height: auto;width: 100%;" class="star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="far fa-star" aria-hidden="true"></i> 
                      <i class="fa fa-star-half-alt" aria-hidden="true"></i>  
                    </div>
                    <div style="font-size: 25px;padding-right: 5px;color: red;">
                      <i class="far fa-heart" aria-hidden="true"></i>
                    </div>   
                  </div>
                  <div style="margin-top: 0px;">
                    <b>Ladies Luxury PG</b>
                    <p style="opacity: 0.5;margin-bottom: 0px;font-size: 15px;">floor, 18, 1 st, 21, Viswanatha Puram, Kodambakkam, Chennai, Tamil Nadu 600024</p>
                    <img src="female.png" style="width: 40px;" />
                  </div>
                  <div class="view">
                    <p><b class="rate">Rs 6,500/-</b> per person</p>
                    <a href="pg-life-property-detail.php" style="text-decoration: none;"><button class="button">View</button></a>
                  </div>
                </div>
            </div>


        </div>
        
        
        <footer class="z">
             <div class="z1" style="gap:15px;">
                <a href="pg-life-property-list-delhi.php?city=delhi" aria-label="delhi" style="text-decoration: none;" class="p21"><p class="p2">PG in Delhi</p></a>
                <a href="pg-life-property-list-mumbai.php?city=mumbai" aria-label="mumbai" style="text-decoration: none;" class="p21"><p class="p2">PG in Mumbai</p></a>
                <a href="pg-life-property-list-chennai.php?city=chennai" aria-label="chennai" style="text-decoration: none;" class="p21"><p class="p2">PG in Chennai</p></a>
                <a href="pg-life-property-list-hyderabad.php?city=hyderabad" aria-label="hyderabad" style="text-decoration: none;" class="p21"><p class="p2">PG in Hyderabad</p></a>
            </div>
            <div class="z2" style="gap: 10px;margin-top:10px;">
                <span class="material-icons" style="color: white;">copyright</span>
                <span class="p2" > 2020 copyright PG Life</span>
            </div>
        </footer>

        <script>
            function showsidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display='flex'
            }
            function hidesidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display='none'
            }
        </script>
    </body>
</html>
