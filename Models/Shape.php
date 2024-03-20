<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules\Labeling\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\Labeling\Models;

/**
 * Shape.
 *
 * @package Modules\Labeling\Models
 * @license OMS License 2.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
class Shape
{
    public int $x = 0;

    public int $y = 0;

    public int $x2 = 0;

    public int $y2 = 0;

    public int $type = ShapeType::RECTANGLE;

    public int $color = 0;

    public int $borderThickness = 1;

    public int $fillColor = -1;
}
