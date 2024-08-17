<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .about-section {
      padding: 60px 0;
    }
    .about-icon {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 20px;
    }
    .about-card {
      transition: transform 0.3s;
    }
    .about-card:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">School Services</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="container about-section">
    <div class="text-center">
      <i class="fas fa-school about-icon"></i>
      <h2 class="my-4">About Us</h2>
      <p>Welcome to our school! We are dedicated to providing high-quality education and training across various fields. Our experienced tutors and comprehensive programs are designed to help students excel in their studies and beyond.</p>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <div class="card about-card text-center">
          <div class="card-body">
            <i class="fas fa-book-reader about-icon"></i>
            <h5 class="card-title">Grade 8-9 Tuitions</h5>
            <p class="card-text">We offer specialized tuitions for Grade 8-9 students in Mathematics, English, Integrated Science, Business Studies, and Social Studies to ensure a strong foundation for higher education.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card about-card text-center">
          <div class="card-body">
            <i class="fas fa-graduation-cap about-icon"></i>
            <h5 class="card-title">Grade 10-12 Tuitions</h5>
            <p class="card-text">Our advanced tuitions for Grade 10-12 students cover Mathematics, English, Biology, Chemistry, Physics, Additional Mathematics, and Principles of Accounts, preparing them for academic excellence.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card about-card text-center">
          <div class="card-body">
            <i class="fas fa-fish about-icon"></i>
            <h5 class="card-title">Fish Farming Training</h5>
            <p class="card-text">We provide comprehensive training in fish farming, business, and entrepreneurship. Our consultancy services help fish farmers enhance their productivity and profitability.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card about-card text-center">
          <div class="card-body">
            <i class="fas fa-lightbulb about-icon"></i>
            <h5 class="card-title">Entrepreneurship Mind</h5>
            <p class="card-text">Join our monthly event to share and learn business ideas. By paying a membership fee of $20 (540 Zambian Kwacha), you can participate in our interactive sessions and grow your entrepreneurial skills.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card about-card text-center">
          <div class="card-body">
            <i class="fas fa-laptop-code about-icon"></i>
            <h5 class="card-title">Research & Technology</h5>
            <p class="card-text">We offer research and technology services to the public, including software and website development. Hire us to build customized solutions that meet your needs.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- <?php require_once("./myfooter/footer.php");?> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
