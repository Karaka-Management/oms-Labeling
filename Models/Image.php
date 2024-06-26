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
 * Image.
 *
 * @package Modules\Labeling\Models
 * @license OMS License 2.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
class Image
{
    public int $x = 0;

    public int $y = 0;

    public float $ratio = 0.0;

    public float $rotate = 0.0;

    public int $width = 0;

    public int $height = 0;

    public int $x1 = 0;

    public int $x2 = 0;

    public int $y1 = 0;

    public int $y2 = 0;

    public string $src = '';

    public ?\GdImage $resource = null;

    public int $color = 0;
}
