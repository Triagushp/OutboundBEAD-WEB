<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bead - Besar Anugrah Djaya</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2F3D4E 0%, #1a252f 50%, #0f1419 100%);
            min-height: 100vh;
            padding-top: 60px;
            font-family: 'Arial', sans-serif;
        }
        
        .main-container {
            padding: 60px 0;
        }
        
        .header-text {
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }
        
        .header-text h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .header-text p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .destination-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }
        
        .destination-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }
        
        .card-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .popular-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #6f42c1;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .card-content {
            padding: 25px;
        }
        
        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        
        .price-info {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .includes-list {
            margin-bottom: 20px;
        }
        
        .includes-title {
            font-weight: bold;
            color: #666;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        
        .includes-items {
            font-size: 0.85rem;
            color: #777;
        }
        
        .includes-items div {
            margin-bottom: 3px;
        }
        
        .button-group {
            display: flex;
            gap: 10px;
        }
        
        .book-btn {
            background: linear-gradient(45deg, #20c997, #17a2b8);
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            font-weight: bold;
            flex: 1;
            transition: all 0.3s ease;
        }
        
        .book-btn:hover {
            background: linear-gradient(45deg, #17a2b8, #20c997);
            transform: translateY(-2px);
            color: white;
        }
        
        .details-btn {
            background: linear-gradient(45deg, #6c757d, #495057);
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            font-weight: bold;
            flex: 1;
            transition: all 0.3s ease;
        }
        
        .details-btn:hover {
            background: linear-gradient(45deg, #495057, #6c757d);
            transform: translateY(-2px);
            color: white;
        }
        
        .map-container {
            margin-top: 60px;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .map-title {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: bold;
        }
        
        #map {
            height: 400px;
            border-radius: 10px;
        }
        
        /* Modal styles */
        .modal-header {
            background: linear-gradient(45deg, #2F3D4E, #1a252f);
            color: white;
            border-bottom: none;
        }
        
        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }
        
        .modal-body {
            padding: 30px;
        }
        
        .detail-section {
            margin-bottom: 25px;
        }
        
        .detail-title {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .detail-content {
            color: #666;
            line-height: 1.6;
        }
        
        .itinerary-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            border-left: 4px solid #20c997;
        }
        
        .day-title {
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    @include('layoutfrontend.navbar')

    <div class="container main-container">
        <div class="header-text">
            <h2>Pilih Paket Yang Anda Ingin Reservasi</h2>
            <p>Kami akan bantu kegiatan outbound kalian</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="destination-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?w=500&h=200&fit=crop');">
                        <div class="popular-badge">Popular</div>
                    </div>
                    <div class="card-content">
                        <div class="card-title">Paket Anak - Anak</div>
                        <div class="price-info">Rp.50.000 per orang</div>
                        <div class="includes-list">
                            <div class="includes-title">Includes:</div>
                            <div class="includes-items">
                                <div>🏊‍♂️ Water</div>
                                <div>🎯 Activity</div>
                                <div>🏨 Stay in camp</div>
                                <div>🍽️ Food</div>
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn details-btn" data-bs-toggle="modal" data-bs-target="#raftingModal">View Details</button>
                            <button class="btn book-btn"  onclick="window.location.href='pembayaran'">Reservasi</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-5 col-lg-4">
                <div class="destination-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1464822759844-d150baef493e?w=500&h=200&fit=crop');">
                    </div>
                    <div class="card-content">
                        <div class="card-title">Paket Dewasa</div>
                        <div class="price-info">Rp.75.000 per orang</div>
                        <div class="includes-list">
                            <div class="includes-title">Includes:</div>
                            <div class="includes-items">
                                <div>⛺ Camp</div>
                                <div>🥾 Hiking</div>
                                <div>🍽️ Meals</div>
                                <div>🔥 Campfire</div>
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn details-btn" data-bs-toggle="modal" data-bs-target="#campingModal">View Details</button>
                            <button class="btn book-btn"  onclick="window.location.href='pembayaran'">Reservasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-container">
            <h3 class="map-title">Lokasi CV. Besar Anugrah Djaya</h3>
            <div id="map"></div>
        </div>
    </div>

    <!-- Rafting Modal -->
    <div class="modal fade" id="raftingModal" tabindex="-1" aria-labelledby="raftingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="raftingModalLabel">Rafting Adventure - Probolinggo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="detail-section">
                        <div class="detail-title">Package Description</div>
                        <div class="detail-content">
                            Experience the thrill of white-water rafting in the beautiful rivers of Probolinggo. This adventure package is perfect for those seeking excitement and natural beauty. Navigate through exciting rapids while enjoying stunning scenery of East Java's landscape.
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <div class="detail-title">What's Included</div>
                        <div class="detail-content">
                            <div>🏊‍♂️ <strong>Water Activities:</strong> Professional rafting equipment and safety gear</div>
                            <div>🎯 <strong>Activity:</strong> Guided rafting expedition with experienced instructors</div>
                            <div>🏨 <strong>Stay in Camp:</strong> Comfortable camping accommodation for 1 night</div>
                            <div>🍽️ <strong>Food:</strong> 3 meals (dinner, breakfast, lunch) + snacks</div>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <div class="detail-title">Itinerary</div>
                        <div class="itinerary-item">
                            <div class="day-title">Day 1</div>
                            <div>08:00 - Departure from meeting point</div>
                            <div>10:00 - Arrival and safety briefing</div>
                            <div>11:00 - Start rafting adventure</div>
                            <div>15:00 - Check-in to camp</div>
                            <div>19:00 - Dinner and campfire activities</div>
                        </div>
                        <div class="itinerary-item">
                            <div class="day-title">Day 2</div>
                            <div>07:00 - Breakfast</div>
                            <div>09:00 - Additional water activities</div>
                            <div>12:00 - Lunch and departure preparation</div>
                            <div>14:00 - Return journey</div>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <div class="detail-title">Requirements</div>
                        <div class="detail-content">
                            <div>• Minimum age: 12 years old</div>
                            <div>• Basic swimming ability required</div>
                            <div>• Good physical condition</div>
                            <div>• Bring change of clothes and personal items</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn book-btn">Book This Package</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Camping Modal -->
    <div class="modal fade" id="campingModal" tabindex="-1" aria-labelledby="campingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="campingModalLabel">Mountain Camping - Batu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="detail-section">
                        <div class="detail-title">Package Description</div>
                        <div class="detail-content">
                            Escape to the mountains of Batu for an unforgettable camping experience. Enjoy fresh mountain air, stunning sunrise views, and peaceful nature surroundings. Perfect for those looking to disconnect from city life and reconnect with nature.
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <div class="detail-title">What's Included</div>
                        <div class="detail-content">
                            <div>⛺ <strong>Camp:</strong> Tent accommodation with sleeping bags and mats</div>
                            <div>🥾 <strong>Hiking:</strong> Guided hiking trails with scenic viewpoints</div>
                            <div>🍽️ <strong>Meals:</strong> All meals including BBQ dinner and breakfast</div>
                            <div>🔥 <strong>Campfire:</strong> Evening campfire with games and stories</div>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <div class="detail-title">Itinerary</div>
                        <div class="itinerary-item">
                            <div class="day-title">Day 1</div>
                            <div>14:00 - Meeting point and departure</div>
                            <div>16:00 - Arrival at base camp</div>
                            <div>16:30 - Tent setup and orientation</div>
                            <div>17:30 - Sunset hiking</div>
                            <div>19:00 - BBQ dinner</div>
                            <div>20:30 - Campfire activities</div>
                        </div>
                        <div class="itinerary-item">
                            <div class="day-title">Day 2</div>
                            <div>05:30 - Sunrise viewing</div>
                            <div>08:00 - Breakfast</div>
                            <div>09:30 - Morning hike</div>
                            <div>12:00 - Lunch and pack up</div>
                            <div>14:00 - Departure</div>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <div class="detail-title">Requirements</div>
                        <div class="detail-content">
                            <div>• Suitable for all ages</div>
                            <div>• Basic fitness level required for hiking</div>
                            <div>• Warm clothing for cold mountain nights</div>
                            <div>• Personal toiletries and medications</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn book-btn">Book This Package</button>
                </div>
            </div>
        </div>
    </div>


     @include('layoutfrontend.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    <script>
        // Initialize the map for Jl. Wisma Katang III, Katang, Sukorejo, Ngasem, Kediri
        // Coordinates for the specific location in Kediri, East Java
        const latitude = -7.8057; // Latitude for Ngasem area, Kediri
        const longitude = 112.0406; // Longitude for Ngasem area, Kediri
        
        const map = L.map('map').setView([latitude, longitude], 13);
        
        // Add tile layer (map style)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            
        }).addTo(map);
        
        // Add marker
        L.marker([latitude, longitude])
            .addTo(map)
            .bindPopup('<strong>Jl. Wisma Katang III No.C6</strong><br>Katang, Sukorejo, Kec. Ngasem<br>Kabupaten Kediri, Jawa Timur 64182')
            .openPopup();
        
        // Optional: Add click event to get coordinates (for testing)
        map.on('click', function(e) {
            console.log('Latitude: ' + e.latlng.lat + ', Longitude: ' + e.latlng.lng);
        });
    </script>
</body>
</html>