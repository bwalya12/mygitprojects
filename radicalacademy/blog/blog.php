<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="mystyle11.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <!-- header.php -->
  <?php include("blogheader.php") ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Blog Post Title</h2>
            <h6 class="card-subtitle mb-2 text-muted">Author Name</h6>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio a ligula lobortis consectetur. Quisque rutrum felis nec enim scelerisque posuere. Proin auctor tempus est, sit amet malesuada nulla viverra vel.
            </p>
            <p class="card-text">
              Sed malesuada, orci vel finibus rutrum, libero nisi mattis quam, et luctus est sapien ut justo. Integer vitae urna tincidunt, viverra ipsum sit amet, ultrices nunc. Nullam rutrum consequat quam in hendrerit.
            </p>
            <p class="card-text">
              Duis venenatis ipsum ac eros dapibus, id lacinia ante vehicula. In hac habitasse platea dictumst. Nam ut tincidunt purus, at tristique libero.
            </p>
            <p class="card-text"><small class="text-muted">Posted on June 1, 2024</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- FOOTER -->
  <?php include("footer.php"); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>