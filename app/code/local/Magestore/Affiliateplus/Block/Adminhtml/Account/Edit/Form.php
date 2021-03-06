<?php

class Magestore_Affiliateplus_Block_Adminhtml_Account_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
	{
		$accountId = $this->getRequest()->getParam('id');
		$storeId = $this->getRequest()->getParam('store');
		$form = new Varien_Data_Form(array(
								  'id' => 'edit_form',
								  'action' => $this->getUrl('*/*/save', array('id' => $accountId, 'store' => $storeId)),
								  'method' => 'post',
								  'enctype' => 'multipart/form-data'
							   )
		);
		
		$form->setUseContainer(true);
		$this->setForm($form);
		return parent::_prepareForm();
	}
}