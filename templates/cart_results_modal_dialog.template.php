<?php
/** @type string $results */
/** @type string $close_modal */
/** @type string $view_event_cart_url */
/** @type string $event_cart_name */
/** @type string $events_list_url */
/** @type string $register_url */
/** @type string $current_cart */
?>
<a class="close-modal-js close-espresso-notice">&times;</a>
<div id="cart-results-modal-dv">
	<div class="cart-results-wrap-dv">
		<h3><?php echo $results; ?></h3>
	</div>
	<div id="cart-results-whats-next-buttons-dv">
		<span class="tiny-text">
			<a class="cart-results-go-back-button mini-cart-button button<?php echo $close_modal; ?>" href="<?php echo
			$events_list_url; ?>">
				<span class="dashicons dashicons-arrow-left-alt2"></span><?php echo apply_filters( 'FHEE__EED_Multi_Event_Registration__return_to_events_list_btn_txt', __( 'Return to Events List', 'event_espresso' ) ); ?>
			</a>
		</span>
		<span class="tiny-text">
			<a class="cart-results-register-button mini-cart-button button" href="<?php echo $register_url; ?>">
				<?php echo apply_filters( 'FHEE__EED_Multi_Event_Registration__proceed_to_registration_btn_txt', __( 'Proceed to Registration', 'event_espresso' ) ); ?>
				<span class="dashicons dashicons-arrow-right-alt2"></span>
			</a>
		</span>
	</div>
	<div id="cart-results-current-cart-dv">
		<h5><?php echo $current_cart; ?></h5>
		<div id="cart-results-view-cart-dv">
			<a class="mini-cart-view-cart-lnk view-cart-lnk mini-cart-button button" href="<?php echo $view_event_cart_url; ?>">
				<span class="dashicons dashicons-cart"></span><?php echo apply_filters( 'FHEE__EED_Multi_Event_Registration__view_event_cart_btn_txt', sprintf( __( 'view %s', 'event_espresso' ), $event_cart_name ) ); ?>
			</a>
		</div>
	</div>
</div>

