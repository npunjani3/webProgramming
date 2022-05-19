<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="side-nav">
            <div class="logo"><img src="./assets/logos/mp_logo_fff.png" alt="logo"></div>
            <div class="side-menu">
                <ul>
                    <li><span><a href="#"><img src="./assets/icons/open-menu.png" alt="dashboard-icon">Dashboard</a></span></li>
                    <li><a href="#"><img src="./assets/icons/home.png" alt="home-icon">Properties</a></li>
                    <li><a href="#"><img src="./assets/icons/bidding.png" alt="bidding-icon">Bids</a></li>
                    <li><a href="#"><img src="./assets/icons/piggy-bank.png" alt="piggy-bank-icon">Income</a></li>
                    <li><a href="#"><img src="./assets/icons/email.png" alt="email-icon">Inbox</a></li>
                    <li><a href="#"><img src="./assets/icons/market.png" alt="buyer-icon">Buyer Portal</a></li>
                    <li><a href="#"><img src="./assets/icons/setting.png" alt="setting-icon">Account Settings</a></li>
                    <li><a href="#"><img src="./assets/icons/exit.png" alt="exit-icon">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main-container">
            <div class="no-property-card">
                <!--<h1>No Properities added please add property</h1>-->
                <div class="pc-row">
                    <!--<div class="pc-col1"></div>-->
                    <div class="pc-col2"> 
                        <div class="no-property">
                            <h3>No Properities added please add property</h3>
                            <div class="add-btn"><a href="#frm-box">Add</a></div>
                            <div id="frm-box">
                                <form>
                                    <h1>Add Property</h1>
                                    <a href="#" class="frm-close"> &times;</a>
                                    <div class="frm-container">
                                        <label for="name">Property Name</label>
                                        <input name="name" type="text">
                                        <label for="street">Street</label>
                                        <input name="street" type="text">
                                        <label for="zip">Zip</label>
                                        <input name="zip" type="number">
                                        <label for="city">City</label>
                                        <input name="city" type="text">
                                        <label for="state">State</label>
                                        <input name="state" type="text">
                                        <label for="price">Price</label>
                                        <input name="price" type="number">
                                        <label for="rooms">Rooms</label>
                                        <input name="rooms" type="number">
                                        <label for="bathrooms">Bathrooms</label>
                                        <input name="bathrooms" type="number">
                                        <label for="parking">Parking</label>
                                        <input name="parking" type="text">
                                        <label for="size">Size</label>
                                        <input name="size" type="number">
                                        <label for="type">Type</label>
                                        <input name="type" type="text">
                                        <label for="year">Year</label>
                                        <input name="year" type="number">
                                        <label for="pics">Pics</label>
                                        <input name="pics" type="text">
                                        <button class="pf-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>

    </footer>
</html>