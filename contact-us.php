<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <?php
        //if "email" variable is filled out, send email
        if (isset($_REQUEST['email']))  {
        
          //Email information
          $admin_email = "chachi@riversagile.com";
          $email = $_REQUEST['email'];
          $comment = $_REQUEST['comment'];
          
          //send email
          mail($admin_email, "Contact us submission", $comment, "From:" . $email);
          
          //Email response
          echo "<h1>Thank you for contacting us!</h1>";
          echo "<p>You will be hearing from us soon!</p>";
        }
        
        //if "email" variable is not filled out, display the form
        else  {
      ?>
        <h1 class="page-header">Contact us</h1>
        <form method="post">
          <div class="form-group">
            <label for="email">What's your email address?</label>
            <input type="email" name="email" class="form-control" placeholder="Email" id="email">
          </div>
          <div class="form-group">
            <label for="comment">What do you want to say?</label>
            <textarea id="comment" name="comment" class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-default">Reset</button>
        </form>
      <?php
        }
      ?>
    </div>
  </body>
</html>