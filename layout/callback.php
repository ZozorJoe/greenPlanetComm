<!-- Callback form -->
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

        <div id="contact" >
        <div id="message_notification"></div>
          <div class="row">

            <div class="col-lg-4 col-md-12 col-sm-12">
            <form action="" method="post">
              <fieldset>

                <input name="nomComplete" type="text" class="form-control" id="nom-contact" placeholder=<?php echo $lang['callback-nom']; ?>" required>

              </fieldset>
              <div class="nameNotif"></div>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

              <fieldset>

                <input name="adresse_email" type="text"  <?php $invalid_class_mail ?? "" ?> class="form-control" id="email-contact" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $lang['callback-mail']; ?>" required>

              </fieldset>
              <div class="emailNotif"></div>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

              <fieldset>

                <input name="message_subject" type="text" class="form-control" id="subject-contact" placeholder="<?php echo $lang['callback-subject']; ?>" required>

              </fieldset>
              <div class="subjectNotif"></div>

            </div>

            <div class="col-lg-12">

              <fieldset>

                <textarea name="message_content" rows="6" class="form-control" id="message-Contact" placeholder="<?php echo $lang['callback-msg']; ?>" required></textarea>

              </fieldset>
              <div class="messageNotif"></div>

            </div>

            <div class="col-lg-12">

              <fieldset>

                <button  id="submit" class="border-button form_submit_message"><?php echo $lang['callback-btn']; ?></button>
                
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

<script>
  $(document).ready(function(){
    var nomInput =document.querySelector("#nom-contact")
    var emailInput =document.querySelector("#email-contact")
    var subjectInput =document.querySelector("#subject-contact")
    var messageInput =document.querySelector("#message-Contact")
        nomInput.addEventListener('input',function () {
        document.getElementById("nomNotif").style.display = "none";
        })
        emailInput.addEventListener('input',function () {
        document.getElementById("emailNotif").style.display = "none";
        })
        subjectInput.addEventListener('input',function () {
        document.getElementById("subjectNotif").style.display = "none";
        })
        messageInput.addEventListener('input',function () {
        document.getElementById("messageNotif").style.display = "none";
        })
    $(document).on('click','.form_submit_message', function(){
      console.log('test')
      var nom = $('input[name="nomComplete"]').val();
      var email = $('input[name="adresse_email"]').val();
      var subject = $('input[name="message_subject"]').val();
      var message = $('input[name="message_content"]').val();
      var langues = $('input[name="langue"]').val();

   
      var data ={
        nom:nom,
        email:email,
        subject:subject,
        message:message,
        langue:langues
      }
      
      if(nom==""){
        $('.nameNotif').html(`
        <div class="invalid-feedback">Veuillez entrer votre nom!</div>
        `);
          }  else if(email==""){
            $('.mailNotif').html(`
            <div class="invalid-feedback">Veuillez entrer votre adresse mail!</div>
            `);
          }  else if(subject==""){
            $('.subjectNotif').html(`
            <div class="invalid-feedback">N'oubliez pas de mentionner l'objet du message!</div>
            `);
          }  else if(message==""){
            $('.messageNotif').html(`
            <div class="invalid-feedback">Veuillez rediger ici votre message!</div>
            `);
          } else if(nom!="" && email!="" && subject!="" && message!=""){
            $.ajax({
            type: 'POST', // http method
            data: data,
            url:'controlleur/callback.php',
            success: function(response) {
              console.log(response)
              let result =JSON.parse(response)
              $('#notification').html(`
              <hr>
              <span class="alert alert-success text-center" style="font-size: 1em;">${result.msg}</span>
              <br>
              `);
              $('input[name="nom"]').val(null);
            $('input[name="emailadress"]').val(null);
            $("#messageContact").val(null);
            },
            })
          }
      })


    $(document).on('click','.form_submit', function(){
      console.log('test')
      var nom = $('input[name="nomComplete"]').val();
      var email = $('input[name="adresse_email"]').val();
      var subject = $('input[name="subject"]').val();
      var message = $("#message1").val();
      var langues = $('input[name="langue"]').val();

      var data ={
        nom:nom,
        email:email,
        message:message,
        subject:subject,
        langue:langues

      }
      $.ajax({
      type: 'POST', // http method
      data: data,
      url:'controlleur/callback.php',
      success: function(response) {
        console.log(response)
        let result =JSON.parse(response)
        $('#message_notification').html(`
        <div class="alert alert-success text-center" style="font-size: 1em;">${result.msg}</div>
        `);
        $('input[name="nomComplete"]').val(null);
          $('input[name="adresse_email"]').val(null);
          $('input[name="subject"]').val(null);
          $("#message1").val(null);
      },
      })
    })
  })
  </script>