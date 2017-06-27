<?php
global $cs;
$layout = $cs['nav-item']['enabled'];
?>

<div class="menu-area">
    <div class="container">
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i><span>Home</span></a>
                </li>

                <?php
                    if ($layout) {
                        foreach ($layout as $key => $value) {
                            switch ($key) {
                                case 'when':
                                    echo '
                                        <li role="presentation">
                                            <a href="#when" aria-controls="when" role="tab" data-toggle="tab">
                                                <i class="fa fa-clock-o"></i>
                                                <span>When</span>
                                            </a>
                                        </li>
                                    ';
                                    break;
                                case 'about':
                                    echo '
                                        <li role="presentation">
                                            <a href="#about" aria-controls="about" role="tab" data-toggle="tab">
                                                <i class="fa fa-info"></i>
                                                <span>About</span>
                                            </a>
                                        </li>
                                    ';
                                    break;
                                case 'contact':
                                    echo '
                                        <li role="presentation">
                                            <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">
                                                <i class="fa fa-envelope"></i>
                                                <span>Contact</span>
                                            </a>
                                        </li>
                                    ';
                                    break;
                            }
                        }
                    } else {
                ?>

                <li role="presentation">
                    <a href="#when" aria-controls="when" role="tab" data-toggle="tab">
                        <i class="fa fa-clock-o"></i>
                        <span>When</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#about" aria-controls="about" role="tab" data-toggle="tab">
                        <i class="fa fa-info"></i>
                        <span>About</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">
                        <i class="fa fa-envelope"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <?php } ?>

            </ul><!-- END TAB MENU -->
        </div>
    </div>
</div>