<?php
$page = 'about';
$pageTitle = "About Us";
$pageDescription = "Learn more about Neo Vision School, its vision, mission, and history.";
include "header.php";
?>
<style>
    /* ===== New Modern About Page Design ===== */
/* Base Styles */
.about-content {
    background: #f9fbfd;
    position: relative;
    overflow: hidden;
}

.about-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNDUsMjQ1LDI0NSwxKSI+PC9yZWN0PjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgeD0iMjAiIHk9IjIwIiBmaWxsPSJyZ2JhKDI0NSwyNDUsMjQ1LDEpIj48L3JlY3Q+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIiBvcGFjaXR5PSIwLjAzIj48L3JlY3Q+PC9zdmc+');
    opacity: 0.15;
    z-index: 0;
}

.section-title {
    font-weight: 800;
    font-size: 2.5rem;
    background: linear-gradient(90deg, #2563eb 0%, #7c3aed 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    position: relative;
    display: inline-block;
    margin-bottom: 2rem;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 50%;
    height: 4px;
    background: linear-gradient(90deg, #2563eb 0%, #7c3aed 100%);
    border-radius: 2px;
}

/* Cards Redesign */
.card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    background: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    position: relative;
    z-index: 1;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 2.5rem;
}

.icon-box {
    width: 90px;
    height: 90px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 2rem;
    font-size: 2.5rem;
    color: white;
    background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
    transition: all 0.3s ease;
}

.card:hover .icon-box {
    transform: rotate(5deg) scale(1.1);
    box-shadow: 0 15px 30px rgba(37, 99, 235, 0.3);
}

.card-title {
    font-weight: 700;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    color: #1e293b;
}

.card-text {
    color: #64748b;
    font-size: 1.1rem;
    line-height: 1.6;
}

/* Timeline Redesign */
.timeline {
    position: relative;
    max-width: 1000px;
    margin: 5rem auto;
    padding-left: 50px;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, #2563eb, #7c3aed);
    left: 50px;
    border-radius: 4px;
}

.timeline-item {
    position: relative;
    margin-bottom: 60px;
    padding-left: 80px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.timeline-item.visible {
    opacity: 1;
    transform: translateY(0);
}

.timeline-year {
    position: absolute;
    left: 0;
    top: 0;
    width: 60px;
    height: 60px;
    background: white;
    color: #2563eb;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.2rem;
    z-index: 2;
    box-shadow: 0 0 0 4px #2563eb, 0 10px 20px rgba(0,0,0,0.1);
    border: 2px solid white;
}

.timeline-content {
    background: white;
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    position: relative;
    border-left: 4px solid #2563eb;
}

.timeline-content h3 {
    color: #2563eb;
    margin-top: 0;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.timeline-content p {
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 0;
}

.timeline-content::before {
    content: '';
    position: absolute;
    left: -12px;
    top: 30px;
    width: 24px;
    height: 24px;
    background: white;
    transform: rotate(45deg);
    z-index: 1;
    border-left: 4px solid #f9fbfd;
    border-bottom: 4px solid #f9fbfd;
}

/* Stats Section Redesign */
.stats-section {
    background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%);
    position: relative;
    overflow: hidden;
}

.stats-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNjAwIj48ZmlsdGVyIGlkPSJub2lzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSI+PGZlVHVyYnVsZW5jZSB0eXBlPSJmcmFjdGFsTm9pc2UiIGJhc2VGcmVxdWVuY3k9IjAuMDEiIG51bW9jdGF2ZXM9IjUiIHN0aXRjaFRpbGVzPSJzdGl0Y2giLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWx0ZXI9InVybCgjbm9pc2UpIiBvcGFjaXR5PSIwLjAyIi8+PC9zdmc+');
    opacity: 0.1;
}

.stat-box {
    background: white;
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    position: relative;
    z-index: 1;
    text-align: center;
    border-bottom: 4px solid transparent;
}

.stat-box:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-bottom-color: #2563eb;
}

