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

use Symfony\Component\DomCrawler\Crawler;
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
    }

    /**
     * Create html document
     *
     * @param string $html
     * @return Crawler
     */
    public static function createHtmlDocument(string $html)
    {
        return new Crawler($html);
    } 
}
