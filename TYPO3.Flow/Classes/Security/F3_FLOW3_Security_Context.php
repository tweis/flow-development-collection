<?php

declare(ENCODING = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package FLOW3
 * @subpackage Security
 * @version $Id:$
 */

/**
 * This is the default implementation of a security context, which holds current security information
 * like GrantedAuthorities oder details auf authenticated users.
 *
 * @package FLOW3
 * @subpackage Security
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class F3_FLOW3_Security_Context {

//TODO: This must be confiugred/filled by configuration. The order of the tokens is important, because this is the order they are tried to authenticate.
	/**
	 * @var array Array of configured tokens (might have request patterns)
	 */
	protected $tokens = array();

	/**
	 * @var boolean TRUE, if all tokens have to be authenticated, FALSE if one is sufficient.
	 */
	protected $authenticateAllTokens = FALSE;

//TODO: Prevent duplicate entries
	/**
	 * Adds a new authentication token to the context, usually called by an authenticaton manager
	 *
	 * @param F3_FLOW3_Security_Authentication_TokenInterface $authenticationToken The token to be added
	 * @return void
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function addAuthenticationToken(F3_FLOW3_Security_Authentication_TokenInterface $authenticationToken) {

	}

	/**
	 * Sets the request the context is used for.
	 *
	 * @param F3_FLOW3_MVC_Request $request The current request
	 * @return void
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function setRequest(F3_FLOW3_MVC_Request $request) {
		//$this->request = $request;
	}

	/**
	 * Returns TRUE, if all active tokens have to be authenticated.
	 *
	 * @return boolean TRUE, if all active tokens have to be authenticated.
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function authenticateAllTokens() {
		return $this->authenticateAllTokens;
	}

	/**
	 * Returns all F3_FLOW3_Security_Authentication_Tokens of the security context which are active for the current request
	 *
	 * @return array Array of set F3_FLOW3_Authentication_Token objects
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function getAuthenticationTokens() {
		//cache tokens active for the current request in an extra array
	}
}

?>