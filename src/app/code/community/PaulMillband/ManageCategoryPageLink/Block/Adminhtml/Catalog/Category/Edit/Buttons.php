<?php
class PaulMillband_ManageCategoryPageLink_Block_Adminhtml_Catalog_Category_Edit_Buttons 
    extends Mage_Adminhtml_Block_Catalog_Category_Abstract {
    public function addButtons()
    {
        $moduleName = 'managecategorypagelink';
        $buttonLabel = 'Go to category page';
        $buttonCode = 'PaulMillband_ManageCategoryPageLink_button';
        
        $category = $this->getCategory();
        $destinationUrl = $category->getUrl();
        $isActive = $category->getIsActive();
        
        // only show button for active categories and not add new category page
        if($isActive){
            $this->getParentBlock()->getChild('form')
                        ->addAdditionalButton($buttonCode, array(
                            'label' => $this->helper($moduleName)->__($buttonLabel),
                            'class' => 'add',
                            'onclick' => 'setLocation(\'' . $destinationUrl .'\')'
            ));
        }
        return $this;
    }
}