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
class Goodvidio_Gallery_Block_Adminhtml_System_Config_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface {

    /**
     * Render Information element
     *
     * @param Varien_Data_Form_Element_Abstract $element
     *
     * @return string
     */
    public function render( Varien_Data_Form_Element_Abstract $element ) {
        $html = '<tr><td><img width="200" src="http://goodvid.io/imgs/logo.png" alt="Goodvid.io"/></td><td style="padding-left:50px">If you have any questions or need assistance you can contact our customer success team through the <a href="https://goodvid.io" target="blank">Goodvidio App</a>. Any screenshots or logs can be very useful to trace the problem and provide a solution much faster.</td></tr>';

        return $html;
    }
}
