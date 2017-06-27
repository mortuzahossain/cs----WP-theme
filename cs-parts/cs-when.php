<?php
global $cs;
$when_header = $cs['lunch-header'];
$when_subheader = $cs['lunch-subheader'];
?>                    



<div role="tabpanel" class="tab-pane fade" id="when">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="counter-item">
                    <h2><?php echo $when_header; ?></h2>
                    <h3><?php echo $when_subheader; ?></h3>
                    <ul class="countdown">
                		<li>
                			<span class="days">00</span>
                			<p class="days_ref">days</p>
                		</li>
                		<li>
                			<span class="hours">00</span>
                			<p class="hours_ref">hours</p>
                		</li>
                		<li>
                			<span class="minutes">00</span>
                			<p class="minutes_ref">minutes</p>
                		</li>
                		<li>
                			<span class="seconds last">00</span>
                			<p class="seconds_ref">seconds</p>
                		</li>
                	</ul>
                </div>
            </div><!-- END OF /. COLUMN -->
        </div><!-- END OF /. ROW -->
    </div><!-- END OF /. CONTAINER FLUID -->
</div><!-- END OF /. WHEN -->