<?php
class MHI_RemoveCurrencyDecimal_Model_Currency extends Mage_Directory_Model_Currency{
    /**
     * Format price to currency format
     *
     * @param float $price
     * @param array $options
     * @param bool $includeContainer
     * @param bool $addBrackets
     * @return string
     */
    public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
    {
        $currentCurrency = Mage::app()->getStore()->getCurrentCurrencyCode();
        
        if($currentCurrency == 'IDR')
            return $this->formatPrecision($price, 0, $options, $includeContainer, $addBrackets);
        else
            return $this->formatPrecision($price, 2, $options, $includeContainer, $addBrackets);
    }
}