<?php

namespace bootstrap4\blocks;
use bootstrap4\BootstrapBlockGroup;

/**
 * Block created with Luya Block Creator Version 1.0.0-beta6-dev at 02.08.2016 16:34
 */
class BootstrapFileListBlock extends \cmsadmin\base\PhpBlock
{
    public $module = 'bootstrap4';
    /**
     * @var bool Choose whether block is a layout/container/segmnet/section block or not, Container elements will be optically displayed
     * in a different way for a better user experience. Container block will not display isDirty colorizing.
     */
    public $isContainer = false;

    /**
     * @var bool Choose whether a block can be cached trough the caching component. Be careful with caching container blocks.
     */
    public $cacheEnabled = false;

    /**
     * @var int The cache lifetime for this block in seconds (3600 = 1 hour), only affects when cacheEnabled is true
     */
    public $cacheExpiration = 3600;

    public function name()
    {
        return 'BootstrapFileListBlock';
    }

    /*
    public function getBlockGroup()
    {
        return BootstrapBlockGroup::className();
    }
    */

    public function icon()
    {
        return 'extension'; // choose icon from: http://materializecss.com/icons.html
    }

    public function config()
    {
        return [
        ];
    }

    /**
     * Return an array containing all extra vars. Those variables you can access in the Twig Templates via {{extras.*}}.
     */
    public function extraVars()
    {
        return [
        ];
    }

    public function admin()
    {

    }
}
