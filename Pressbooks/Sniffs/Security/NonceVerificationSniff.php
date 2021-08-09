<?php

namespace Pressbooks\Sniffs\Security;

class NonceVerificationSniff extends \WordPressCS\WordPress\Sniffs\Security\NonceVerificationSniff {

	/**
	 * Chill out for $_GET and $_REQUEST
	 *
	 * @see https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1172
	 *
	 * @var array
	 */
	protected $superglobals = [
		'$_POST' => true,
		'$_FILE' => true,
	];
}
