<style>
    .contact-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.contact-container h1 {
    text-align: center;
    margin-bottom: 40px;
    color: #2c3e50;
}

.contact-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.contact-info, .contact-form {
    flex: 1;
    min-width: 300px;
}

.contact-info h2, .contact-form h2 {
    margin-bottom: 20px;
    color: #2c3e50;
}

.contact-info p {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.contact-info i {
    margin-right: 10px;
    color: #3498db;
    width: 20px;
    text-align: center;
}

.social-links {
    margin: 30px 0;
}

.social-links a {
    display: inline-block;
    margin-right: 15px;
    color: #2c3e50;
    font-size: 20px;
    transition: color 0.3s;
}

.social-links a:hover {
    color: #3498db;
}

.map-container {
    margin-top: 30px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-family: inherit;
    font-size: 16px;
}

.form-group textarea {
    resize: vertical;
}

.submit-btn {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #2980b9;
}

@media (max-width: 768px) {
    .contact-content {
        flex-direction: column;
    }
    
    .map-container {
        height: 250px;
    }
}
</style>
<?php include('header.php'); ?>

<div class="contact-container">
    <h1>Contact Us</h1>
    
    <div class="contact-content">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><i class="fas fa-map-marker-alt"></i> 123 School Street, Education City</p>
            <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
            <p><i class="fas fa-envelope"></i> info@ourschool.edu</p>
            
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            
            <!-- Google Map -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.853037756944!2d77.2098572150816!3d28.57064498244145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2a20a3d2d3f%3A0x6b0e6e1b2e6a0a6d!2sIndia%20Gate!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
        
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="process_contact.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>