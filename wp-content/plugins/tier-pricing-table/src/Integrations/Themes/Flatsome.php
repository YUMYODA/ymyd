<?php namespace TierPricingTable\Integrations\Themes;

class Flatsome {

	public function __construct() {
		add_action('wp_head', function () {
			?>
			<style>
				.price-rules-table tbody td {
					padding: 10px;
				}

				.price-rules-table th {
					padding-left: 10px;
				}
			</style>
			<?php
		});
	}
}
