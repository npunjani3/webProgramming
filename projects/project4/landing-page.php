<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="header">
            <a href="./landing-page.php" class="logo-black"><img class="logo-black" src="./assets/logos/mp_black_small.png" alt="logo"></a>
            <div id="reg-btn">
                <button onclick="location.href='./login-signup.php';">Sign Up / Login</button>
            </div>
        </div>
        <div class="banner" id="">
            <div class="content"><h1>Welcome to Meta Plot</h1></div>
        </div>
        <div id="message">
            <p>Buying/Selling real estate online has a new seemless platform.</p>
        </div>
        <h2 id="sample-title">Sample Properties</h2>
        <div id="display-homes">
            <div class="row" id="r1">
                <div class="example" id="ex-1">
                    <div class="property-card2">
                        <div class="pc-row">
                            <div class="pc-col1"><img src="./assets/pics/pexels-pixabay-314937.jpg"></div>
                            <div class="pc-col2">
                                <div class="property-content">
                                    <h3>Frodo's House</h3>
                                    <h4>Bag End at the end of Bagshot Row of Hobbiton</h4>
                                    <div class="property-details">
                                        <p>$ 1000000</p>
                                        <p>House - 2bed/2ba</p>
                                        <p>No Parking</p>
                                    </div>
                                    <div class="property-btn"><a href="#">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="example" id="ex-2">
                    <div class="home-img"></div>
                    <div class="home-content"></div>
                    <div class="property-card2">
                        <div class="pc-row">
                            <div class="pc-col1"><img src="./assets/pics/pexels-pixabay-314937.jpg"></div>
                            <div class="pc-col2">
                                <div class="property-content">
                                    <h3>Frodo's House</h3>
                                    <h4>Bag End at the end of Bagshot Row of Hobbiton</h4>
                                    <div class="property-details">
                                        <p>$ 1000000</p>
                                        <p>House - 2bed/2ba</p>
                                        <p>No Parking</p>
                                    </div>
                                    <div class="property-btn"><a href="#">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="r2">
                <div class="example" id="ex-3">
                    <div class="home-img"></div>
                    <div class="home-content"></div>
                    <div class="property-card2">
                        <div class="pc-row">
                            <div class="pc-col1"><img src="./assets/pics/pexels-pixabay-314937.jpg"></div>
                            <div class="pc-col2">
                                <div class="property-content">
                                    <h3>Frodo's House</h3>
                                    <h4>Bag End at the end of Bagshot Row of Hobbiton</h4>
                                    <div class="property-details">
                                        <p>$ 1000000</p>
                                        <p>House - 2bed/2ba</p>
                                        <p>No Parking</p>
                                    </div>
                                    <div class="property-btn"><a href="#">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="example" id="ex-4">
                    <div class="home-img"></div>
                    <div class="home-content"></div>
                    <div class="property-card2">
                        <div class="pc-row">
                            <div class="pc-col1"><img src="./assets/pics/pexels-pixabay-314937.jpg"></div>
                            <div class="pc-col2">
                                <div class="property-content">
                                    <h3>Frodo's House</h3>
                                    <h4>Bag End at the end of Bagshot Row of Hobbiton</h4>
                                    <div class="property-details">
                                        <p>$ 1000000</p>
                                        <p>House - 2bed/2ba</p>
                                        <p>No Parking</p>
                                    </div>
                                    <div class="property-btn"><a href="#">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-background">
            <div id="why-content">
                <h2>Why buy/sell with us?</h2>
                <ul>
                    <li>Thousands of options to choose from<img src="./assets/icons/checked.png" alt="checked-icon"></li>
                    <li>Reason 2<img src="./assets/icons/checked.png" alt="checked-icon"></li>
                    <li>Reason 3<img src="./assets/icons/checked.png" alt="checked-icon"></li>
                    <li>Reason 4<img src="./assets/icons/checked.png" alt="checked-icon"></li>
                    <li>Reason 5<img src="./assets/icons/checked.png" alt="checked-icon"></li>
                    <li>Reason 6<img src="./assets/icons/checked.png" alt="checked-icon"></li>
                </ul>
            </div>
        </div>
        <div class="slideshow-background">
            <div class="slideshow-container">
                <h2>A deeper look into your new home</h2>
                <div class="mySlides fade">
                    <img src="./assets/pics/pexels-binyamin-mellish-106399.jpg" alt="ex-home1">
                    <div class="text">Home 1</div>
                </div>
                <div class="mySlides fade">
                    <img src="./assets/pics/pexels-jovydas-pinkevicius-2462015.jpg" alt="ex-home2">
                    <div class="text">Home 2</div>
                </div>
                <div class="mySlides fade">
                    <img src="./assets/pics/pexels-life-of-pix-2459.jpg" alt="ex-home3">
                    <div class="text">Home 3</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <div class="signup-form-bkg">
            <div class="sf-lc">
                <form>
                    <h1>Sign Up Now</h1>
                    <div class="form-container">
                        <div class="acct-type">
                            <p>Account Type</p>
                            <input type="radio" id="buyer" name="acct-type" value="Buyer">
                            <label for="buyer">Buyer</label>
                            <input type="radio" id="seller" name="acct-type" value="Seller">
                            <label for="seller">Seller</label>
                        </div>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" id="email" required>
    
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
                        <label for="psw-repeat"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                        <hr>
    
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                        <div class="clear">
                            <button id="regbtn-land" type="submit" class="registerbtn">Register</button>
                            <hr>
                            <button id="login-land" type="submit" class="registerbtn">Go To Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sf-rc">
                <div class="signup-message">
                    <h1>COME</h1>
                    <h1>JOIN</h1>
                    <h1>META</h1>
                    <h1>PLOT!</h1>
                </div>                    
            </div>
        </div>
    </body>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
        }
    </script>
    <footer></footer>
</html>