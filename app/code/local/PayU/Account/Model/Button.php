<?php

/**
*	ver. 1.8.1
*	PayU Button Model
*	
*	@copyright  Copyright (c) 2011-2012 PayU
*	@license    http://opensource.org/licenses/GPL-3.0  Open Software License (GPL 3.0)
 *	http://www.payu.com
 *	http://www.openpayu.com
 *	http://twitter.com/openpayu
*/

class PayU_Account_Model_Button
{

    public function toOptionArray()
    {
    	
    	/** @var array get list of available buttons */
    	$buttons = Mage::getModel('payu_account/config')->getGoods('media_buttons');
            
        $options = array();		  
        
        foreach ($buttons as $label) {
            $options[] = array(
               'value' => $label,
               'label' => $label
            );
        }
        return $options;
    }
}