.stat-number {
    font-size: 3.5rem;
    font-weight: 800;
    background: linear-gradient(90deg, #2563eb 0%, #7c3aed 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 1rem;
    line-height: 1;
}

.stat-box p {
    color: #64748b;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .card-body {
        padding: 2rem;
    }
    
    .timeline {
        padding-left: 40px;
    }
    
    .timeline::before {
        left: 40px;
    }
    
    .timeline-item {
        padding-left: 70px;
    }
    
    .timeline-year {
        width: 50px;
        height: 50px;
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
    
    .icon-box {
        width: 70px;
        height: 70px;
        font-size: 2rem;
    }
    
    .card-title {
        font-size: 1.3rem;
    }
    
    .timeline {
        padding-left: 30px;
    }
    
    .timeline::before {
        left: 30px;
    }
    
    .timeline-item {
        padding-left: 60px;
        margin-bottom: 50px;
    }
    
    .timeline-content {
        padding: 1.5rem;
    }
    
    .stat-number {
        font-size: 2.5rem;
    }
}

@media (max-width: 576px) {
    .card-body {
        padding: 1.5rem;
    }
    
    .timeline {
        padding-left: 20px;
    }
    
    .timeline::before {
        left: 20px;
    }
    
    .timeline-item {
        padding-left: 50px;
    }
    
    .timeline-year {
        width: 40px;
        height: 40px;
        font-size: 0.9rem;
    }
    
    .stat-box {
        padding: 1.5rem;
    }
}
</style>
<link rel="stylesheet" href="assets/css/strip.css">
<link rel="stylesheet" href="assets/css/about.css"> <!-- New CSS file -->

<!-- Main Header Strip -->
<div class="main-header-strip">
    <!-- Animated particles with higher contrast -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <!-- Light rays effect -->
    <div class="light-rays">
        <div class="ray"></div>
        <div class="ray"></div>
        <div class="ray"></div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center header-content">
                <h1 class="header-title">About Us</h1>
                <p class="header-subtitle">Design Your Future</p>
            </div>
        </div>
    </div>
</div>

<!-- About Content Section -->
<section class="about-content py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <h2 class="section-title">Shaping Creative Minds Since 2008</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Neo Vision School has been at the forefront of design education, nurturing creative talents who transform industries worldwide.</p>
            </div>
        </div>

        <!-- Vision and Mission Cards -->
        <div class="row g-4 mb-6">
            <!-- Vision Card -->
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box bg-primary mb-4">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="card-title mb-3">Our Vision</h3>
                        <p class="card-text">To be the global benchmark for design education, where innovation meets excellence, fostering creators who redefine industries and shape the future of visual culture worldwide.</p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card -->
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box bg-secondary mb-4">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="card-title mb-3">Our Mission</h3>
                        <p class="card-text">To empower creative minds through cutting-edge education, industry-relevant skills, and transformative experiences that bridge imagination with professional excellence in an ever-evolving design landscape.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- History Timeline -->
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-5">Our Journey</h2>
                <div class="timeline">
                    <!-- Timeline Item 1 -->
                    <div class="timeline-item">
                        <div class="timeline-year">2008</div>
                        <div class="timeline-content">
                            <h3>Foundation</h3>
                            <p>Neo Vision School was founded by visionary designers with a mission to revolutionize design education. Our first campus opened with 3 programs and 42 students.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 2 -->
                    <div class="timeline-item">
                        <div class="timeline-year">2012</div>
                        <div class="timeline-content">
                            <h3>Expansion</h3>
                            <p>Launched our Digital Media specialization and established industry partnerships with leading design studios and agencies.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 3 -->
                    <div class="timeline-item">
                        <div class="timeline-year">2016</div>
                        <div class="timeline-content">
                            <h3>Global Recognition</h3>
                            <p>Received the International Design Education Excellence Award and expanded to our second campus location.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 4 -->
                    <div class="timeline-item">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-content">
                            <h3>Digital Transformation</h3>
                            <p>Pioneered hybrid learning models and launched virtual studios to serve students worldwide during global challenges.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 5 -->
                    <div class="timeline-item">
                        <div class="timeline-year">2023</div>
                        <div class="timeline-content">
                            <h3>Future Forward</h3>
                            <p>Introduced AI integration in design curriculum and opened our Innovation Lab with AR/VR capabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section py-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="stat-box">
                    <h3 class="stat-number" data-count="15">0</h3>
                    <p>Years of Excellence</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3 class="stat-number" data-count="3500">0</h3>
                    <p>Graduates</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3 class="stat-number" data-count="42">0</h3>
                    <p>Industry Partners</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <h3 class="stat-number" data-count="9">0</h3>
                    <p>Specialized Programs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>

<!-- Add JavaScript for animations -->
<script>
// Counter animation for stats
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const increment = target / speed;
            
            if(count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };
        
        // Start counter when element is in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    updateCount();
                    observer.unobserve(counter);
                }
            });
        });
        
        observer.observe(counter);
    });
});

// Timeline animation
document.addEventListener('DOMContentLoaded', function() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('visible');
                timelineObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    
    timelineItems.forEach(item => {
        timelineObserver.observe(item);
    });
});
</script>