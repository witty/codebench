<?php

Route::set('codebench', 'codebench(/<class>)')
	->defaults(array(
		'controller' => 'codebench',
		'action' => 'index',
		'class' => NULL));

