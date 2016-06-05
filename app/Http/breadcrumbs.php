<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{       
		$breadcrumbs->push('Home', route('home'));
});


Breadcrumbs::register('viewprofile', function($breadcrumbs, $id ) {
	//$breadcrumbs->parent('home');
	$breadcrumbs->push('Profile', route('viewprofile', $id));
	$breadcrumbs->push( $id, route('viewprofile', $id));
});

