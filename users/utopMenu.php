<head>
    <link rel="stylesheet" href="css/utopMenu.css">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script defer src="../js/hamburger.js"></script>
</head>

<body>
    <div class="main-container">
        <div class="main">

            <div class="links">
                <div class="none">
                    <ul>
                        <li><a href="blog.php"><i class="fas fa-home"></i>Home</a></li>
                        </li>

                        <li><a href="products.php">Products</a>
                            <ul>
                                <li><a href="skincare.php">Skincare</a></li>
                                <li><a href="makeup.php">Makeup</a></li>
                            </ul>
                        </li>
                        <li><a href="testimonials.php">Testimonials</a>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="profile.php">Profile</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="hamburger">
                <button class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i> </button>
                </div>

            <div class="search">
                <form action="displaysearch.php" method="POST" id="form">
                    <input type="text" id="search" placeholder=" Search..." name="search" style="border-radius:15px; ">
                    <div id='button'>
                        <button name="submit" id="searchbttn"
                            style="background-color:transparent; border:none; margin:0px 30px;"><img
                                src='../pictures/search.png' /></button>
                    </div>
                </form>
            </div>



            <div class="logo-container">
                <img src="../pictures/reverselogoblack.jpg" alt="logo.png" />
            </div>
            <div class="logout"> <button class="logOut" onclick="window.location.href='LogOut.php'">Log Out</button>
            </div>

        </div>
    </div>
</body>































<!--
<header>
    <div class="main">
        <nav>
            <div class="logo-container">
                <img src="../pictures/logo.png" alt="logo.png" />
            </div>
         <div class="nav-links">
            <ul id="navlinks">
                <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="reviews.php">Blog</a>
                </li>

                <li><a href="#">Products</a>
                    <ul>
                        <li><a href="#">Skincare</a></li>
                        <li><a href="#">Makeup</a></li>
                    </ul>
                </li>
                <li><a href="reviews.php">Reviews</a>
                </li>

                <li><a href="contact.php">Contact</a></li>
                <li><a href="reviews.php">Profile</a>
                </li>
                <li><a href="#"><i class="fas fa-search"></i><input class="input" type="text" name=""
                            placeholder=" type to search...">
                    </a></li>
            </ul>
</div>
    </div>
    </nav>



</header>

   -->