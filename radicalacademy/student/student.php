<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        
    </style>
</head>

<body>
    <!-- LINK WITH THE COMMON HEADER -->
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-4 text-white">Student Portal Dashboard</h1>
                <!--<h3>choose the subject that you would want want to learn and make payment</h3>-->
                <div class="d-flex flex-column align-items-center">
                    <!-- Logout Button -->
                    <button class="btn btn-danger mb-3" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>

                    <!-- Subjects Button with Dropdown -->
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book"></i> Subjects
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="math.php">Maths</a></li>
                            <li><a class="dropdown-item" href="english.php">English</a></li>
                            <li><a class="dropdown-item" href="biology.php">Biology</a></li>
                            <li><a class="dropdown-item" href="chemistry.php">Chemistry</a></li>
                            <li><a class="dropdown-item" href="physics.php">Physics</a></li>
                            <li><a class="dropdown-item" href="accounts.php">Principles of Accounts</a></li>
                        </ul>
                    </div>

                    <!-- Profile Settings Button -->
                    <button class="btn btn-warning mb-3" onclick="profileSettings()">
                        <i class="fas fa-user-cog"></i> Profile Settings
                    </button>

                    <!-- YouTube Videos Button -->
                    <button class="btn btn-danger mb-3" onclick="openYouTubeVideos()">
                        <i class="fab fa-youtube"></i> YouTube Videos
                    </button>

                    <!-- Facebook Videos Button -->
                    <button class="btn btn-primary mb-3" onclick="openFacebookVideos()">
                        <i class="fab fa-facebook"></i> Facebook Videos
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function logout() {
            // Add logout functionality here
            alert("Logout button clicked");
        }

        function profileSettings() {
            // Add profile settings functionality here
            alert("Profile Settings button clicked");
        }

        function openYouTubeVideos() {
            // Add functionality to open YouTube videos here
            alert("YouTube Videos button clicked");
        }

        function openFacebookVideos() {
            // Add functionality to open Facebook videos here
            alert("Facebook Videos button clicked");
        }
    </script>
   
</body>

</html>