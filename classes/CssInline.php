<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Parsers\Classes;

use \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

/**
 * CssInline service class
*/
class CssInline
{
    /**
     * Css inliner
     *
     * @var object
     */
    protected $inliner;

    /**
     * Constructor
     */
    public function __construct()
    {        
        $this->inliner = new CssToInlineStyles();   
    }

    /**
     * Inline css styles
     *
     * @param string $htmlCode
     * @param string $cssCode
     * @return string
     */
    public function compile(string $htmlCode, string $cssCode): string
    {
        return  $this->inliner->convert($htmlCode,$cssCode);
    }
}
