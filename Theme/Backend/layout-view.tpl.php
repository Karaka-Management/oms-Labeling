<?php
/**
 * Jingga
 *
 * PHP Version 8.1
 *
 * @package   Modules\StockTaking
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

echo $this->data['nav']->render();

$layout = $this->data['layout'];

$media    = $layout->template;
$template = \reset($media->sources);

$layout = include_once $template->getAbsolutePath();

\ob_start();
\imagepng($layout->render());
$imageData = \ob_get_clean();

$imageBase64 = \base64_encode($imageData);
// Get the image MIME type
$imageType = 'image/png'; // Assuming JPEG format in this example

// Generate the data URI for the inline image
$inlineImage = 'data:' . $imageType . ';base64,' . $imageBase64;
?>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="portlet">
            <img style="width: 100%" src="<?php echo $inlineImage; ?>" alt="Inline Image">
        </div>
    </div>
</div>