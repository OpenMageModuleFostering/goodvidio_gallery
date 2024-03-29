<?php

/**
 * MIT License
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @package    Goodvidio_Gallery
 * @author     Goodvidio
 * @license    https://opensource.org/licenses/MIT MIT License
 * @copyright  Copyright (c) 2016 Goodvidio (http://www.goodvid.io)
 */
class Goodvidio_Gallery_Block_Checkout_Track extends Mage_Core_Block_Template {

    public function isEnabled() {
        return Mage::getStoreConfig('integration/ecommercetracking/enabled');
    }

    /**
     * Get Items currently in the Cart
     * @return array
     */
    public function getItems() {

        $items = Mage::getModel( 'checkout/cart' )
                     ->getQuote()
                     ->getAllItems();

        $arr = [ ];

        foreach ( $items as $i ) {
            $product = $i->getProduct();

            $categoryId = array_pop( $product->getCategoryIds() );

            $t               = [ ];
            $t[ 'name' ]     = $product->getName();
            $t[ 'sku' ]      = $product->getSku();
            $t[ 'price' ]    = number_format( (float) $product->getPrice(), 2, '.', '' );
            $t[ 'category' ] = Mage::getModel( 'catalog/category' )
                                   ->setStoreId( Mage::app()
                                                     ->getStore()
                                                     ->getId() )
                                   ->load( $categoryId )
                                   ->getName();;

            $t[ 'quantity' ] = $i->getQty();

            $arr[ ] = $t;
        }

        return $arr;
    }
}
