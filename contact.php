<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/contacts.css">
  <script defer src="js/contactvalidation.js"></script>
</head>

<body>
  <div class="container">
   
     
   
  <?php
            include 'topmenu.php';
        
 ?>



    <div class="containers">
      <p> <br>
        We are always improving so give us your feedback.
      <br>
    So don't hesitate to contact us.</p>

      <div class="content">
        
     
        <div class="form">
          
      
          <form >
            <label for="fname">Name</label><br>
            <input type="text"  placeholder="Your First Name"> <br>
            <label for="lname">Email</label><br>
            <input name="email" placeholder="Your Email"><br>
            <label for="subject">Subject</label><br>
            <textarea name="subject" placeholder="Write something.." style="height:170px" required></textarea><br>
            <input type="submit" value="Submit" id="submitc" name="submit">
          </form>

        </div>
        <div class="map">
       
            <a href="skincare.php">
                        <img src="pictures\contactlogo.jpg" title="insert title" width="350px" height="350px"alt="insert description here"></a>
                             
        </div>
      </div>
    </div>
  </div>




  <?php
    
    include 'footer.php';
    
    ?>
  

</body>



</html>