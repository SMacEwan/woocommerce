add_action( 'woocommerce_flat_rate_shipping_add_rate', 'add_another_custom_flat_rate', 10, 2 );

function add_another_custom_flat_rate( $method, $rate ) {
	$new_rate          = $rate;
	$new_rate['id']    .= ':' . 'custom_rate_name'; // Append a custom ID
	$new_rate['label'] = 'Rushed Shipping'; // Rename to 'Rushed Shipping'
	$new_rate['cost']  += 2; // Add $2 to the cost
	
	// Add it to WC
	$method->add_rate( $new_rate );
}
