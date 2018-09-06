<?php
require 'db.php';
$alert = '';

# Checks if the form fields are empty prior to submitting info
if (isset($_POST['first_name']) AND (isset($_POST['last_name'])) AND (isset($_POST['zip_code'])) AND (isset($_POST['email'])) AND (isset($_POST['comments']))) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $zip_code = $_POST ['zip_code'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];
  $mysql = 'INSERT INTO contact_info(first_name, last_name, zip_code, email, comments) VALUES(:first_name, :last_name, :zip_code, :email, :comments)';
  try {
   $statement = $connection->prepare($mysql);
   $statement->execute([':first_name' => $first_name, ':last_name' => $last_name, ':zip_code' => $zip_code, ':email' => $email, ':comments' => $comments]);

   $alert = 'Form Submitted Successfully!';
 } catch(PDOException $e) {
   die($e); # used to check if the if statement ran correctly
 }
}
?>

<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h3>Contact Us!</h3>
    </div>

    <div class="card-body">
      <!--checks if fields are not empty-->
      <?php if(!empty($alert)): ?>
        <div class="alert alert-success">
          <?php echo $alert; ?>
        </div>
      <?php endif; ?>

      <!-- The following are the fields for users to enter their info-->
      <form method="post">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name">
        </div>

        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name">
        </div>

        <div class="form-group">
          <label for="zip_code">Zip Code</label>
          <input type="text" name="zip_code" id="zip_code" class="form-control" placeholder="Zip">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
        </div>

        <div class="form-group">
          <label for="comments">Additional Comments</label>
          <textarea class="form-control" name ="comments" id="comments" rows="3"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-secondary">Click to Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
