<?php
/*filtro que desativa o menu admin para todos usuarios */
add_filter( 'show_admin_bar', '__return_false' );