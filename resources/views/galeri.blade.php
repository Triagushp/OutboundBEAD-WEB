<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outbound Gallery</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2c3e50 0%, #4a6741 100%);
            min-height: 100vh;
            padding-top: 80px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .gallery-container {
            padding: 60px 0;
            color: white;
        }
        
        .gallery-title {
            font-size: 3rem;
            font-weight: 300;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .gallery-subtitle {
            font-size: 1.1rem;
            margin-bottom: 3rem;
            text-align: center;
            opacity: 0.9;
        }
        
        .nav-tabs {
            justify-content: center;
            border: none;
            margin-bottom: 3rem;
        }
        
        .nav-tabs .nav-link {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            margin: 0 10px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .nav-tabs .nav-link.active {
            background: #17a2b8;
            color: white;
            box-shadow: 0 4px 15px rgba(23, 162, 184, 0.4);
        }
        
        .nav-tabs .nav-link:hover {
            background: rgba(23, 162, 184, 0.8);
            transform: translateY(-2px);
        }
        
        .gallery-item {
            margin-bottom: 30px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .tall-item img {
            height: 530px;
        }
        
        .load-more-btn {
            background: transparent;
            color: #17a2b8;
            border: 2px solid #17a2b8;
            border-radius: 25px;
            padding: 12px 40px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 2rem;
        }
        
        .load-more-btn:hover {
            background: #17a2b8;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(23, 162, 184, 0.3);
        }
        
        .video-info {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
        }
        
        .video-info h5 {
            color: white;
            font-weight: 600;
        }
        
        iframe {
            border: none;
        }
        
        @media (max-width: 768px) {
            .gallery-title {
                font-size: 2.5rem;
            }
            
            .gallery-item img {
                height: 200px;
            }
            
            .tall-item img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
        @include('layoutfrontend.navbar')

    <div class="container gallery-container">
        <div class="row">
            <div class="col-12">
                <h1 class="gallery-title">Outbound Gallery</h1>
                <p class="gallery-subtitle">Explore real moments from our adventures</p>
            </div>
        </div>
        
        <!-- Navigation Tabs -->
        <ul class="nav nav-tabs" id="galleryTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab">
                    <i class="fas fa-camera me-2"></i>Photos
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab">
                    <i class="fas fa-video me-2"></i>Videos
                </button>
            </li>
        </ul>
        
        <!-- Tab Content -->
        <div class="tab-content" id="galleryTabContent">
            <div class="tab-pane fade show active" id="photos" role="tabpanel">
                <div class="row">
                    <!-- Hiking Group -->
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Mountain Hiking Adventure" class="img-fluid">
                        </div>
                    </div>
                    
                    <!-- Rafting -->
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="White Water Rafting" class="img-fluid">
                        </div>
                    </div>
                    
                    <!-- Camping Sunset -->
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Mountain Camping at Sunset" class="img-fluid">
                        </div>
                    </div>
                    
                    <!-- Team Building -->
                    <div class="col-lg-6 col-md-6">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Team Building Activity" class="img-fluid">
                        </div>
                    </div>
                    
                    <!-- Forest Trekking -->
                    <div class="col-lg-6 col-md-6">
                        <div class="gallery-item tall-item">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Forest Trekking Adventure" class="img-fluid">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn load-more-btn">Load More</button>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="videos" role="tabpanel">
                <div class="row">
                    <!-- Video 1 -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="gallery-item">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                                        title="Adventure Video 1" 
                                        allowfullscreen
                                        style="border-radius: 15px;">
                                </iframe>
                            </div>
                            <div class="video-info p-3">
                                <h5 class="mb-1">Mountain Adventure</h5>
                                <p class="mb-0 text-muted small">Epic hiking journey through the mountains</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video 2 -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="gallery-item">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/jNQXAC9IVRw" 
                                        title="Adventure Video 2" 
                                        allowfullscreen
                                        style="border-radius: 15px;">
                                </iframe>
                            </div>
                            <div class="video-info p-3">
                                <h5 class="mb-1">White Water Rafting</h5>
                                <p class="mb-0 text-muted small">Thrilling rafting experience</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video 3 -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="gallery-item">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/M7lc1UVf-VE" 
                                        title="Adventure Video 3" 
                                        allowfullscreen
                                        style="border-radius: 15px;">
                                </iframe>
                            </div>
                            <div class="video-info p-3">
                                <h5 class="mb-1">Team Building Activities</h5>
                                <p class="mb-0 text-muted small">Fun team building challenges</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video 4 -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="gallery-item">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" 
                                        title="Adventure Video 4" 
                                        allowfullscreen
                                        style="border-radius: 15px;">
                                </iframe>
                            </div>
                            <div class="video-info p-3">
                                <h5 class="mb-1">Forest Camping</h5>
                                <p class="mb-0 text-muted small">Peaceful camping in the wilderness</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn load-more-btn">Load More Videos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @include('layoutfrontend.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add click effect to gallery items
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                // Add a subtle click effect
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
        
        // Load more functionality
        document.querySelector('.load-more-btn').addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
            
            // Simulate loading
            setTimeout(() => {
                this.innerHTML = 'Load More';
                // Here you would typically load more images
            }, 2000);
        });
    </script>
</body>
</html>