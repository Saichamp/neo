<?php
// Gallery data with mixed size images
$gallery_images = [
    ['src' => 'https://images.unsplash.com/photo-1493807394496-2d6d8a70dc5f?ixlib=rb-1.2.1&auto=format&w=800&h=600', 'desc' => 'Modern kitchen interior design'],
    ['src' => 'https://images.unsplash.com/photo-1568996550942-bff3caa44949?ixlib=rb-1.2.1&auto=format&w=600&h=900', 'desc' => 'Minimalist workspace setup'],
    ['src' => 'https://images.unsplash.com/photo-1484942835385-dcb3923c11e1?ixlib=rb-1.2.1&auto=format&w=1000&h=800', 'desc' => 'Cozy reading nook'],
    ['src' => 'https://images.unsplash.com/photo-1428364685224-aa2d596d2cf0?ixlib=rb-1.2.1&auto=format&w=800&h=600', 'desc' => 'Urban street photography'],
    ['src' => 'https://images.unsplash.com/photo-1586522471252-68f4b108ff2a?ixlib=rb-1.2.1&auto=format&w=600&h=900', 'desc' => 'Architectural details'],
    ['src' => 'https://images.unsplash.com/photo-1450791985525-55b3bc4aae7f?ixlib=rb-1.2.1&auto=format&w=1200&h=800', 'desc' => 'Mountain hiking adventure'],
    ['src' => 'https://images.unsplash.com/photo-1557478551-8d6953a259eb?ixlib=rb-1.2.1&auto=format&w=800&h=600', 'desc' => 'Vintage car collection'],
    ['src' => 'https://images.unsplash.com/photo-1587239101950-094ae8291a6a?ixlib=rb-1.2.1&auto=format&w=600&h=900', 'desc' => 'Sunset landscape'],
    ['src' => 'https://images.unsplash.com/photo-1464777649758-8747547e793f?ixlib=rb-1.2.1&auto=format&w=1000&h=800', 'desc' => 'Beach vacation memories'],
    ['src' => 'https://images.unsplash.com/photo-1566525015882-701472b418fd?ixlib=rb-1.2.1&auto=format&w=800&h=600', 'desc' => 'Food photography']
];

// Function to determine image class based on aspect ratio
function getImageClass($src) {
    if (preg_match('/w=(\d+)&h=(\d+)/', $src, $matches)) {
        $width = (int)$matches[1];
        $height = (int)$matches[2];
        $ratio = $width / $height;
        
        if ($ratio > 1.4) return 'wide';
        if ($ratio < 0.7) return 'tall';
        return 'square';
    }
    return 'square';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal Image Gallery</title>
    <style>
        :root {
            --grid-gap: 15px;
            --min-col-width: 150px;
            --row-height: 150px;
            --tall-row-span: 2;
            --wide-col-span: 2;
            --card-radius: 8px;
            --card-shadow: 0 2px 5px rgba(0,0,0,0.1);
            --card-shadow-hover: 0 5px 15px rgba(0,0,0,0.2);
            --desc-bg: rgba(0,0,0,0.7);
            --desc-padding: 10px;
            --desc-font-size: 14px;
            --transition-speed: 0.3s;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
            padding: 0;
            margin: 0;
        }
        
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .gallery-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .gallery-title {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 24px;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--min-col-width), 1fr));
            grid-auto-rows: var(--row-height);
            grid-auto-flow: dense;
            gap: var(--grid-gap);
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: var(--card-radius);
            box-shadow: var(--card-shadow);
            transition: all var(--transition-speed) ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.02);
            box-shadow: var(--card-shadow-hover);
            z-index: 1;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        /* Image size classes */
        .square {
            /* Default - no special sizing */
        }
        
        .wide {
            grid-column: span var(--wide-col-span);
        }
        
        .tall {
            grid-row: span var(--tall-row-span);
        }
        
        /* Description overlay */
        .desc {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--desc-bg);
            color: white;
            padding: var(--desc-padding);
            font-size: var(--desc-font-size);
            text-align: center;
            transform: translateY(100%);
            transition: transform var(--transition-speed) ease;
        }
        
        .gallery-item:hover .desc {
            transform: translateY(0);
        }
        
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
        
        /* Mobile-first approach with consistent layout */
        @media (min-width: 480px) {
            :root {
                --min-col-width: 180px;
                --row-height: 180px;
            }
        }
        
        @media (min-width: 768px) {
            :root {
                --min-col-width: 200px;
                --row-height: 200px;
            }
        }
        
        @media (min-width: 992px) {
            :root {
                --min-col-width: 250px;
                --row-height: 250px;
            }
        }
        
        @media (min-width: 1200px) {
            :root {
                --min-col-width: 300px;
                --row-height: 300px;
            }
        }
        
        /* Touch devices - show description on tap */
        @media (hover: none) {
            .desc {
                transform: translateY(0);
                opacity: 0;
                transition: opacity var(--transition-speed) ease;
            }
            
            .gallery-item:active .desc,
            .gallery-item:focus .desc {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="gallery-container">
        <h1 class="gallery-title">Responsive Image Gallery</h1>
        
        <ul class="gallery-grid">
            <?php foreach ($gallery_images as $image): ?>
                <?php $imgClass = getImageClass($image['src']); ?>
                <li class="gallery-item">
                    <img src="<?= htmlspecialchars($image['src']) ?>" 
                         alt="<?= htmlspecialchars($image['desc']) ?>" 
                         class="<?= htmlspecialchars($imgClass) ?>"
                         loading="lazy">
                    <div class="desc"><?= htmlspecialchars($image['desc']) ?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <?php include 'footer.php'; ?>

    <script>
        // Make descriptions permanently visible on mobile after first tap
        document.addEventListener('DOMContentLoaded', function() {
            if (matchMedia('(hover: none)').matches) {
                const items = document.querySelectorAll('.gallery-item');
                
                items.forEach(item => {
                    item.addEventListener('click', function() {
                        this.classList.add('show-desc');
                        const desc = this.querySelector('.desc');
                        desc.style.opacity = '1';
                    }, {once: true});
                });
            }
        });
    </script>
</body>
</html>