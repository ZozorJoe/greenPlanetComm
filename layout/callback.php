<!-- Callback form -->
<?php 
  //Alerts variables
  $msg = "";
  $msgClass = "";
  //checking for the submit 
  if(filter_has_var(INPUT_POST, 'submit-msg')){
    //get the form data
    $name = htmlspecialchars($_POST["nomComplete"]);
    $adresse_email = htmlspecialchars($_POST["adresse_email"]);
    $message_subject = htmlspecialchars($_POST["message_subject"]);
    $message_content = htmlspecialchars($_POST["message_content"]);

    // check required fields
    if(!empty($name) && !empty($adresse_email) && !empty($message_subject) && !empty($message_content)){
      //check email
      if(filter_var($adresse_email, FILTER_VALIDATE_EMAIL)){
        //passed
        $msg = 'Votre mail a bien été envoyé!';
        $msgClass = 'alert-success';
        
      } else {
        //failed 
        $msg = 'Please, enter a valid email adress!';
        $msgClass = 'alert-danger';
      }
    } else {
      //failed
      $msg = 'Please, fill all the fields!';
      $msgClass = 'alert-danger';
    }
  }

?>
<div class="callback-form">

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="section-heading">

        <h2><?php echo $lang['callback-h2']; ?><em><?php echo $lang['callback-h2-em']; ?></em></h2>

        <span><?php echo $lang['callback-span']; ?></span>

      </div>

    </div>

    <div class="col-md-12">

      <div class="contact-form">
      <?php if($msg != ""): ?>
        <div class="alert <?php echo $msgClass ; ?>"> <?php echo $msg ; ?></div>
      <?php endif; ?>

        <div id="contact">
        <div id="message_notification"></div>
          <div class="row">

            <div class="col-lg-4 col-md-12 col-sm-12">
            <form action="#contact" method="post">
              <fieldset>

                <input name="nomComplete" type="text" class="form-control" id="nom-contact" placeholder="<?php echo $lang['callback-nom']; ?>" value="<?php echo isset($_POST['nomComplete']) ? $name : ''; ?>">

              </fieldset>
              <div class="nameNotif"></div>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

              <fieldset>

                <input name="adresse_email" type="text"  <?php $invalid_class_mail ?? "" ?> class="form-control" id="email-contact" placeholder="<?php echo $lang['callback-mail']; ?>" value="<?php echo isset($_POST['adresse_email']) ? $adresse_email : ''; ?>">

              </fieldset>
              <div class="emailNotif"></div>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

              <fieldset>

                <input name="message_subject" type="text" class="form-control" id="subject-contact" placeholder="<?php echo $lang['callback-subject']; ?>" value="<?php echo isset($_POST['message_subject']) ? $message_subject : ''; ?>">

              </fieldset>
              <div class="subjectNotif"></div>

            </div>

            <div class="col-lg-12">

              <fieldset>

                <textarea name="message_content" rows="6" class="form-control" id="message-Contact" placeholder="<?php echo $lang['callback-msg']; ?>"><?php echo isset($_POST['message_content']) ? $message_content : ''; ?></textarea>

              </fieldset>
              <div class="messageNotif"></div>

            </div>

            <div class="col-lg-12">

              <fieldset>

                <button  id="submit" name="submit-msg" class="border-button form_submit_message"><?php echo $lang['callback-btn']; ?></button>
                
              </fieldset>
              <div class="submitNotif"></div>
              </form>
            </div>

            

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

</div>

