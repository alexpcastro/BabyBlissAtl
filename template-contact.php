<?php 
/* Template Name: Contact */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/scripts/lightslider/css/lightslider.css'; ?>" />

<section>
  <div class="vh-50" style="background: url(https://images.unsplash.com/photo-1505976442149-53a82393903b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80) !important; background-size: cover !important; background-position: center !important;">
    <div class="row m-0 h-100 pt-3 pt-sm-5" style="background: rgba(0,0,0,0.5);">
      <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
      </div>
    </div>
  </div>
</section>

<section>
    <div class="row m-0 bg-light">
      <div class="col-lg-5 offset-lg-2 container py-5">
        <h1 class="text-dark">Contact</h1>
        <p class="lead text-dark">Baby<span class="font-weight-bold">Bliss</span> is currently serving the greater Atlanta area.</p>
        <strong>Telephone:</strong> <a href="tel:+14044878580">+1 (404) 487-8580</a><br/>
        <strong>E-mail:</strong> <a href="mailto:babyblissatl@gmail.com">babyblissatl@gmail.com</a>
      </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 mx-auto">
              <?php
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //user posted variables
                  $name = $_POST['message_name'];
                  $email = $_POST['message_email'];
                  $message = $_POST['message_text'];

                //php mailer variables
                  $to = 'alexpcastro95@gmail.com';
                  $subject = "BabyBliss Contact Form";
                  $headers = 'From: '. $email . "\r\n" .
                    'Reply-To: ' . $email . "\r\n";

                //Here put your Validation and send mail
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                      if($sent) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Your message has been sent.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                      }//message sent!
                      else  {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> Please check the form fields and try again.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                      }//message wasn't sent
              }
              ?>
              <form method="POST">
                <div class="form-group">
                  <label for="inputAddress">Name</label>
                  <input type="text" class="form-control" id="message_name" name="message_name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="message_email" name="message_email" aria-describedby="emailHelp" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message</label>
                  <textarea class="form-control" id="message_text" name="message_text" rows="5"></textarea required>
                </div>
                <button type="submit" class="btn btn-outline-dark">Send</button>
              </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>