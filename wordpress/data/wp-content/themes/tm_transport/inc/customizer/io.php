<?php
/**
 * Add Import/export
 * ==============
 */
add_action( 'customize_controls_init', 'infinity_customize_preview_css' );

function tm_get_customizer_io_html() {
	ob_start();
	?>
	<span class="customize-control-title">
      <?php _e( 'Export', 'tm_transport' ); ?>
    </span>
	<span class="description customize-control-description">
        <?php _e( 'Click the button below to export the customization settings for this theme.', 'tm_transport' ); ?>
    </span>
	<a type="button" class="button"
	   href="<?php echo get_site_url() . '/wp-admin/options.php?page=thememove_export_customizer_options'; ?>"><?php _e( 'Export', 'tm_transport' ); ?></a>
	<span class="customize-control-title">
        <?php _e( 'Import', 'tm_transport' ); ?>
    </span>
	<span class="description customize-control-description">
        <?php _e( 'Upload a file to import customization settings for this theme.', 'tm_transport' ); ?>
    </span>
	<a type="button" class="button" id="import-btn"><?php _e( 'Import', 'tm_transport' ); ?></a>
	<form id="import-form" style="display: none;">
		<input type="file" id="import-file" name="import-file"/>
		<input type="hidden" name="action" value="thememove_customizer_options_import"/>
	</form>
	<script type="text/javascript">
		jQuery(function ($) {
			$('#import-btn').on('click', function (evt) {
				evt.preventDefault();

				if (confirm('Do you want to import customizer options?')) {
					$('#import-file').on('change.thememove', function () {
						$(this).off('change.thememove');

						$.ajax({
							url: ajaxurl,
							type: 'POST',
							data: new FormData($('#import-form')[0]),
							cache: false,
							contentType: false,
							processData: false,
							dataType: 'json',
							success: function (response) {
								if (response.status) {
									alert(response.message);
									location.reload();
								}
							}
						});
					});

					$('#import-file').trigger('click');
				}
			});
		});
	</script>
	<?php
	return ob_get_clean();
}

Kirki::add_field( '', array(
	'type'     => 'custom',
	'setting'  => 'custom_demo',
	'section'  => 'io_section',
	'default'  => tm_get_customizer_io_html(),
	'priority' => 12,
) );
