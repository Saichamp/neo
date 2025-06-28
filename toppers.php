<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our School Toppers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg,rgb(127, 145, 221) 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .toppers-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 50px;
            color: white;
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
            letter-spacing: -0.5px;
        }

        .batch-section {
            margin-bottom: 60px;
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 0.8s ease forwards;
        }

        .batch-section:nth-child(even) {
            animation-delay: 0.2s;
        }

        .batch-section:nth-child(odd) {
            animation-delay: 0.4s;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .batch-year {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: white;
            text-align: center;
            position: relative;
            padding: 15px 0;
        }

        .batch-year::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #fff, transparent);
            border-radius: 2px;
        }

        .toppers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .topper-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 280px;
        }

        .topper-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .topper-card:hover::before {
            left: 100%;
        }

        .topper-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .topper-img-container {
            width: 140px;
            height: 140px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            position: relative;
            transition: transform 0.3s ease;
        }

        .topper-card:hover .topper-img-container {
            transform: scale(1.1);
        }

        .topper-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
        }

        .topper-card:hover .topper-img {
            transform: scale(1.1);
        }

        .topper-name {
            font-weight: 600;
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .achievement-badge {
            display: inline-block;
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 10px;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.3);
        }

        .stats-overlay {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 12px;
            border-radius: 15px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2.2rem;
                margin-bottom: 30px;
            }
            
            .toppers-grid {
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 20px;
            }
            
            .batch-year {
                font-size: 1.5rem;
            }
            
            .topper-card {
                padding: 25px 15px;
                max-width: 240px;
            }
            
            .topper-img-container {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width: 480px) {
            .toppers-container {
                padding: 20px 15px;
            }
            
            .page-title {
                font-size: 1.8rem;
            }
            
            .toppers-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .topper-card {
                max-width: 100%;
            }
            
            .topper-img-container {
                width: 100px;
                height: 100px;
            }
        }

        /* Scroll animations */
        @media (prefers-reduced-motion: no-preference) {
            .batch-section {
                animation-duration: 1s;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="toppers-container">
        <h1 class="page-title">Our School Toppers</h1>
        
        <!-- 2024-2025 Batch -->
        <div class="batch-section">
            <div class="batch-year">2024-2025</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face" alt="John Doe" class="topper-img">
                    </div>
                    <div class="topper-name">John Doe</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2023-2024 Batch -->
        <div class="batch-section">
            <div class="batch-year">2023-2024</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b1-c?w=200&h=200&fit=crop&crop=face" alt="Jane Smith" class="topper-img">
                    </div>
                    <div class="topper-name">Jane Smith</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2022-2023 Batch -->
        <div class="batch-section">
            <div class="batch-year">2022-2023</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face" alt="Alex Wong" class="topper-img">
                    </div>
                    <div class="topper-name">Alex Wong</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2021-2022 Batch -->
        <div class="batch-section">
            <div class="batch-year">2021-2022</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face" alt="Rahul Kumar" class="topper-img">
                    </div>
                    <div class="topper-name">Rahul Kumar</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2020-2021 Batch -->
        <div class="batch-section">
            <div class="batch-year">2020-2021</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=200&h=200&fit=crop&crop=face" alt="Lisa Zhang" class="topper-img">
                    </div>
                    <div class="topper-name">Lisa Zhang</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2019-2020 Batch -->
        <div class="batch-section">
            <div class="batch-year">2019-2020</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=200&h=200&fit=crop&crop=face" alt="Marcus Johnson" class="topper-img">
                    </div>
                    <div class="topper-name">Marcus Johnson</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2018-2019 Batch with 4 toppers -->
        <div class="batch-section">
            <div class="batch-year">2018-2019</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=face" alt="Sarah Lee" class="topper-img">
                    </div>
                    <div class="topper-name">Sarah Lee</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
                <div class="topper-card">
                    <div class="stats-overlay">Rank #2</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face" alt="Michael Chen" class="topper-img">
                    </div>
                    <div class="topper-name">Michael Chen</div>
                    <div class="achievement-badge">🥈 Runner-up</div>
                </div>
                <div class="topper-card">
                    <div class="stats-overlay">Rank #3</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b632?w=200&h=200&fit=crop&crop=face" alt="Priya Patel" class="topper-img">
                    </div>
                    <div class="topper-name">Priya Patel</div>
                    <div class="achievement-badge">🥉 Third Place</div>
                </div>
                <div class="topper-card">
                    <div class="stats-overlay">Rank #4</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face" alt="David Kim" class="topper-img">
                    </div>
                    <div class="topper-name">David Kim</div>
                    <div class="achievement-badge">⭐ Excellence</div>
                </div>
            </div>
        </div>
        
        <!-- 2017-2018 Batch with 3 toppers -->
        <div class="batch-section">
            <div class="batch-year">2017-2018</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=face" alt="Emily Wilson" class="topper-img">
                    </div>
                    <div class="topper-name">Emily Wilson</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
                <div class="topper-card">
                    <div class="stats-overlay">Rank #2</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face" alt="Robert Garcia" class="topper-img">
                    </div>
                    <div class="topper-name">Robert Garcia</div>
                    <div class="achievement-badge">🥈 Runner-up</div>
                </div>
                <div class="topper-card">
                    <div class="stats-overlay">Rank #3</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b632?w=200&h=200&fit=crop&crop=face" alt="Anya Sharma" class="topper-img">
                    </div>
                    <div class="topper-name">Anya Sharma</div>
                    <div class="achievement-badge">🥉 Third Place</div>
                </div>
            </div>
        </div>
        
        <!-- 2016-2017 Batch -->
        <div class="batch-section">
            <div class="batch-year">2016-2017</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?w=200&h=200&fit=crop&crop=face" alt="Sophia Martinez" class="topper-img">
                    </div>
                    <div class="topper-name">Sophia Martinez</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2015-2016 Batch -->
        <div class="batch-section">
            <div class="batch-year">2015-2016</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face" alt="James Anderson" class="topper-img">
                    </div>
                    <div class="topper-name">James Anderson</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2014-2015 Batch -->
        <div class="batch-section">
            <div class="batch-year">2014-2015</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b632?w=200&h=200&fit=crop&crop=face" alt="Mia Thompson" class="topper-img">
                    </div>
                    <div class="topper-name">Mia Thompson</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2013-2014 Batch -->
        <div class="batch-section">
            <div class="batch-year">2013-2014</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face" alt="Kevin Liu" class="topper-img">
                    </div>
                    <div class="topper-name">Kevin Liu</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2012-2013 Batch -->
        <div class="batch-section">
            <div class="batch-year">2012-2013</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=200&h=200&fit=crop&crop=face" alt="Isabella Rodriguez" class="topper-img">
                    </div>
                    <div class="topper-name">Isabella Rodriguez</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
        
        <!-- 2011-2012 Batch -->
        <div class="batch-section">
            <div class="batch-year">2011-2012</div>
            <div class="toppers-grid">
                <div class="topper-card">
                    <div class="stats-overlay">Rank #1</div>
                    <div class="topper-img-container">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face" alt="Ryan Thomas" class="topper-img">
                    </div>
                    <div class="topper-name">Ryan Thomas</div>
                    <div class="achievement-badge">🏆 Top Scorer</div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>