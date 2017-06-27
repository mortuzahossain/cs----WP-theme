<?php
    global $cs;
?>

<div role="tabpanel" class="tab-pane fade" id="about">
    <div class="container about-area">
        <div class="row about-item">
          

            <?php 
                if (isset($cs['about_content']) && !empty($cs['about_content'])) {
                    foreach ($cs['about_content'] as $single_about) {

                        ?>
                           <div class="icon col-sm-6 col-md-4"> <!-- Feature 1 -->
                                <div class="icon_img">
                                    <div class="hex-wrap small">
                                        <div class="hex yellow">
                                            <i class="fa <?php echo $single_about['url']; ?> icon-basic-gear"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="icon_detail"><!--  Your Feature-1 Detail Goes Here -->
                                    <h3><?php echo $single_about['title']; ?></h3>
                                    <p><?php echo $single_about['description']; ?></p>
                                </div>
                            </div> 
                        <?php
                        if ($single_about['sort'] == 2) break;
                    }
                } else {
            ?>  


            <div class="icon col-sm-6 col-md-4"> <!-- Feature 1 -->
                <div class="icon_img">
                    <div class="hex-wrap small">
                        <div class="hex yellow">
                            <i class="fa fa-html5 icon-basic-gear"></i><!--  Your Feature-1 Icon Goes Here -->
                        </div>
                    </div>

                </div>
                <div class="icon_detail"><!--  Your Feature-1 Detail Goes Here -->
                    <h3>Customizable</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                </div>
            </div><!-- End: Feature 1  -->

            <div class="icon col-sm-6 col-md-4"> <!-- Feature 2 -->
                <div class="icon_img">
                    <div class="hex-wrap small">
                        <div class="hex yellow">
                            <i class="fa fa-code icon-basic-photo"></i><!--  Your Feature-2 Icon Goes Here -->
                        </div>
                    </div>
                    <div class="icon_detail">
                        <h3>Photo Sharing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                    </div>
                </div>
            </div><!-- End: Feature 2  -->
            <div class="icon col-sm-6 col-md-4"> <!-- Feature 3 -->
                <div class="icon_img ">
                    <div class="hex-wrap small">
                        <div class="hex yellow">
                            <i class="fa fa-twitter icon-basic-anticlockwise"></i><!--  Your Feature-3 Icon Goes Here -->
                        </div>
                    </div>
                </div>
                <div class="icon_detail"><!--  Your Feature-3 Detail Goes Here -->
                    <h3>Fast Loading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                </div>
            </div><!-- End: Feature 3  -->
            <?php } ?>
        </div><!-- END OF /. ROW -->
    </div><!-- END OF /. CONTAINER FLUID -->
</div><!-- END OF /. ABOUT -->