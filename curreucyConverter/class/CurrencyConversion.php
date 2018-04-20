<?php
/**
 * Created by PhpStorm.
 * User: Vasilyev
 * Date: 18.04.2018
 * Time: 10:43
 */

//namespace CurrencyConversion;

class CurrencyConversion
{
    var $total = 0;
    public function Conversion($arrJsonWithcurrency, $firstCurrency, $secondCurrency)
    {
       return $this->total = (
           $arrJsonWithcurrency['$firstCurrency']['index']
           / 26
           * $arrJsonWithcurrency['$secondCurrency']['index']);
    }


}