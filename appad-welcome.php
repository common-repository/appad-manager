<?php
/**
 * AppAd Welcome Page
 */
?>
<script type="text/javascript">
// <![CDATA[
	jQuery(document).ready(function() {
		jQuery("#tabs-wrap").tabs({fx: {opacity: 'toggle', duration: 200}});
	});
// ]]>
</script>
<div class="wrap">
	<div class="icon32" id="icon-options-general"><br /></div>
	<h2><?php _e( 'Welcome in AppAd', APPAD_TD ); ?></h2>
	<div id="tabs-wrap" class="">
		<ul class="tabs">
			<li class=""><a href="#tab1"><?php _e( 'Choose Theme', APPAD_TD ); ?></a></li>
		</ul>

		<div id="tab1" class="">
			<table class="widefat fixed" style="width:850px; margin-bottom:20px;">
				<thead>
					<tr>
						<th width="280px" scope="col"><?php _e( 'AppThemes', APPAD_TD ); ?></th>
						<th width="280px" scope="col">&nbsp;</th>
						<th width="280px" scope="col">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="text-align:center;">
							<strong><?php _e( 'Clipper', APPAD_TD ); ?></strong><br />
							<img src="<?php echo plugins_url( '/clipper/screenshot.png', __FILE__ ); ?>" width="260px" /><br />
							<?php printf( __( '<a href="%s">Configure Ads</a>', APPAD_TD ), 'admin.php?page=appad-clipper' ); ?><br />
							<?php printf( __( '<a target="_blank" href="%s">Buy Theme!</a>', APPAD_TD ), 'http://bit.ly/oLSh2D' ); ?><br />
						</td>
						<td style="text-align:center;">
							<strong><?php _e( 'ClassiPress', APPAD_TD ); ?></strong><br />
							<img src="<?php echo plugins_url( '/classipress/screenshot.png', __FILE__ ); ?>" width="260px" /><br />
							<?php printf( __( '<a href="%s">Configure Ads</a>', APPAD_TD ), 'admin.php?page=appad-classipress' ); ?><br />
							<?php printf( __( '<a target="_blank" href="%s">Buy Theme!</a>', APPAD_TD ), 'http://bit.ly/j5G6mG' ); ?><br />
						</td>
						<td style="text-align:center;">
							<strong><?php _e( 'JobRoller', APPAD_TD ); ?></strong><br />
							<img src="<?php echo plugins_url( '/jobroller/screenshot.png', __FILE__ ); ?>" width="260px" /><br />
							<?php printf( __( '<a href="%s">Configure Ads</a>', APPAD_TD ), 'admin.php?page=appad-jobroller' ); ?><br />
							<?php printf( __( '<a target="_blank" href="%s">Buy Theme!</a>', APPAD_TD ), 'http://bit.ly/wQt43f' ); ?><br />
						</td>
					</tr>
					<tr>
						<td style="text-align:center;">
							<strong><?php _e( 'Vantage', APPAD_TD ); ?></strong><br />
							<img src="<?php echo plugins_url( '/vantage/screenshot.png', __FILE__ ); ?>" width="260px" /><br />
							<?php printf( __( '<a href="%s">Configure Ads</a>', APPAD_TD ), 'admin.php?page=appad-vantage' ); ?><br />
							<?php printf( __( '<a target="_blank" href="%s">Buy Theme!</a>', APPAD_TD ), 'http://bit.ly/s23oNj' ); ?><br />
						</td>
						<td style="text-align:center;">&nbsp;</td>
						<td style="text-align:center;">&nbsp;</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</div>
<div class="clear"></div>
