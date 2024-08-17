<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .contact-info {
            margin-top: 20px;
        }
        .contact-info h5 {
            margin-bottom: 15px;
        }
        .map-container {
            height: 300px;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Radical Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Contact Info -->
<div class="container contact-info">
    <div class="row">
        <div class="col-md-6">
            <h5>Contact Information</h5>
            <p><i class="fas fa-map-marker-alt"></i> Address: House Number: 600 Buchi, Kitwe, Zambia</p>
            <p><i class="fas fa-phone"></i> Contact: +260-964-460218</p>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@radicalacademy.top">info@radicalacademy.top</a></p>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <h5>Our Location</h5>
            <br>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13860.363669917743!2d28.21388105702748!3d-12.804289852924026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f1bb4cce0f87%3A0x77c4fda9a1aa2b21!2sAnglican%20Church%2C%20Kitwe%2C%20Zambia!5e0!3m2!1sen!2sus!4v1626033547865!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap and JQuery Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
