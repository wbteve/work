<?php 
class UserAddressController extends UserBaseController
{
	public function indexAction(){
		$res = api_User::deliveryAddress($this->uid);
		$addressList = !empty($res['data']['lists']) ? $res['data']['lists'] : array();

		$select = $this->getParam('select');
		$this->_view->assign(array(
	        'addressList'    => $addressList,
	        'isSelect' => $select
	    ));
	}

	public function addAction(){
		
	}

	public function editAction(){

	}

	public function removeAction(){

	}
}