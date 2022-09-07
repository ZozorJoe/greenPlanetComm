<!-- Callback -->

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

              <fieldset>

                <input name="nomComplete" type="text" class="form-control" id="nom-contact" placeholder=<?php echo $lang['callback-nom']; ?>" required>

              </fieldset>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

              <fieldset>

                <input name="adresse_email" type="text" class="form-control" id="email-contact" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $lang['callback-mail']; ?>" required>

              </fieldset>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

              <fieldset>

                <input name="subject" type="text" class="form-control" id="subject-contact" placeholder="<?php echo $lang['callback-subject']; ?>" required>

              </fieldset>

            </div>

            <div class="col-lg-12">

              <fieldset>

                <textarea name="message" rows="6" class="form-control" id="message-Contact" placeholder="<?php echo $lang['callback-msg']; ?>" required></textarea>

              </fieldset>

            </div>

            <div class="col-lg-12">

              <fieldset>

                <button  id="submit" class="border-button form_submit_message "><?php echo $lang['callback-btn']; ?></button>

              </fieldset>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

</div>