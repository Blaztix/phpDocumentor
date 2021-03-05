<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link https://phpdoc.org
 */

namespace phpDocumentor\Guides\Renderers;

use phpDocumentor\Guides\Nodes\Node;

interface FormatListRenderer
{
    public function createElement(Node $node, string $text, string $prefix) : string;

    /**
     * @return string[]
     */
    public function createList(Node $node, bool $ordered) : array;
}
