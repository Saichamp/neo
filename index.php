<html>
<head>
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

    /* Standout Features Grid */
    .nvx-features-container {
        padding: 80px 20px;
        background-color: var(--bg-light);
        overflow: hidden;
    }

    .nvx-features-title {
        text-align: center;
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 50px;
        position: relative;
        opacity: 0;
        transform: translateY(30px);
    }

    .nvx-features-title.animated {
        opacity: 1;
        transform: translateY(0);
        transition: all 0.8s ease-out;
    }

    .nvx-features-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: var(--secondary-color);
        border-radius: 2px;
    }

    .nvx-features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .nvx-feature-card {
        background: var(--white);
        padding: 35px 25px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border-top: 5px solid var(--primary-color);
        opacity: 0;
        transform: translateY(50px) scale(0.95);
    }

    .nvx-feature-card.animated {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .nvx-feature-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 30px rgba(230, 0, 0, 0.12);
    }

    .nvx-feature-icon {
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 25px;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .nvx-feature-card:hover .nvx-feature-icon {
        transform: rotateY(180deg) scale(1.1);
        color: var(--secondary-color);
    }

    .nvx-feature-title {
        font-size: 1.4rem;
        color: var(--dark-color);
        margin-bottom: 15px;
        font-weight: 600;
    }

    .nvx-feature-desc {
        color: var(--text-dark);
        line-height: 1.7;
        font-size: 1.05rem;
    }

    /* Unique Photo Grid */
    .nvx-photo-gallery {
        padding: 80px 20px;
        background-color: var(--white);
        position: relative;
        overflow: hidden;
    }

    .nvx-gallery-title {
        text-align: center;
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 50px;
        position: relative;
        opacity: 0;
        transform: translateY(30px);
    }

    .nvx-gallery-title.animated {
        opacity: 1;
        transform: translateY(0);
        transition: all 0.8s ease-out;
    }

    .nvx-gallery-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: var(--secondary-color);
        border-radius: 2px;
    }

    .nvx-gallery-container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: repeat(4, 200px);
        gap: 15px;
        max-width: 1400px;
        margin: 0 auto;
    }

    .nvx-gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        opacity: 0;
        transform: scale(0.95);
    }

    .nvx-gallery-item.animated {
        opacity: 1;
        transform: scale(1);
        transition: all 0.6s ease-out;
    }

    .nvx-gallery-item:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .nvx-gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .nvx-gallery-item:hover img {
        transform: scale(1.1);
    }

    .nvx-gallery-item:nth-child(1) {
        grid-column: span 6;
        grid-row: span 2;
    }

    .nvx-gallery-item:nth-child(2) {
        grid-column: span 3;
        grid-row: span 1;
    }

    .nvx-gallery-item:nth-child(3) {
        grid-column: span 3;
        grid-row: span 1;
    }

    .nvx-gallery-item:nth-child(4) {
        grid-column: span 3;
        grid-row: span 2;
    }

    .nvx-gallery-item:nth-child(5) {
        grid-column: span 3;
        grid-row: span 2;
    }

    .nvx-gallery-item:nth-child(6) {
        grid-column: span 6;
        grid-row: span 2;
    }

    .nvx-gallery-item:nth-child(7) {
        grid-column: span 3;
        grid-row: span 1;
    }

    .nvx-gallery-item:nth-child(8) {
        grid-column: span 3;
        grid-row: span 1;
    }

    .nvx-gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: white;
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .nvx-gallery-item:hover .nvx-gallery-caption {
        transform: translateY(0);
    }

    .nvx-gallery-caption h3 {
        margin-bottom: 5px;
        font-size: 1.2rem;
    }

    /* Director's Message with Three.js Background */
    .nvx-director-container {
        padding: 100px 20px;
        color: var(--black);
        position: relative;
        overflow: hidden;
        background: transparent;
        z-index: 1;
    }

    .nvx-threejs-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.7;
    }

    .nvx-director-inner {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 50px;
        position: relative;
        z-index: 2;
    }

    .nvx-director-image {
        flex: 1;
        min-width: 300px;
        opacity: 0;
        transform: translateX(-50px);
        position: relative;
        z-index: 3;
    }

    .nvx-director-image.animated {
        opacity: 1;
        transform: translateX(0);
        transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .nvx-director-image img {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        border: 5px solid var(--white);
        transform: perspective(1000px) rotateY(-15deg);
        transition: all 0.6s ease;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        padding: 10px;
    }

    .nvx-director-image:hover img {
        transform: perspective(1000px) rotateY(0deg);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    }

    .nvx-director-content {
        flex: 2;
        min-width: 300px;
        opacity: 0;
        transform: translateX(50px);
        background: rgba(30, 144, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .nvx-director-content.animated {
        opacity: 1;
        transform: translateX(0);
        transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1) 0.3s;
    }

    .nvx-director-title {
        font-size: 2.2rem;
        margin-bottom: 25px;
        position: relative;
        display: inline-block;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .nvx-director-title::after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 70px;
        height: 4px;
        background: var(--white);
        border-radius: 2px;
    }

    .nvx-director-message {
        font-size: 1.15rem;
        line-height: 1.8;
        margin-bottom: 30px;
        opacity: 0.95;
    }

    .nvx-director-signature {
        margin-top: 30px;
    }

    .nvx-director-name {
        font-weight: 700;
        font-size: 1.3rem;
        color: var(--white);
        margin-bottom: 5px;
    }

    .nvx-director-position {
        font-style: italic;
        opacity: 0.9;
        font-size: 1.05rem;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .nvx-gallery-container {
            grid-template-rows: repeat(4, 150px);
        }
    }

    @media (max-width: 992px) {
        .nvx-gallery-container {
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: repeat(6, 150px);
        }

        .nvx-gallery-item:nth-child(1),
        .nvx-gallery-item:nth-child(6) {
            grid-column: span 3;
            grid-row: span 2;
        }

        .nvx-gallery-item:nth-child(2),
        .nvx-gallery-item:nth-child(3),
        .nvx-gallery-item:nth-child(7),
        .nvx-gallery-item:nth-child(8) {
            grid-column: span 3;
            grid-row: span 1;
        }

        .nvx-gallery-item:nth-child(4),
        .nvx-gallery-item:nth-child(5) {
            grid-column: span 3;
            grid-row: span 2;
        }
    }

    @media (max-width: 768px) {

        .nvx-features-title,
        .nvx-gallery-title {
            font-size: 2rem;
        }

        .nvx-feature-card {
            padding: 30px 20px;
        }

        .nvx-director-inner {
            flex-direction: column;
            gap: 30px;
        }

        .nvx-director-image {
            max-width: 300px;
        }

        .nvx-director-title {
            font-size: 1.8rem;
        }

        .nvx-director-content {
            padding: 25px;
            backdrop-filter: blur(5px);
        }

        .nvx-gallery-container {
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(8, 120px);
        }

        .nvx-gallery-item {
            grid-column: span 1 !important;
            grid-row: span 1 !important;
        }

        .nvx-gallery-item:nth-child(1),
        .nvx-gallery-item:nth-child(6) {
            grid-row: span 2 !important;
        }
    }
</style>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: white;
            min-height: 100vh;
        }

        .alumni-container {
            max-width: 1800px;
            margin: 0 auto;
            padding: 60px 20px;
            overflow: hidden;
            position: relative;
        }

        .alumni-container h2 {
            text-align: center;
            margin-bottom: 50px;
            color: #2196F3;
            font-size: 2.8rem;
        }

        .alumni-wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .alumni-track {
            display: flex;
            will-change: transform;
        }

        .alumni-card {
            flex-shrink: 0;
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            overflow: hidden;
            padding: 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-right: 30px;
            width: 150px;
            height: 150px;
        }

        .alumni-card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        .alumni-photo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #f8f8f8;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 12px;
            background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .alumni-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .alumni-info {
            text-align: center;
            width: 100%;
        }

        .alumni-info h3 {
            margin: 0 0 5px;
            color: #2c3e50;
            font-size: 0.9rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .alumni-info .batch {
            color: #7f8c8d;
            font-style: italic;
            margin-bottom: 5px;
            font-size: 0.7em;
            font-weight: 500;
        }

        .alumni-info .description {
            color: #555;
            line-height: 1.3;
            font-size: 0.7em;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 32px;
        }

        /* Large screens (1200px and up) */
        @media (min-width: 1200px) {
            .alumni-card {
                width: 250px;
                height: 250px;
                padding: 30px;
                margin-right: 40px;
            }
            
            .alumni-photo {
                width: 100px;
                height: 100px;
                margin-bottom: 20px;
            }
            
            .alumni-info h3 {
                font-size: 1.1rem;
            }
            
            .alumni-info .batch {
                font-size: 0.8em;
            }
            
            .alumni-info .description {
                font-size: 0.8em;
                height: 38px;
            }
        }

        /* Medium screens (768px to 1199px) */
        @media (min-width: 768px) and (max-width: 1199px) {
            .alumni-card {
                width: 180px;
                height: 180px;
                padding: 20px;
                margin-right: 25px;
            }
            
            .alumni-photo {
                width: 80px;
                height: 80px;
                margin-bottom: 15px;
            }
        }

        /* Small screens (up to 767px) */
        @media (max-width: 767px) {
            .alumni-container {
                padding: 40px 15px;
            }
            
            .alumni-container h2 {
                font-size: 2.2rem;
                margin-bottom: 30px;
            }
            
            .alumni-card {
                margin-right: 20px;
                width: 140px;
                height: 140px;
                padding: 15px;
            }
            
            .alumni-photo {
                width: 60px;  /* 30px radius = 60px diameter */
                height: 60px;
                margin-bottom: 10px;
                border-radius: 50%;
                overflow: hidden;
            }
            
            .alumni-photo img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 50%;
            }
        }
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<?php include "header.php" ?>
<body>
<div class="slider-container">
    <ul class='image-slider'>
        <li class='slider-item' style="background-image: url('assets/images/img1.jpg')">
            <div class='slider-content'>
                <h2 class='slider-title'>"Welcome to Neo Vision"</h2>
                <p class='slider-description'>A place for holistic learning and excellence where students grow
                    academically and personally.</p>
                <button>Learn More</button>
            </div>
        </li>
        <li class='slider-item' style="background-image: url('assets/images/img2.jpg')">
            <div class='slider-content'>
                <h2 class='slider-title'>"Our Campus"</h2>
                <p class='slider-description'>Explore our state-of-the-art facilities designed to inspire learning and
                    creativity.</p>
                <button>View Campus</button>
            </div>
        </li>
        <li class='slider-item' style="background-image: url('assets/images/img3.jpg')">
            <div class='slider-content'>
                <h2 class='slider-title'>"Academic Programs"</h2>
                <p class='slider-description'>Discover our comprehensive curriculum designed to prepare students for the
                    future.</p>
                <button>Explore Programs</button>
            </div>
        </li>
        <li class='slider-item' style="background-image: url('assets/images/img4.jpg')">
            <div class='slider-content'>
                <h2 class='slider-title'>"Student Life"</h2>
                <p class='slider-description'>Engage in diverse extracurricular activities that complement academic
                    learning.</p>
                <button>See Activities</button>
            </div>
        </li>
        <li class='slider-item'
            style="background-image: url('https://theawesomer.com/photos/2017/07/simon_stalenhag_the_electric_state_6.jpg')">
            <div class='slider-content'>
                <h2 class='slider-title'>"Our Faculty"</h2>
                <p class='slider-description'>Meet our dedicated team of educators committed to student success.</p>
                <button>Meet Teachers</button>
            </div>
        </li>
    </ul>
    <nav class='slider-nav'>
        <ion-icon class='slider-btn prev' name="arrow-back-outline"></ion-icon>
        <ion-icon class='slider-btn next' name="arrow-forward-outline"></ion-icon>
    </nav>
</div>
<!-- Standout Features Grid Section -->
<section class="nvx-features-container">
    <h2 class="nvx-features-title">Why Choose Our School</h2>
    <div class="nvx-features-grid">
        <div class="nvx-feature-card">
            <div class="nvx-feature-icon">
                <i class="fas fa-award"></i>
            </div>
            <h3 class="nvx-feature-title">CBSE Affiliation</h3>
            <p class="nvx-feature-desc">Recognized by the Central Board of Secondary Education with consistent 100% pass
                results.</p>
        </div>

        <div class="nvx-feature-card">
            <div class="nvx-feature-icon">
                <i class="fas fa-flask"></i>
            </div>
            <h3 class="nvx-feature-title">STEM Labs</h3>
            <p class="nvx-feature-desc">Advanced laboratories with robotics, 3D printing, and AI learning modules.</p>
        </div>

        <div class="nvx-feature-card">
            <div class="nvx-feature-icon">
                <i class="fas fa-palette"></i>
            </div>
            <h3 class="nvx-feature-title">Arts & Sports</h3>
            <p class="nvx-feature-desc">Olympic-size swimming pool, professional arts studios, and championship teams.
            </p>
        </div>

        <div class="nvx-feature-card">
            <div class="nvx-feature-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <h3 class="nvx-feature-title">Expert Faculty</h3>
            <p class="nvx-feature-desc">80% hold master's degrees with specialized training in child psychology.</p>
        </div>

        <div class="nvx-feature-card">
            <div class="nvx-feature-icon">
                <i class="fas fa-laptop-code"></i>
            </div>
            <h3 class="nvx-feature-title">Tech-Enabled</h3>
            <p class="nvx-feature-desc">1:1 iPad program, coding curriculum from Grade 3, and VR learning labs.</p>
        </div>

        <div class="nvx-feature-card">
            <div class="nvx-feature-icon">
                <i class="fas fa-heart"></i>
            </div>
            <h3 class="nvx-feature-title">Holistic Growth</h3>
            <p class="nvx-feature-desc">Daily mindfulness sessions, career counseling, and leadership programs.</p>
        </div>
    </div>
</section>

<!-- Director's Message Section with Three.js Background -->
<section class="nvx-director-container">
    <div id="threejs-bg" class="nvx-threejs-bg"></div>
    <div class="nvx-director-inner">
        <div class="nvx-director-image">
            <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="School Director">
        </div>
        <div class="nvx-director-content">
            <h2 class="nvx-director-title">From the Director's Desk</h2>
            <p class="nvx-director-message">At Neo Vision, we don't just educate - we inspire. Our innovative
                'Learn-Apply-Lead' methodology prepares students for a rapidly evolving world. With a perfect blend of
                academic rigor and creative freedom, we cultivate curious minds that ask the right questions and develop
                solutions that matter. The red in our logo symbolizes the passion we instill, while the blue represents
                the depth of knowledge we provide.</p>
            <div class="nvx-director-signature">
                <div class="nvx-director-name" style="color: #1e90ff;">Dr. Anji reddy</div>
                <div class="nvx-director-position">Director, Neo Vision School | Ph.D. in Educational Leadership</div>
            </div>
        </div>
    </div>
</section>
<!-- Unique Photo Grid Section -->
<section class="nvx-photo-gallery">
    <h2 class="nvx-gallery-title">Life at Neo Vision</h2>
    <div class="nvx-gallery-container">
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                alt="School Campus">
            <div class="nvx-gallery-caption">
                <h3>Our Beautiful Campus</h3>
                <p>State-of-the-art facilities in a green environment</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="Graduation">
            <div class="nvx-gallery-caption">
                <h3>Graduation Day</h3>
                <p>Celebrating our students' achievements</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="Science Lab">
            <div class="nvx-gallery-caption">
                <h3>Science Lab</h3>
                <p>Hands-on learning experiences</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="Classroom">
            <div class="nvx-gallery-caption">
                <h3>Interactive Classroom</h3>
                <p>Engaging learning environment</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="Sports">
            <div class="nvx-gallery-caption">
                <h3>Sports Day</h3>
                <p>Developing teamwork and fitness</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                alt="Library">
            <div class="nvx-gallery-caption">
                <h3>School Library</h3>
                <p>Knowledge hub with 10,000+ books</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="Art Class">
            <div class="nvx-gallery-caption">
                <h3>Art Exhibition</h3>
                <p>Showcasing creative talents</p>
            </div>
        </div>
        <div class="nvx-gallery-item">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                alt="Group Activity">
            <div class="nvx-gallery-caption">
                <h3>Team Activities</h3>
                <p>Building social skills and friendships</p>
            </div>
        </div>
    </div>
</section>
   <div class="alumni-container">
        <h2>Our Distinguished Alumni</h2>
        <div class="alumni-wrapper">
            <div class="alumni-track">
                <!-- Cards will be duplicated here by JavaScript -->
                <div class="alumni-card">
                    <div class="alumni-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=faces" alt="John Doe">
                    </div>
                    <div class="alumni-info">
                        <h3>John Doe</h3>
                        <p class="batch">Class of 2010</p>
                        <p class="description">Software Engineer at Tech Giant Inc.</p>
                    </div>
                </div>
                
                <div class="alumni-card">
                    <div class="alumni-photo">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b2bb?w=150&h=150&fit=crop&crop=faces" alt="Jane Smith">
                    </div>
                    <div class="alumni-info">
                        <h3>Jane Smith</h3>
                        <p class="batch">Class of 2012</p>
                        <p class="description">Medical Researcher at National Health</p>
                    </div>
                </div>

                <div class="alumni-card">
                    <div class="alumni-photo">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=faces" alt="Mike Johnson">
                    </div>
                    <div class="alumni-info">
                        <h3>Mike Johnson</h3>
                        <p class="batch">Class of 2015</p>
                        <p class="description">CEO of StartupTech with 200+ employees</p>
                    </div>
                </div>

                <div class="alumni-card">
                    <div class="alumni-photo">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=faces" alt="Sarah Wilson">
                    </div>
                    <div class="alumni-info">
                        <h3>Sarah Wilson</h3>
                        <p class="batch">Class of 2013</p>
                        <p class="description">Environmental Scientist</p>
                    </div>
                </div>

                <div class="alumni-card">
                    <div class="alumni-photo">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&h=150&fit=crop&crop=faces" alt="David Chen">
                    </div>
                    <div class="alumni-info">
                        <h3>David Chen</h3>
                        <p class="batch">Class of 2011</p>
                        <p class="description">Award-winning Architect</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.alumni-track');
            const cards = document.querySelectorAll('.alumni-card');
            const wrapper = document.querySelector('.alumni-wrapper');
            
            // Clone cards to create seamless loop
            cards.forEach(card => {
                const clone = card.cloneNode(true);
                track.appendChild(clone);
            });
            
            let currentPosition = 0;
            let animationId;
            const speed = 1; // pixels per frame (adjust for speed)
            
            function animate() {
                currentPosition -= speed;
                
                // When we've scrolled one full set of original cards
                if (Math.abs(currentPosition) >= track.scrollWidth / 2) {
                    currentPosition = 0;
                    track.style.transform = `translateX(${currentPosition}px)`;
                } else {
                    track.style.transform = `translateX(${currentPosition}px)`;
                }
                
                animationId = requestAnimationFrame(animate);
            }
            
            // Start animation
            animate();
            
            // Pause on hover
            wrapper.addEventListener('mouseenter', () => {
                cancelAnimationFrame(animationId);
            });
            
            wrapper.addEventListener('mouseleave', () => {
                animate();
            });
            
            // Handle window resize
            window.addEventListener('resize', () => {
                // Reset position to prevent jumps
                currentPosition = 0;
                track.style.transform = `translateX(${currentPosition}px)`;
            });
        });
    </script>
