<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PG Life</title>
        <link rel="stylesheet" href="pg-life-home-page-css.css"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="PGLife is a website build to help users to book there interested rooms">
        <meta charset="UTF-8">
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
                        <form style="width: 95%;display: flex;justify-content: center;flex-direction: column;"  method="POST" action="pg-life-apis/signup-pg-life.php">
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
                        <form style="width: 95%;display: flex;justify-content: center;flex-direction: column;"  id="loginForm">
                          <div class="f1">
                                <span class="material-icons" id="ii1">email</span>
                                <input name="email" type="email" placeholder="Email" class="input1" aria-label="email">
                            </div>
                            <div class="f1">
                                <span class="material-icons" id="ii1">lock</span>
                                <input name="password" type="password" placeholder="Password" class="input1" aria-label="password">
                            </div>
                            <div class="f3">
                                <button class="button2" onclick = yashu()>Login</button>
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
            <div style="position: absolute; gap: 0px;box-shadow: 10000px;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                <p class="label">Happiness per Square Foot</p>
                <form method="GET" action="pg-life-property-detail" class="form">
                <input class="input" type="search" placeholder=" Enter your City to search for PGs" style="background-color:blue;width:100%;" />
                <button class="button"><span>Search</span></button>
                </form>
            </div>
            <img src="bg.png" class="i4" alt="background img"/>
            
        </div>


        <div class="c">
            <div class="c31">
                <b class="m1">Major Cites</b>
            </div>
            <div class="c32">
                <div class="place col-3-md"><a href="pg-life-property-list-delhi.php?city=delhi" aria-label="delhi" ><img src="delhi.png" alt="delhi" class="i5" /></a></div>
                <div class="place col-3-md"><a href="pg-life-property-list-mumbai.php?city=mumbai" aria-label="mumbai"><img src="mumbai.png" alt="mumbai" class="i5" /></a></div>
                <div class="place col-3-md"><a href="pg-life-property-list-chennai.php?city=chennai" aria-label="chennai"><img src="chennai.png" alt="chennai" class="i5" /></a></div>
                <div class="place col-3-md"><a href="pg-life-property-list-hyderabad.php?city=hyderabad" aria-label="hyderabad"><img src="hyderabad.png" alt="hyderabad" class="i5" /></a></div>
            </div>
        </div>


        <footer class="z">
             <div class="z1" style="gap:15px;">
                <a href="pg-life-property-list-delhi.php?city=delhi" style="text-decoration: none;"><p class="p2">PG in Delhi</p></a>
                <a href="pg-life-property-list-mumbai.php?city=mumbai" style="text-decoration: none;"><p class="p2">PG in Mumbai</p></a>
                <a href="pg-life-property-list-chennai.php?city=chennai" style="text-decoration: none;"><p class="p2">PG in Chennai</p></a>
                <a href="pg-life-property-list-hyderabad.php?city=hyderabad" style="text-decoration: none;"><p class="p2">PG in Hyderabad</p></a>
            </div>
            <div class="z2" style="gap: 10px;margin-top:10px;">
                <span class="material-icons" style="color: white;">copyright</span>
                <span class="p2" > 2020 copyright PG Life</span>
            </div>
        </footer>
    
        <script type="text/javascript" src="pg-life-apis\script.js" ></script>
    </body>
</html>
