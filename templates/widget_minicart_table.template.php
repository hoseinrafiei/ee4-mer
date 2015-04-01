<?php
/** @type string $before_widget */
/** @type string $after_widget */
/** @type string $before_title */
/** @type string $after_title */
/** @type string $title */
/** @type string $register_url */
/** @type string $event_cart */
/** @type string $event_cart_name */
/** @type string $view_event_cart_url */
/** @type string $events_list_url */
/** @type string $mini_cart_display */

echo $before_widget;
echo $before_title . $title . $after_title;
?>

<div id="mini-cart-widget-dv" class="small-text">

	<form id="mini-cart-qty-frm" action="<?php echo $register_url; ?>" method="POST">
		<input type="hidden" name="event_cart" value="update">

		<div id="mini-cart-wrap-dv" class="mini-cart-wrap-dv">

			<table id="mini-cart-tbl" class="mini-cart-tbl" border="0" cellspacing="0" cellpadding="0"
				   style="width:100%;">

				<thead>
				<tr id="mini-cart-tbl-row-hdr" class="mini-cart-tbl-row">
					<th class="mini-cart-tbl-item-th jst-cntr"><?php echo __( 'Item', 'event_espresso' ); ?></th>
					<th class="mini-cart-tbl-price-th jst-cntr"><?php echo __( 'Price', 'event_espresso' )	; ?></th>
					<th class="mini-cart-tbl-qty-th jst-cntr"><?php echo __( 'Qty', 'event_espresso' ); ?></th>
					<th class="mini-cart-tbl-total-th jst-cntr"><?php echo __( 'Total', 'event_espresso' ); ?></th>
				</tr>
				</thead>

				<tbody id="ee-mini-cart-details">
				<?php echo $event_cart; ?>
				</tbody>

			</table>
		</div>

		<div id="mini-cart-whats-next-buttons" class="mini-cart-whats-next-buttons"<?php echo $mini_cart_display; ?>>

			<span class="tiny-text">
				<a class="mini-cart-view-cart-lnk view-cart-lnk mini-cart-button button <?php echo $btn_class; ?>" href="<?php echo $view_event_cart_url; ?>">
					<span class="dashicons dashicons-cart"></span><?php echo apply_filters( 'FHEE__EED_Multi_Event_Registration__view_event_cart_btn_txt', sprintf( __( 'view %s', 'event_espresso' ), $event_cart_name ) ); ?>
				</a>
			</span>
			<br />
			<span class="tiny-text">
				<a class="mini-cart-register-button mini-cart-button button <?php echo $btn_class; ?>" href="<?php echo $register_url; ?>">
					<?php echo apply_filters( 'FHEE__EED_Multi_Event_Registration__proceed_to_registration_btn_txt', __( 'Proceed to Registration', 'event_espresso' ) ); ?>
					<span class="dashicons dashicons-arrow-right-alt2"></span>
				</a>
			</span>

		</div>

	</form>

</div>

<?php echo $after_widget;?>
