<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package crraftunderboot
 */
?>
	<form method="get" class="form-inline" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="form-group">
			<input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'crraftunderboot' ); ?>" />
		</div>
	</form>
