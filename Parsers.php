<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Parsers;

use Arikaim\Core\Extension\Module;

/**
 * Parsers module class
 */
class Parsers extends Module
{
    /**
     * Install module
     *
     * @return void
     */
    public function install()
    {        
        // service
        $this->registerService('CssInline');
    }
}
