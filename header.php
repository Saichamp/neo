<?php
$pageTitle = "Home"; // Default page title
$pageDescription = "Welcome to Neo Vision School, a place for holistic learning and excellence.";

// Check if the page is passed via query parameter or based on the section ID
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'about':
            $pageTitle = "About Us";
            $pageDescription = "Learn more about Neo Vision School, its vision, mission, and history.";
            break;
        case 'academics':
            $pageTitle = "Academics";
            $pageDescription = "Explore the curriculum, faculty, and academic programs offered at Neo Vision School.";
            break;
        case 'campus':
            $pageTitle = "Campus Life";
            $pageDescription = "Discover the vibrant campus life and student experiences at Neo Vision School.";
            break;
        case 'events':
            $pageTitle = "Events";
            $pageDescription = "Stay updated with the latest events and happenings at Neo Vision School.";
            break;
        case 'alumni':
            $pageTitle = "Alumni";
            $pageDescription = "Connect with Neo Vision School's alumni network and their success stories.";
            break;
        case 'contact':
            $pageTitle = "Contact Us";
            $pageDescription = "Get in touch with Neo Vision School for inquiries and information.";
            break;
        default:
            $pageTitle = "Welcome";
            $pageDescription = "Welcome to Neo Vision School, a place for holistic learning and excellence.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Neo Vision High School</title>

    <!-- Meta Description for SEO -->
    <meta name="description" content="<?php echo $pageDescription; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Nunito:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="tel:+911234567890"><i class="fas fa-phone"></i> +91 12345 67890</a>
                    <a href="mailto:info@neovisionschool.com"><i class="fas fa-envelope"></i> info@neovisionschool.com</a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg main-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Neo Vision School" class="logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'home' || !isset($page)) ? 'active' : ''; ?>" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo ($page == 'academics') ? 'active' : ''; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Academics
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=academics&section=curriculum">Curriculum</a></li>
                            <li><a class="dropdown-item" href="?page=academics&section=faculty">Faculty</a></li>
                            <li><a class="dropdown-item" href="?page=academics&section=programs">Programs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'campus') ? 'active' : ''; ?>" href="?page=campus">Gallery</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'alumni') ? 'active' : ''; ?>" href="?page=alumni">Vision Toppers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
