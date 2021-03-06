<?php
/**
 * This file is part of Symphonia package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symphonia\CoreBundle\Service\Upload;

/**
 * Identifiable objects that have their own upload paths
 */
interface IdentifiableInterface
{
    public function getId();
}