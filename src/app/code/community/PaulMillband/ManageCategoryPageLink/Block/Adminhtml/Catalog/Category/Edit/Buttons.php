<?php
class PaulMillband_ManageCategoryPageLink_Block_Adminhtml_Catalog_Category_Edit_Buttons 
    extends Mage_Adminhtml_Block_Catalog_Category_Abstract {
    public function addButtons()
    {
        $this->getParentBlock()->getChild('form')
                    ->addAdditionalButton('some_button_code_here', array(
                        'label' => $this->helper('[module]')->__('Button label here'),
                        'class' => 'add',
                        'onclick' => 'alert(\'It works\')' //change the action of the button to what you need
        ));
        return $this;
    }
}