<!-- Add IonIcons for slider navigation -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
<!-- Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Animate features title
        const featuresTitle = document.querySelector('.nvx-features-title');
        setTimeout(() => {
            featuresTitle.classList.add('animated');
        }, 300);

        // Animate feature cards with stagger
        const featureCards = document.querySelectorAll('.nvx-feature-card');
        featureCards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add('animated');
            }, 500 + (index * 150)); // 150ms delay between each
        });

        // Animate gallery title
        const galleryTitle = document.querySelector('.nvx-gallery-title');
        setTimeout(() => {
            galleryTitle.classList.add('animated');
        }, 300);

        // Animate gallery items with stagger
        const galleryItems = document.querySelectorAll('.nvx-gallery-item');
        galleryItems.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add('animated');
            }, 500 + (index * 100)); // 100ms delay between each
        });

        // Initialize Three.js scene for director section
        const container = document.getElementById('threejs-bg');
        if (container) {
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });

            renderer.setSize(container.clientWidth, container.clientHeight);
            container.appendChild(renderer.domElement);

            // Create particles
            const particlesGeometry = new THREE.BufferGeometry();
            const particleCount = 1500;

            const posArray = new Float32Array(particleCount * 3);
            const colorArray = new Float32Array(particleCount * 3);

            for (let i = 0; i < particleCount * 3; i++) {
                posArray[i] = (Math.random() - 0.5) * 10;
                // Set colors to match your theme (red and blue)
                if (i % 3 === 0) {
                    colorArray[i] = Math.random() > 0.5 ? 0.9 : 0.1; // Red channel
                    colorArray[i + 1] = 0.1; // Green channel
                    colorArray[i + 2] = Math.random() > 0.5 ? 0.1 : 0.9; // Blue channel
                }
            }

            particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
            particlesGeometry.setAttribute('color', new THREE.BufferAttribute(colorArray, 3));

            const particlesMaterial = new THREE.PointsMaterial({
                size: 0.05,
                vertexColors: true,
                transparent: true,
                opacity: 0.8,
                blending: THREE.AdditiveBlending
            });

            const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
            scene.add(particlesMesh);

            camera.position.z = 3;

            // Animation loop
            function animate() {
                requestAnimationFrame(animate);

                particlesMesh.rotation.x += 0.0005;
                particlesMesh.rotation.y += 0.001;

                renderer.render(scene, camera);
            }

            animate();

            // Handle window resize
            window.addEventListener('resize', function () {
                camera.aspect = container.clientWidth / container.clientHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.clientWidth, container.clientHeight);
            });
        }

        // Animate director section on scroll
        const directorObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.querySelector('.nvx-director-image').classList.add('animated');
                    document.querySelector('.nvx-director-content').classList.add('animated');
                }
            });
        }, { threshold: 0.3 });

        directorObserver.observe(document.querySelector('.nvx-director-container'));
    });
