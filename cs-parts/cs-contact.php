<?php
    global $cs;
    $contact_header = $cs['contact-header'];
    $address_header = $cs['address-header'];
    $main_address   = $cs['main-address'];
    $call_us        = $cs['call-us'];
    $write_us        = $cs['write-us'];
    $show_main_address = $cs['show_main_address'];
    $show_call_us = $cs['show_call_us'];
    $show_write_us = $cs['show_write_us'];
?>

<div role="tabpanel" class="tab-pane fade" id="contact">
    <div class="container about-area">
        <div class="row about-item">
            <div class="col-md-6">
                <div class="marg50">
                    <div class="contact-item">
						<h4><?php echo $address_header; ?></h4>
                        <?php if($show_main_address == '1'){ ?>
                            <h6><i class="fa fa-map-marker"></i> Main address</h6>
                            <?php echo $main_address; ?>
                        <?php } ?>
					</div>
                    <?php if($show_call_us == '1'){ ?>
    					<div class="contact-item">
                            <h6><i class="fa fa-phone"></i> Call us</h6>
    						<?php echo $call_us; ?>
    					</div>
                    <?php } ?>
                    <?php if($show_write_us == '1'){ ?>
    					<div class="contact-item">
                            <h6><i class="fa fa-envelope"></i> Write us</h6>
    						<?php echo $write_us; ?>
    					</div>
                    <?php } ?>
                    <ul class="soc-contacts">

                    <?php 
                        if (isset($cs['social-icons']) && !empty($cs['social-icons'])) {
                            foreach ($cs['social-icons'] as $single_icon) {
                                ?>
                                    <li><a href="<?php echo $single_icon['url']; ?>"><i class="fa <?php echo $single_icon['title']; ?>"></i></a></li>
                                <?php
                                if ($single_about['sort'] == 7) break;
                            }
                        } else {
                    ?>  
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                    <?php } ?>
                    </ul>

                </div>
            </div><!-- END OF /. COLUMN -->
            <div class="col-md-6">
                <form class="contact-form">
                    <h4><?php echo $contact_header; ?></h4>
                    <div class="row form-area">
                        <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="row form-area">
                        <div class="form-group col-md-12">
                            <input type="text" name="website" class="form-control" placeholder="Website">
                        </div>
                        <input style="display: none;" type="text" class="form-control" placeholder="Where are You From?" name="robo">
                        <div class="form-group col-md-12">
                            <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <input type="submit" id="form-send" value="SEND" class="btn submit-btn">
                </form>
    <?php
        // For Sending Email:
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            function input_validate($data) {
              $data = trim($data);
              $data = stripslashes($data);
              return $data;
            }
            // First validate the input
            $name           = input_validate($_POST['name']);
            $email          = input_validate($_POST['email']);
            $website        = input_validate($_POST['website']);
            $message        = input_validate($_POST['message']);
            // Must Come empty
            $robo       = $_POST['robo'];
            // This Address mever xomes empty
            $to             = $cs['admin-email'];

            if (empty($name) || empty($email) || empty($website) || empty($message) || !empty($robo)) {
                echo "<h4 class = 'worning text-center bg-warning'>Please Fill All The information</h4>";
            } else {
                $subject = 'User Contact Email From'.get_bloginfo('name');
                $message = 'Name: '.$name.'\n\nEmail: '.$email.'\n\nWebsite: '.$website.'\n\nAddress: '.'\n\nMessage: '.$message;
                if (mail($to, $subject, $message)) {
                    $message = 'Thanks For Contact Us. We will come back to you soon. Please be with us.';
                    mail($email, $subject, $message);
                    echo "<h4 class = 'worning text-center bg-success'>We get your email. Thanks for contact us.</h4>";
                }
            }
        }
    ?>


            </div><!-- END OF /. COLUMN -->
        </div><!-- END OF /. ROW -->
    </div><!-- END OF /. CONTAINER FLUID -->
</div><!-- END OF /. CONTACT -->