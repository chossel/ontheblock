<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Excellent Taste</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <h1 class="text-center">Excellent Taste</h1>
            <hr style="height: 1px;color: black;background-color: black;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mx-auto">
            <?php
              include("nav.html");
            ?>
            <form action="addreservation.php" method="get">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Telefoon nummer</label>
                <input type="tel" name="mobile" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Datum/Tijd</label>
                <input type="datetime-local" name="datum" class="form-control">
              </div>
              <div class="form-group">
                <label for="">personen</label>
                <input type="text" name="personen" class="form-control">
              </div>
              <div class="form-group" style="margin: 7px;margin-left: 0px;">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>