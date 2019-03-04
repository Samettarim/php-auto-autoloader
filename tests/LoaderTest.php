<?php

declare(strict_types = 1);

namespace Aautoloder;

define('MBT_DOCUMENT_ROOT', __DIR__);

use PHPUnit\Framework\TestCase;

/**
 * Syntaxo
 * 
 * @copyright   (c) 2018, Samet Tarim 
 * @author      Samet Tarim (prod3v3loper)
 * @package     Melabuai
 * @subpackage  autoloader
 * @since       1.0
 * @link        https://prod3v3loper.github.io/php-auto-autoloader/
 */
class LoaderTest extends TestCase {

    public function testHasClassAttribute(): void {
        $this->assertClassHasAttribute(
                'dir', Loader::class
        );
    }
}
