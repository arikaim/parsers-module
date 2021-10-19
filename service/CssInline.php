<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Parsers\Service;

use \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

use Arikaim\Core\Service\Service;
use Arikaim\Core\Service\ServiceInterface;

/**
 * CssInline service class
*/
class CssInline extends Service implements ServiceInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setServiceName('css.inline');       
    }

    /**
     * Inline css styles
     *
     * @param string $htmlCode
     * @param string $cssCode
     * @return string
     */
    public function inlineCss(string $htmlCode, string $cssCode): string
    {
        $inliner = new CssToInlineStyles();

        return $inliner->convert($htmlCode,$cssCode);
    }
}
