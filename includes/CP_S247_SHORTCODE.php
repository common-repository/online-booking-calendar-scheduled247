<?php


class S247_SHORTCODE {
	private static $instance;

	public static function getInstance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct() {
		add_shortcode( 's247-calendar', array( $this, 'shortcode_cb' ) );
	}


	function shortcode_cb( $attrs ) {
		$id = isset( $attrs['calendar'] ) ? $attrs['calendar'] : false;
		if ( $id ) {
			unset( $attrs['calendar'] );
		}
		$default     = array(
			'width'     => '600',
			'height'    => '585',
			'scrolling' => 'no',
		);
		$attrs = array_merge($default,$attrs);
		$iframe_attr = "";
		foreach ( $attrs as $key => $attr ) {
			$iframe_attr .= "$key=\"$attr\" ";
		}

		ob_start();
		?>
		<?php if ( $id ): ?>
            <script type="text/javascript">
                url = parent.document.URL;
                if (window.top != window.self) {
                    top.location.href = document.location.href;
                }
                document.write('<iframe src="https://www.scheduled247.com/widget/<?= $id ?>?url=' + url + '" <?= $iframe_attr ?>></iframe>');
            </script>

		<?php else: ?>
            <p>Please add calendar attribute to short-code example: <code>[s247-calendar
                    calendar="5b6a92c9bc324a001bdcf123"]</code></p>
		<?php endif; ?>
		<?php
		return ob_get_clean();
	}
}

return S247_SHORTCODE::getInstance();
