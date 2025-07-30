<?php

	require '1.php';
	require '2.php';

	use Animal\Dog;
	use Bird\Parrot;

	$Dog = new Dog();
	$Dog->sound();

	$Bird = new Parrot();
	$Bird->sound();

?>