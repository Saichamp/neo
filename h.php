<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Neo Vision High School</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e60000;
            --secondary-color: #1e90ff;
            --dark-color: #2c3e50;
            --light-bg: #f9f9f9;
            --bg-light: #f8f9fa;
            --text-dark: #333;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* Hero Banner with Enhanced Animation */
        .hero-banner {
            background: linear-gradient(135deg, var(--primary-color) 0%, #c50000 100%);
            color: var(--white);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
            min-height: 200px;
        }

        /* Floating Circles Animation */
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.6;
            animation: float-diagonal 8s ease-in-out infinite;
        }

        .circle-1 {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.1);
            top: 10%;
            right: 15%;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.15);
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .circle-3 {
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.08);
            bottom: 20%;
            left: 10%;
            animation-delay: 4s;
        }

        .circle-4 {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            top: 30%;
            left: 20%;
            animation-delay: 6s;
        }

        .circle-5 {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.12);
            top: 5%;
            left: 5%;
            animation-delay: 1s;
        }

        .circle-6 {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.18);
            bottom: 10%;
            right: 25%;
            animation-delay: 3s;
        }

        @keyframes float-diagonal {
            0%, 100% { 
                transform: translate(0, 0) scale(1);
                opacity: 0.6;
            }
            25% { 
                transform: translate(20px, -30px) scale(1.1);
                opacity: 0.8;
            }
            50% { 
                transform: translate(-15px, -20px) scale(0.9);
                opacity: 0.4;
            }
            75% { 
                transform: translate(25px, 10px) scale(1.05);
                opacity: 0.7;
            }
        }

        /* Pulse Animation for smaller circles */
        .circle-2, .circle-4, .circle-6 {
            animation: pulse-float 6s ease-in-out infinite;
        }

        @keyframes pulse-float {
            0%, 100% { 
                transform: translate(0, 0) scale(1);
                opacity: 0.6;
            }
            50% { 
                transform: translate(10px, -15px) scale(1.2);
                opacity: 0.9;
            }
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
            animation: slideInFromTop 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: slideInFromBottom 1s ease-out 0.3s both;
        }

        .hero-btn {
            background: var(--white);
            color: var(--primary-color);
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            animation: slideInFromBottom 1s ease-out 0.6s both;
        }

        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            color: var(--primary-color);
        }

        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInFromBottom {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Vision & Mission Cards */
        .vision-mission {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .vision-card, .mission-card {
            background: var(--white);
            border: none;
            border-radius: 15px;
            padding: 40px 30px;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .vision-card::before, .mission-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-color);
        }

        .vision-card:hover, .mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .card-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 20px;
        }

        .card-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-dark);
        }

        .mission-list {
            list-style: none;
            padding: 0;
        }

        .mission-list li {
            padding: 8px 0;
            border-left: 3px solid var(--primary-color);
            padding-left: 15px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .mission-list li:hover {
            background: var(--light-bg);
            padding-left: 20px;
        }

        /* History Timeline */
        .history-section {
            padding: 80px 0;
            background: var(--white);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 60px;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            padding-left: 100px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 38px;
            top: 20px;
            width: 25px;
            height: 25px;
            background: var(--primary-color);
            border-radius: 50%;
            border: 4px solid var(--white);
            box-shadow: 0 0 0 3px var(--primary-color);
        }

        .timeline-year {
            background: var(--primary-color);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 10px;
        }

        .timeline-content {
            background: var(--light-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Leadership Section */
        .leadership-section {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .leader-card {
            background: var(--white);
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .leader-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .leader-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 4rem;
        }

        .leader-info {
            padding: 25px;
            text-align: center;
        }

        .leader-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 5px;
        }

        .leader-position {
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .timeline::before {
                left: 20px;
            }
            
            .timeline-item::before {
                left: 8px;
            }
            
            .timeline-item {
                padding-left: 60px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Hero Banner with Enhanced Animation -->
    <section class="hero-banner">
        <!-- Floating Circles -->
        <div class="floating-circle circle-1"></div>
        <div class="floating-circle circle-2"></div>
        <div class="floating-circle circle-3"></div>
        <div class="floating-circle circle-4"></div>
        <div class="floating-circle circle-5"></div>
        <div class="floating-circle circle-6"></div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">MERIT MINDS OVERSEAS</h1>
                <p class="hero-subtitle">Guiding Your International Education Journey.</p>
                <a href="#vision" class="hero-btn">Discover Our Story</a>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision" class="vision-mission">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="vision-card">
                        <i class="bi bi-eye card-icon"></i>
                        <h3 class="card-title">Our Vision</h3>
                        <p class="card-text">To be a globally recognized institution that nurtures innovative thinkers, ethical leaders, and compassionate citizens who will shape the future of our world through excellence in education and character development.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-card">
                        <i class="bi bi-target card-icon"></i>
                        <h3 class="card-title">Our Mission</h3>
                        <ul class="mission-list">
                            <li>Foster critical thinking and creative problem-solving skills</li>
                            <li>Provide inclusive, technology-enhanced learning experiences</li>
                            <li>Build ethical leaders and responsible global citizens</li>
                            <li>Encourage lifelong learning and personal growth</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Timeline -->
    <section id="history" class="history-section">
        <div class="container">
            <h2 class="section-title">Our Journey</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1990</div>
                    <div class="timeline-content">
                        <h4>Foundation Years</h4>
                        <p>Neo Vision High School was founded with a vision to provide quality education. Starting with just 50 students in a single building, we laid the foundation for excellence in education.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2005</div>
                    <div class="timeline-content">
                        <h4>Expansion & Growth</h4>
                        <p>Expanded our campus and introduced advanced laboratory facilities, sports complex, and modern classrooms to enhance the learning experience.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h4>Digital Revolution</h4>
                        <p>Embraced technology in education with smart classrooms, digital libraries, and online learning platforms to prepare students for the digital age.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h4>Recognition & Awards</h4>
                        <p>Recognized as "Best Innovative School" nationally for our commitment to excellence and innovation in education. Achieved 100% graduation rate and outstanding college placement record.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section id="leadership" class="leadership-section">
        <div class="container">
            <h2 class="section-title">Our Leadership</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="leader-card">
                        <div class="leader-image">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="leader-info">
                            <h5 class="leader-name">Dr. Jane Smith</h5>
                            <p class="leader-position">Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="leader-card">
                        <div class="leader-image">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="leader-info">
                            <h5 class="leader-name">Prof. Michael Johnson</h5>
                            <p class="leader-position">Vice Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="leader-card">
                        <div class="leader-image">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="leader-info">
                            <h5 class="leader-name">Dr. Sarah Wilson</h5>
                            <p class="leader-position">Academic Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>