</script>
<script>
    // Slider functionality
    const slider = document.querySelector('.image-slider');
    let isAnimating = false;

    function activate(e) {
        if (isAnimating) return;
        isAnimating = true;

        const items = document.querySelectorAll('.slider-item');

        if (e.target.matches('.next') || e.key === 'ArrowRight') {
            slider.append(items[0]);
        } else if (e.target.matches('.prev') || e.key === 'ArrowLeft') {
            slider.prepend(items[items.length - 1]);
        }

        setTimeout(() => {
            isAnimating = false;
        }, 750);
    }

    document.addEventListener('click', activate);
    document.addEventListener('keydown', activate);

    // Touch events for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    let touchStartY = 0;
    let touchEndY = 0;

    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
    }, { passive: true });

    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        touchEndY = e.changedTouches[0].screenY;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        if (isAnimating) return;

        const swipeThreshold = 50;
        const verticalThreshold = 100;

        const horizontalDistance = Math.abs(touchStartX - touchEndX);
        const verticalDistance = Math.abs(touchStartY - touchEndY);

        if (horizontalDistance > swipeThreshold && horizontalDistance > verticalDistance) {
            isAnimating = true;
            const items = document.querySelectorAll('.slider-item');

            if (touchStartX - touchEndX > 0) {
                slider.append(items[0]);
            } else {
                slider.prepend(items[items.length - 1]);
            }

            setTimeout(() => {
                isAnimating = false;
            }, 750);
        }
    }
</script>
</body>
<?php include "footer.php" ?>
</html>