<?php

/**
 * This file is part of the ramsey/uuid-console application
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Ramsey\Uuid\Console\Util;

use Ramsey\Uuid\UuidInterface;

interface UuidContentFormatterInterface
{
    /**
     * @return array<string[]>
     */
    public function getContent(UuidInterface $uuid): array;
}
