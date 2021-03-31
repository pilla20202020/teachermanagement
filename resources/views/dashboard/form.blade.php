<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Create New Teacher</title>
  </head>
  <body>
    <form action="{{route('form.submit')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">Teacher Name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter Your Name">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">phone</label>
        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Enter Your phone">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">address</label>
        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Enter Your address">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Nationality</label>
        <input type="text" class="form-control" name="nationality" id="exampleFormControlInput1" placeholder="Enter Your nationality">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">DOB</label>
        <input type="date" class="form-control" name="DOB" id="exampleFormControlInput1" placeholder="Enter Your Date of Birth">
      </div>

      <div class="single-input-item">
          <label for="gender" class="required">Gender : </label>
          <div class="gender" style="display: flex">
              <input type="radio" name="gender" value="male" style="height:20px;width: 10%;" required>
              <p>Male</p>
              <input type="radio" name="gender" value="female" style="height:20px;width: 10%;" required>
              <p>FeMale</p>
              <input type="radio" name="gender" value="other"  style="height:20px;width: 10%;" required>
              <p>Other</p>
          </div>
      </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="faculty" id="exampleFormControlSelect1">
      <option value="science">Science</option>
      <option value="management">Management</option>
      <option value="humanities">Humanities</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple name="subject[]" class="form-control" id="exampleFormControlSelect2">
      <option value="social" name="social">Social</option>
      <option value="english" name="english">English</option>
      <option value="nepali" name="nepali">Nepali</option>
    </select>
  </div>
  <div class="col-lg-12 col-md-12">
      <button class="submit btn-primary" type="submit">Submit</button>
  </div>
</form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function multipleFunc() {
           document.getElementById("mySelect").multiple = true;
        }
     </script>
  </body>
</html>
