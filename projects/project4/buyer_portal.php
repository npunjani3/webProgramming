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
                    <li><a href="#"><img src="./assets/icons/bidding.png" alt="bidding-icon">Place Offer</a></li>
                    <li><a href="#"><img src="./assets/icons/email.png" alt="email-icon">Inbox</a></li>
                    <li><a href="#"><img src="./assets/icons/market.png" alt="buyer-icon">Seller Portal</a></li>
                    <li><a href="#"><img src="./assets/icons/setting.png" alt="setting-icon">Account Settings</a></li>
                    <li><a href="#"><img src="./assets/icons/exit.png" alt="exit-icon">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main-container">
            <div class="property-list">

                <div id="buyer-topnav">
                        <form > 
                            <input type="search" id="buyer-search" name="q" placeholder="Search by Zip Code or City...">
                            <button id="buyersearch-button">Search</button>
                        </form>
                </div>
                <div class="property-card">
                    <div class="pc-row">
                        <div class="pc-col1"><img src="./assets/pics/pexels-pixabay-314937.jpg"></div>
                        <div class="pc-col2">
                            <div class="property-content">
                                <h3>Frodo's House</h3>
                                <h4>367 Butcher Rd, Atlanta, GA 30338</h4>
                                <div class="property-details">
                                    <p>$ 1,000,000</p>
                                    <p>House - 2bed/2ba</p>
                                    <p>No Parking</p>
                                    <p>Size: 5,412 </p>
                                    <p>Built in  1994</p>
                                </div>
                                <div class="property-btn">
                                    <div class="wrapper"><a href="#modalbox">See More</a></div>
                                    <div id="modalbox" class="modal">
                                        <div class="modalcontent">
                                            <div class="features"><h1>Frodo's House</h1><br>
                                            <h2>Unique features: </h2>
                                                <ul>
                                                  <li>Spacious garden</li>
                                                  <li>Thatched roof</li>
                                                  <li>Calm neighborhood</li>
                                                </ul> <br> 
                                            <p>Bring your dreams to reality!<br>
                                                Incredible opportunity for buyer seeking the perfect house. This south facing and sun-drenched house featuring 3 bedrooms and 3 bathrooms. 
                                            </p> </div><br>
                                            <div class="pc-col1"><img src="./assets/pics/room2.jpg"></div>
                                            <div class="pc-col1"><img src="./assets/pics/kitchen1.jpg"></div>
                                            <a href="#" class="modalclose"> &times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="pc-row">
                        <div class="pc-col1"><img src="./assets/pics/house8.jpg"></div>
                        <div class="pc-col2">
                            <div class="property-content">
                                <h3>The Laurels</h3>
                                <h4>2675 woodlake, Atlanta, GA 30338</h4>
                                <div class="property-details">
                                    <p>$ 975,000</p>
                                    <p>House - 4bed/5ba</p>
                                    <p>3-Car Garage</p>
                                    <p>Size: 8,712 </p>
                                    <p>Built in  1995</p>
                                </div>
                                <div class="property-btn">
                                    <div class="wrapper"><a href="#modalbox">See More</a></div>
                                    <div id="modalbox" class="modal">
                                        <div class="modalcontent">
                                            <div class="features">
                                            <h1>The Laurels House</h1><br>
                                            <h2>Unique features: </h2>
                                                <ul>
                                                  <li>Spacious garden</li>
                                                  <li>Thatched roof</li>
                                                  <li>Calm neighborhood</li>
                                                </ul> <br> 
                                            <p>Bring your dreams to reality!<br>
                                                Incredible opportunity for buyer seeking the perfect house. This south facing and sun-drenched house featuring 3 bedrooms and 3 bathrooms. 
                                            </p> </div><br>
                                            <div class="pc-col1"><img src="./assets/pics/room2.jpg"></div>
                                            <div class="pc-col1"><img src="./assets/pics/kitchen1.jpg"></div>
                                            <a href="#" class="modalclose"> &times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="pc-row">
                        <div class="pc-col1"><img src="./assets/pics/h10.jpg"></div>
                        <div class="pc-col2">
                            <div class="property-content">
                                <h3>The Jubilant Village</h3>
                                <h4>2645 John Hollaway Cir, Atalta, GA 30341</h4>
                                <div class="property-details">
                                    <p>$ 425,000</p>
                                    <p>House - 3bed/2ba</p>
                                    <p>2-Car Garage</p>
                                    <p>Size: 5,270 sqft </p>
                                    <p>Built in 1975 </p>
                                </div>
                                <div class="property-btn">
                                    <div class="wrapper"><a href="#modalbox">See More</a></div>
                                    <div id="modalbox" class="modal">
                                        <div class="modalcontent">
                                            <div class="features">
                                            <h1>The Jubiliant Village</h1><br>
                                            <h2>Unique features: </h2>
                                                <ul>
                                                  <li>Spacious garden</li>
                                                  <li>Thatched roof</li>
                                                  <li>Calm neighborhood</li>
                                                </ul> <br> 
                                            <p>Bring your dreams to reality!<br>
                                                Incredible opportunity for buyer seeking the perfect house. This south facing and sun-drenched house featuring 3 bedrooms and 3 bathrooms. 
                                            </p> </div><br>
                                            <div class="pc-col1"><img src="./assets/pics/room2.jpg"></div>
                                            <div class="pc-col1"><img src="./assets/pics/kitchen1.jpg"></div>
                                            <a href="#" class="modalclose"> &times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="pc-row">
                        <div class="pc-col1"><img src="./assets/pics/h9.jpg"></div>
                        <div class="pc-col2">
                            <div class="property-content">
                                <h3>The Nest</h3>
                                <h4>726 Grand Tour Cir, Atlanta, 30341</h4>
                                <div class="property-details">
                                    <p>$725,000</p>
                                    <p>House - 3bed/3ba</p>
                                    <p>No Parking</p>
                                    <p>Size: 2,245 sqft</p>
                                    <p>Built in 2005 </p>
                                </div>
                                <div class="property-btn">
                                    <div class="wrapper"></div>
                                    <div id="modalbox" class="modal">
                                        <div class="modalcontent">
                                            <div class="features"><h1>The Nest</h1><br>
                                            <h2>Unique features: </h2>
                                                <ul>
                                                  <li>Spacious garden</li>
                                                  <li>Thatched roof</li>
                                                  <li>Calm neighborhood</li>
                                                </ul> <br> 
                                            <p>Bring your dreams to reality!<br>
                                                Incredible opportunity for buyer seeking the perfect house. This south facing and sun-drenched house featuring 3 bedrooms and 3 bathrooms. 
                                            </p> </div><br>
                                            <div class="pc-col1"><img src="./assets/pics/room2.jpg"></div>
                                            <div class="pc-col1"><img src="./assets/pics/kitchen1.jpg"></div>
                                            <a href="#" class="modalclose"> &times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="pc-row">
                        <div class="pc-col1"><img src="./assets/pics/h6.jpg"></div>
                        <div class="pc-col2">
                            <div class="property-content">
                                <h3>The View</h3>
                                <h4>1894 Woodlake, Atlanta, 30344</h4>
                                <div class="property-details">
                                    <p>$ 675,000</p>
                                    <p>House - 4bed/3ba</p>
                                    <p>2-Car Garage </p>
                                    <p>Size: 2,632 sqft </p>
                                    <p>Built in 1987 </p>
                                    
                                </div>
                                <div class="property-btn">
                                    <div class="wrapper"></div>
                                    <div id="modalbox" class="modal">
                                        <div class="modalcontent">
                                            <div class="features">
                                            <h1>The View</h1><br>
                                            <h2>Unique features: </h2>
                                                <ul>
                                                  <li>Spacious garden</li>
                                                  <li>Thatched roof</li>
                                                  <li>Calm neighborhood</li>
                                                </ul> <br> 
                                            <p>Bring your dreams to reality!<br>
                                                Incredible opportunity for buyer seeking the perfect house. This south facing and sun-drenched house featuring 3 bedrooms and 3 bathrooms. 
                                            </p> </div><br>
                                            <div class="pc-col1"><img src="./assets/pics/room2.jpg"></div>
                                            <div class="pc-col1"><img src="./assets/pics/kitchen1.jpg"></div>
                                            <a href="#" class="modalclose"> &times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer></footer>
</html>