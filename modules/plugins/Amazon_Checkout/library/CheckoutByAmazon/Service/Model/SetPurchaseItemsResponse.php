<?php
/*******************************************************************************
 *  Copyright 2011 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *
 *  You may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 *  This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 *  CONDITIONS OF ANY KIND, either express or implied. See the License for the
 *  specific language governing permissions and limitations under the License.
 * *****************************************************************************
 */


/**
 *  @see CheckoutByAmazon_Service_Model
 */
require_once ('CheckoutByAmazon/Service/Model.php');  

    

/**
 * CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: CheckoutByAmazon_Service_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse extends CheckoutByAmazon_Service_Model
{


    /**
     * Construct new CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: CheckoutByAmazon_Service_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'CheckoutByAmazon_Service_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a','http://payments.amazon.com/checkout/v2/2010-08-31/'); 
        $response = $xpath->query('//a:SetPurchaseItemsResponse');
        if ($response->length == 1) {
            return new CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct CheckoutByAmazon_Service_Model_SetPurchaseItemsResponse from provided XML. 
                                  Make sure that SetPurchaseItemsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<SetPurchaseItemsResponse xmlns=\"http://payments.amazon.com/checkout/v2/2010-08-31/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</SetPurchaseItemsResponse>";
        return $xml;
    }

}
?>
