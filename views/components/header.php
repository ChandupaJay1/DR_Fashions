<head>
    <title>DR Fashions</title>
    <meta charset="UTF-8">
    <meta name="description" content="DR Fashions website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="drfashions, garment, dr, creative, html">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/DR_Fashions/public/img/favicon.ico">

    <!-- Optional PNG versions -->
    <link rel="icon" type="image/png" sizes="16x16" href="../public/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../public/img/favicon-48x48.png">
    <link rel="apple-touch-icon" href="../public/img/favicon-180x180.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../public/css/animate.css" />
    <link rel="stylesheet" href="../public/css/owl.carousel.css" />
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Header section start -->
<header class="header-area">
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <div class="phone-number">+94 77 295 5780</div>
    <nav class="nav-menu">
        <ul>
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="carreres.php">Careers</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="left-bar">
    <div class="left-bar-content">
        <!-- Rotated Logo -->
        <div class="rotated-logo">
            <a href="home.php">
                <img src="../public/img/logo.png" alt="DR Fashions Logo">
            </a>
        </div>

        <!-- Social Icons Below -->
        <div class="social-links">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>
</div>
<!-- Header section end -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll(".nav-menu ul li a");
        const navSwitch = document.querySelector('.nav-switch');
        const navMenu = document.querySelector('.nav-menu');
        
        // Toggle mobile menu
        navSwitch.addEventListener('click', function() {
            navMenu.style.display = navMenu.style.display === 'block' ? 'none' : 'block';
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.nav-menu') && !event.target.closest('.nav-switch') && window.innerWidth <= 991) {
                navMenu.style.display = 'none';
            }
        });

        // Set active on page load
        menuItems.forEach(link => {
            if (link.href === window.location.href) {
                menuItems.forEach(i => i.parentElement.classList.remove("active"));
                link.parentElement.classList.add("active");
            }
        });

        // Change active on click and close menu on mobile
        menuItems.forEach(link => {
            link.addEventListener("click", function() {
                menuItems.forEach(i => i.parentElement.classList.remove("active"));
                this.parentElement.classList.add("active");
                
                // Close menu on mobile after selection
                if (window.innerWidth <= 991) {
                    navMenu.style.display = 'none';
                }
            });
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991) {
                navMenu.style.display = 'inline-block';
            } else {
                navMenu.style.display = 'none';
            }
        });
    });
</script>