<?php
/** Register nav menus. */
add_action( 'init', 'aphasia_register_menus' );

/** Registers the the core menus */
function aphasia_register_menus() {

	/* Register the 'bottom' menu. */
	register_nav_menu( 'aphasia-bottom-menu', 'Aphasia Bottom Menu' );
	
}
