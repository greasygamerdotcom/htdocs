<div class="col-md-12 col-sm-12 m-b-30">
	<div class="card rounded">
		<div class="card-header wrap-m">
			<div class="card-title wrap-c text-info"><i class="fas fa-caret-right p-r-5"></i> <?php _e("Last 7 days")?></div>
		</div>
	    <div class="card-body h-350">
	    	<canvas id="line-stacked-area" height="350"></canvas>
	    </div>
	</div>
</div>

<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Like action")?></div>
				<div class="widget-desc"><?php _e("Total likes")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->favorite_count )?></div>
		</div>
		<div class="widget-progress progress m-b-5">
	  		<div class="progress-bar bg-info" role="progressbar" style="width: <?php _e( $result->favorite_percent )?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="widget-action wrap-m">
			<div class="widget-change wrap-c"><?php _e("Percent")?></div>
			<div class="widget-number wrap-c"><?php _e( round( $result->favorite_percent ) )?><?php _e("%")?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Reply action")?></div>
				<div class="widget-desc"><?php _e("Total replies")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->reply_count )?></div>
		</div>
		<div class="widget-progress progress m-b-5">
	  		<div class="progress-bar bg-info" role="progressbar" style="width: <?php _e( $result->reply_percent )?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="widget-action wrap-m">
			<div class="widget-change wrap-c"><?php _e("Percent")?></div>
			<div class="widget-number wrap-c"><?php _e( round( $result->reply_percent ) )?><?php _e("%")?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Retweet action")?></div>
				<div class="widget-desc"><?php _e("Total retweets")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->retweet_count )?></div>
		</div>
		<div class="widget-progress progress m-b-5">
	  		<div class="progress-bar bg-info" role="progressbar" style="width: <?php _e( $result->retweet_percent )?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="widget-action wrap-m">
			<div class="widget-change wrap-c"><?php _e("Percent")?></div>
			<div class="widget-number wrap-c"><?php _e( round( $result->retweet_percent ) )?><?php _e("%")?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Follow action")?></div>
				<div class="widget-desc"><?php _e("Total follows")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->follow_count )?></div>
		</div>
		<div class="widget-progress progress m-b-5">
	  		<div class="progress-bar bg-info" role="progressbar" style="width: <?php _e( $result->follow_percent )?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="widget-action wrap-m">
			<div class="widget-change wrap-c"><?php _e("Percent")?></div>
			<div class="widget-number wrap-c"><?php _e( round( $result->follow_percent ) )?><?php _e("%")?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Unfollow action")?></div>
				<div class="widget-desc"><?php _e("Total unfollows")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->unfollow_count )?></div>
		</div>
		<div class="widget-progress progress m-b-5">
	  		<div class="progress-bar bg-info" role="progressbar" style="width: <?php _e( $result->unfollow_percent )?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="widget-action wrap-m">
			<div class="widget-change wrap-c"><?php _e("Percent")?></div>
			<div class="widget-number wrap-c"><?php _e( round( $result->unfollow_percent ) )?><?php _e("%")?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Welcome DM action")?></div>
				<div class="widget-desc"><?php _e("Total welcome DMs")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->direct_count )?></div>
		</div>
		<div class="widget-progress progress m-b-5">
	  		<div class="progress-bar bg-info" role="progressbar" style="width: <?php _e( $result->direct_percent )?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="widget-action wrap-m">
			<div class="widget-change wrap-c"><?php _e("Percent")?></div>
			<div class="widget-number wrap-c"><?php _e( round( $result->direct_percent ) )?><?php _e("%")?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m m-b-15">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Time started")?></div>
				<div class="widget-desc"><?php _e("Start counting from the time you press the Start button")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->time_start )?></div>
		</div>
	</div>
</div>
<div class="col-md-4 col-sm-6 m-b-30">
	<div class="widget-card p-20">
		<div class="widget-details wrap-m">
			<div class="widget-info wrap-c">
				<div class="widget-title text-info text-uppercase"><?php _e("Followers gained")?></div>
				<div class="widget-desc"><?php _e("Total of followers gained")?></div>
			</div>
		<div class="widget-stats wrap-c text-info"><?php _e( $result->total_followers_gained )?></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		setTimeout(function(){
			Core.lineChart(
				"line-stacked-area",
				<?php _e($result->favorite_chart->date)?>, 
				[
					<?php _e($result->favorite_chart->value)?>,
					<?php _e($result->reply_chart->value)?>,
					<?php _e($result->retweet_chart->value)?>,
					<?php _e($result->follow_chart->value)?>,
					<?php _e($result->unfollow_chart->value)?>,
					<?php _e($result->direct_chart->value)?>,
				],
				[
					"<?php _e('Like')?>",
					"<?php _e('Reply')?>",
					"<?php _e('Retweet')?>",
					"<?php _e('Follow')?>",
					"<?php _e('Unfollow')?>",
					"<?php _e('Welcome DM')?>",
				]
			);
		}, 300);
	});
</script>