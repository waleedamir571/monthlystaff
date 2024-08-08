<?php

include 'backend/config/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monthly Staff</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style2.css">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light1 inter">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Freelance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="inline-grid">
                    <a class="btn btn-primary me-2 m-b2" href="#">Get hired</a>
                    <a class="btn btn-primary" href="register">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading inter">Companies: Hire talented Pakistani </br> developers from $300/pm</h1>
                    <p class="inter">Connect directly with top-tier Pakistani developers with exceptional skills, honest
                        pricing, and real and unfiltered reviews.
                        ZERO fees for both the company and developer.</p>
                   <a href="#hire-now"> <button class="btn btn-primary" id="">Hire now</button></a>
                </div>
            </div>
        </div>

    </div>

    <div class="container" >
    <div class="row">
      <?php
    //   include('db_connection.php');

      $sql = "SELECT * FROM developers";
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              ?>
              <div class="col-md-3" id="hire-now">
                  <div class="developer-card">
                      <p>$<?php echo htmlspecialchars($row["salary"]); ?> pm | <?php echo htmlspecialchars($row["experience"]); ?> Years</p>
                      <img src="assets/img/<?php echo htmlspecialchars($row["images"]); ?>" alt="<?php echo htmlspecialchars($row["name"]); ?>">
                      <h5><?php echo htmlspecialchars($row["name"]); ?></h5>
                      <p><?php echo htmlspecialchars($row["stack"]); ?></p>
                      <p><?php echo htmlspecialchars($row["city"]); ?></p>
                      <div class="rating">
                          <span>★★★★★</span>
                      </div>
                      <a href="https://api.whatsapp.com/send/?phone=<?php echo htmlspecialchars($row["phone"]); ?>&text=HELLO&app_absent=0" class="whatsapp-btn">
                          <img class="w-30" src="assets/img/WhatsApp.png" alt=""> WhatsApp Me
                      </a>
                  </div>
              </div>
              <?php
          }
      } else {
          echo "No records found.";
      }

      $connection->close();
      ?>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>