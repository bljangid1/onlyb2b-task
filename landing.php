<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
  </head>
  <style>
    body{
font-family: Arial, Helvetica, sans-serif;
.banner{
  width: 100%;
}
.banner img{
  display: block;
  width: 100%;
  height: auto;
  aspect-ratio: 2003/700;
  object-fit: cover;
}
    }

    @media (max-width:768px) {
      .ebook-btn{
        text-align: center;
      }
      .cta-button{
        padding: 8px 15 px !important;
      }
    }
  </style>
  <body>
    <header class="bg-dark" style="padding: 10px 20px;">
      <img src="red-hat.png" alt="" width="20%" height="auto">
    </header>
    <!-- <section class="banner-section" style="width: 100%;">
      <div class="container-fluid p-0">
          <div class="col-12">
        <img src="banner.png" alt="" height="700px" width="100%" style="object-fit: contain; display: block;">
        </div>
    </section> -->
    <section class="banner">
      <img src="Banner-Design-1.png" alt="">
    </section>
    <!-- <div class="container-fluids"> -->
        <!-- <div class="row">
          <div class="col-12">
        <img src="banner.png" alt="" height="700px" width="100%" style="object-fit: cover;">
        </div> -->

        <div class="container-fluid mt-3">
          <div class="row">
            <div class="col-md-6" style="padding: 30px;">
              <span style="color: red; font-weight: 600;">
                <p>FREE E-BOOK</p>
              </span>
              <br>
              <div>
                <h3>Zero trust security for
government agencies</h3>
              </div>
              <br>
              <div class="content">
                <p>Government agencies face evolving cyber threats across
applications, devices and infrastructure. This e-book explains
the principles of zero trust and how agencies can plan a more
resilient security approach.</p>
              </div>
              <br><br>
              <div class="list" style="background-color: #f2f2f2; padding: 30px;">
                <p>
                 <strong> What you will learn </strong>
                  <ul>
                  <li>Understand the principles of zero trust security.</li>
                  <li>Explore the seven pillars of zero trust maturity.</li>
                  <li>Learn how Red Hat can support your zero trust journey.</li>
                  </ul>
                </p>
              </div>
              <br>
              <br>  
              <div class="ebook-btn">
<a href="#subform"><button type="button" class="btn w-50 cta-button" style="background-color: red; color:#fff; padding: 10px 20px;">Download E-Book</button></a>

              </div>
            </div>
            <div class="col-md-6" style="padding: 30px;" id="subform">
              <div class="form" style="border: 1px solid #e0e0e0; background-color: #f7f7f7; padding: 30px;">
                <h2>Download the e-book</h2>
                <br>
                <span>Complete all fields below.</span>
                <form method="POST" id="download-form">
                  <div class="mt-3">
                    <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname" required>
                  </div><div class="mt-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                  </div><div class="mt-3">
                    <input type="email" class="form-control" placeholder="Business Email" name="email" required>
                  </div><div class="mt-3">
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" minlength="7" maxlength="15" required>
                  </div><div class="mt-3">
                    <input type="text" class="form-control" placeholder="Job Title" name="job_title" required>
                  </div>
                  <div class="mt-3">
                    <select class="form-select" aria-label="Default select example" name="company_size" required>
  <option selected>Company Size</option>
  <option value="1-50">1-50</option>
  <option value="201-500">201-500</option>
  <option value="501-1,000">501-1,000</option>
  <option value="1,001 plus">1,001+</option>

</select>
                  </div>
                   <div class="mt-3">
                    <select class="form-select" aria-label="Default select example" name="industry" required>
  <option selected>Industry</option>
  <option value="Public Sector">Public Sector</option>
  <option value="Technology">Technology</option>
  <option value="Education">Education</option>
  <option value="Healthcare">Healthcare</option>
  <option value="Financial Services">Financial Services</option>
  <option value="Other">Other</option>

</select>
                  </div>
                  <div class="form-check mt-4">
  <input class="form-check-input" type="checkbox" name="term" value="Yes" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
   I agree to be contacted about this resource and
related products or service
  </label>
</div>
<br>
<div>
<center>
<button type="submit" class="btn w-100" style="background-color: red; color:#fff; padding: 10px 20px;">Download E-Book</button>
</center>
</div>        
</form>
              </div>
            </div>
          </div>
        </div>
    <!-- </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
<script>
  document.getElementById("download-form").addEventListener("submit",function(e){
    let firstname = document.getElementById("firstname").value.trim();
    if(firstname === ""){
      alert("enter first name");
      e.preventDefault();
      return;
    }
  })
</script>

  </body>
</html>


<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fname = trim($_POST["firstname"]) ?? "";
  $lname = trim($_POST["lastname"]) ?? "";
  $email = trim($_POST["email"]) ?? "";
  $phone = trim($_POST["phone_number"]) ?? "";
  $title = trim($_POST["job_title"]) ?? "";
  $company_size = trim($_POST["company_size"]) ?? "";
  $industry = trim($_POST["industry"]) ?? "";
  $Optin = isset($_POST["term"]) ? "Yes" : "No";

  try{

  $stmt = $pdo->prepare("INSERT INTO `data`(`fname`, `lname`, `email`, `phone`, `job_title`, `company_size`, `industry`, `opt_in`)
   VALUES(?,?,?,?,?,?,?,?)");

   $stmt->execute([
    $fname,
    $lname,
    $email,
    $phone,
    $title,
    $company_size,
    $industry,
    $Optin
   ]);

   echo"
   <script>
    alert('Data Inserted');
    window.location.href='thankyou.php';
   </script>
   ";

  }
  catch(PDOException $e){
    echo "Not Inserted: ".$e->getMessage();
  }

}

?>