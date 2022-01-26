<?php
/*
 * This file is part of the FreshDoctrineEnumBundle.
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fresh\DoctrineEnumBundle\Tests\Validator;

use Fresh\DoctrineEnumBundle\Tests\Fixtures\DBAL\Types\BasketballPositionType;
use Fresh\DoctrineEnumBundle\Validator\Constraints\EnumType;
use PHPUnit\Framework\TestCase;

/**
 * EnumTypeTest.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
final class EnumTypeTest extends TestCase
{
    public function testConstructor(): void
    {
        $constraint = new EnumType(entity: BasketballPositionType::class);

        self::assertEquals(BasketballPositionType::getValues(), $constraint->choices);
    }

    public function testGetDefaultOption(): void
    {
        $constraint = new EnumType(entity: BasketballPositionType::class);

        self::assertEquals('choices', $constraint->getDefaultOption());
    }
}
