<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Listings</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
        }
    </style> 
</head>
<body>

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="home">JobSeeker</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="home">Home</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="job">Job</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signin">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <div class="bg-light py-4">
    <div class="container">
      <h1 class="text-center mb-4">Find Your Next Job</h1>
      <form class="row g-2 justify-content-center">
        <div class="col-md-5">
          <input type="text" class="form-control" placeholder="Job Title or Keywords">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Location">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
  </div>

  
  <div class="container py-5">
    <h2 class="text-center mb-4">Available Jobs</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Software Engineer</h5>
            <p class="card-text">Location: Seremban</p>
            <p class="card-text">Salary: RM 7000 - RM 8500/Month</p>
            <a href="#" class="btn btn-primary">View Job</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Marketing Specialist</h5>
            <p class="card-text">Location: Nilai</p>
            <p class="card-text">Salary: RM 3500 - RM 4000/Month</p>
            <a href="#" class="btn btn-primary">View Job</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">UI/UX Designer</h5>
            <p class="card-text">Location: Senawang</p>
            <p class="card-text">Salary: RM 4000 - RM 4500/Month</p>
            <a href="#" class="btn btn-primary">View Job</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <footer class="py-3 bg-dark text-light text-center">
    <div class="container">
      <p>&copy; 2024 FitWeb. All rights reserved.</p>
    </div>
  </footer>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
