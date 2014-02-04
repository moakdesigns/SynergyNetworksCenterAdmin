<?php
/** 
 * 
 * @author Vee W.
 * @license http://opensource.org/licenses/MIT
 * 
 */

class Controller_Account_Logout extends \Controller_BaseController 
{
	
	
	public function action_index() 
	{
		// log out.
		\Model_Accounts::logout();
		
		// go back
		if (\Input::referrer() != null && \Input::referrer() != \Uri::main()) {
			\Response::redirect(\Input::referrer());
		} else {
			\Response::redirect(\Uri::base());
		}
	}// action_index
	
	
}

