<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Seeker Website</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="nav-link active" href="home">Home</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="job">Job</a>
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
    <div class="container text-center">
      <h1>Find Your Dream Job</h1>
      <p class="lead">Thousands of jobs are waiting for you. Start your search today!</p>
      <form class="row g-2 justify-content-center">
        <div class="col-md-5">
          <input type="tautoext" class="form-control" placeholder="Job Title or Keywords">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Location">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Search Jobs</button>
        </div>
      </form>
    </div>
  </div>

  
  <div class="container py-5">
    <h2 class="text-center">Featured Jobs</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Software Developer</h5>
            <p class="card-text">Company: TechCorp</p>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Graphic Designer</h5>
            <p class="card-text">Company: Creative Studio</p>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Marketing Specialist</h5>
            <p class="card-text">Company: MarketPro</p>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="bg-light py-5">
    <div class="container">
      <h2 class="text-center">What Our Users Say</h2>
      <div class="row">
        <div class="col-md-4">
          <blockquote class="blockquote text-center">
            <p>"I found my dream job in just a week!"</p>
            <footer class="blockquote-footer">Sarah.</footer>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote class="blockquote text-center">
            <p>"The job listings are always up-to-date and accurate."</p>
            <footer class="blockquote-footer">Mick.</footer>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote class="blockquote text-center">
            <p>"A great platform to connect with top companies."</p>
            <footer class="blockquote-footer">Amalia.</footer>
          </blockquote>
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
