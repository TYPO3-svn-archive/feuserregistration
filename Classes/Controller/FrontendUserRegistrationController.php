<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Frank Nägler <typo3@naegler.net>
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the FrontendUserRegistration object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Feuserregistration_Controller_FrontendUserRegistrationController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_Extbase_Domain_Repository_FrontendUserRepository
	 */
	protected $frontendUserRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->frontendUserRepository = t3lib_div::makeInstance('Tx_Extbase_Domain_Repository_FrontendUserRepository');
	}
	
	/**
	 * action to show the registration form
	 * @return void
	 */
	protected function newAction() {
		
	}
	
	/**
	 * action to create a new frontend user
	 * @TODO: render newAction on failure
	 * @return void
	 */
	protected function createAction() {
		
	}
	
	/**
	 * action to confirm the registration, e.g. by link in email
	 * @return void
	 */
	protected function confirmAction() {
		
	}
	
	/**
	 * action to edit a frontend user, shows the prefilles form
	 * @return void
	 */
	protected function editAction() {
		
	}
	
	/**
	 * action to update an existing frontend user
	 * TODO: render editAction on failure
	 * @return void
	 */
	protected function updateAction() {
		
	}
	
	/**
	 * action to delete a existing frontend user
	 * @return void
	 */
	protected function deleteAction() {
		
	}
	
	/**
	 * action to resend the confirmation email 
	 * @return void
	 */
	protected function resendAction() {
		
	}
}
?>