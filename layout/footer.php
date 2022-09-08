</style>
<footer>

<div class="container">

  <div class="row">

    <div class="col-md-3 footer-item">

      <h4><?php echo $lang["footer1-h4"]; ?></h4>

      <p><?php echo $lang["footer1-p"]; ?></p>

      <ul class="social-icons">

      <li><a href="https://www.facebook.com/profile.php?id=100084910672276" target="_blank"><i
            class="fa fa-facebook"></i></a></li>

      <li><a href="https://twitter.com/Greenplanetcomm" target="_blank"><i class="fa fa-twitter"></i></a></li>

      <li><a href="https://www.linkedin.com/in/green-planet-communcication-05477124a" target="_blank"><i
            class="fa fa-linkedin"></i></a></li>

      </ul>

    </div>

    <div class="col-md-3 footer-item">

      <h4><?php echo $lang["footer2-h4"]; ?></h4>

      <ul class="menu-list">

        <li><a href="#top"><?php echo $lang["footer2-link1"]; ?></a></li>

        <li><a href="#service"><?php echo $lang["footer2-link2"]; ?></a></li>

        <li><a href="#about"><?php echo $lang["footer2-link3"]; ?></a></li>

        <li><a href="#pov"><?php echo $lang["footer2-link4"]; ?></a></li>

        <li><a href="#partners"><?php echo $lang["footer2-link5"]; ?></a></li>

      </ul>

    </div>

    <div class="col-md-3 footer-item">

      <h4><?php echo $lang["footer3-h4"]; ?></h4>

      <ul class="menu-list">

        <li><a href="about.php"><?php echo $lang["footer3-link1"]; ?></a></li>

        <li><a href="services.php"><?php echo $lang["footer3-link6"]; ?></a></li>

        <li><a href="contact.php"><?php echo $lang["footer3-link2"]; ?></a></li>

        <li><a href="#"><?php echo $lang["footer3-link3"]; ?></a></li>

        <li><a href="#"><?php echo $lang["footer3-link4"]; ?></a></li>

      </ul>

    </div>

    <div class="col-md-3 footer-item last-item">

      <h4><?php echo $lang["footer4-h4"]; ?></h4>

      <div class="contact-form">

        <div id="contact footer-contact"  >

          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

              <fieldset>

                <input name="nom" type="text" class="form-control"  id="nom" placeholder="<?php echo $lang["footer4-placeholder-fullname"]; ?>" required>

              </fieldset>
              <div class="notif_name"></div>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

              <fieldset>

                <input name="emailadress" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $lang["footer4-placeholder-mailAdress"]; ?>" required>

              </fieldset>
              <div class="notif_mail"></div>


            </div>

            <div class="col-lg-12">

              <fieldset>

                <textarea name="messageContact" rows="6" class="form-control" id="messageContact" placeholder="<?php echo $lang["footer4-placeholder-message"]; ?>" required></textarea>

              </fieldset>
              <div class="notif_message"></div>


            </div>

            <div class="col-lg-12">

              <fieldset>

                <button id="form-submit" class="filled-button contact_envoyer"><?php echo $lang["footer4-btn"]; ?></button>

              </fieldset>

            </div>

          </div>

</div>

      </div>

    </div>

  </div>
  <input type="text" name="langue" hidden  value="<?php echo $lang["html-lang"]; ?>">

</div>

</footer>



<!-- Bootstrap core JavaScript -->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<!-- Additional Scripts -->

<script src="assets/js/custom.js"></script>

<script src="assets/js/owl.js"></script>

<script src="assets/js/slick.js"></script>

<script src="assets/js/accordions.js"></script>



<script language = "text/Javascript"> 

cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field

function clearField(t){                   //declaring the array outside of the

if(! cleared[t.id]){                      // function makes it static and global

    cleared[t.id] = 1;  // you could use true and false, but that's more typing

    t.value='';         // with more chance of typos

    t.style.color='#fff';

    }

}

</script>

<script>
  $(document).ready(function(){
    var input_nom =document.querySelector("#nom")
    var input_email =document.querySelector("#email")
    var input_message =document.querySelector("#messageContact")
      input_nom.addEventListener('input',function () {
        document.getElementById("notif_nom").style.display = "none";
        })
        input_email.addEventListener('input',function () {
        document.getElementById("notif_email").style.display = "none";
        })
        input_message.addEventListener('input',function () {
        document.getElementById("notif_sms").style.display = "none";
        })
    $(document).on('click','.contact_envoyer', function(){
      console.log('test')
      var nom = $('input[name="nom"]').val();
      var email = $('input[name="emailadress"]').val();
      var message = $("#messageContact").val();
      var langues = $('input[name="langue"]').val();


      var data ={
        nom:nom,
        email:email,
        message:message,
        langue:langues
      }

      if(nom==""){
        $('.notif_name').html(`
   <div class="popover_presonaliser alert alert-danger text-center" id="notif_nom">Entrer votre nom</div>
  `);

      }  

      else if(email==""){
        $('.notif_mail').html(`
  <div class="popover_presonaliser alert alert-danger text-center" id="notif_email" >Entrer votre mail</div>
  `);
      }  else if(message==""){
        $('.notif_message').html(`
  <div class="popover_presonaliser alert alert-danger text-center" id="notif_sms">Entrer votre message</div>
  `);
      } else if(nom!="" && email!="" && message!=""){
        $.ajax({
type: 'POST', // http method
data: data,
url:'controlleur/contact.php',
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
    $(document).on('click','.form_submit_message', function(){
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
url:'controlleur/contact.php',
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

<style>