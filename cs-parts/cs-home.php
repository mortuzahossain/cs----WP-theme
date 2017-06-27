<?php
    global $cs;
    $header_text = $cs['home-header-text'];
    $sub_header_text = $cs['home-sub-header-text'];
    $mailchimp = $cs['mailchimp'];
?>

<!-- TAB CONTENT -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade active in" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="<?php echo $mailchimp; ?>" class="subsribbe-box" id="mc-form">
                        <div class="animation-container">
                            <svg viewBox="0 205 600 600">
                                <symbol id="text">
                                    <text text-anchor="middle" x="50%" y="50%"><?php echo $header_text; ?></text>
                                </symbol>
                                <use xlink:href="#text" class="text"></use>
                                <use xlink:href="#text" class="text"></use>
                                <use xlink:href="#text" class="text"></use>
                                <use xlink:href="#text" class="text"></use>
                            </svg>
                        </div>
                        <h1><?php echo $sub_header_text; ?></h1>
                        <div class="form-group">
                            <input type="email" class="form-control" id="mc-email" placeholder="Your Email">
                        </div>
                        <input type="submit"  class="btn submit-btn" value="SUBSCRIBE" />
                        <label for="mc-email" class="mc-label"></label>
                    </form>
                </div><!-- END OF /. COLUMN -->
            </div><!-- END OF /. ROW -->
        </div><!-- END OF /. CONTAINER FLUID -->
    </div><!-- END OF /. HOME -->