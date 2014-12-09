<?php ob_start() ?>

<div class="products">
    <ul class="product-list">
<?php $products = new SimpleXMLElement(file_get_contents("products.xml"));?>
<?php foreach( $products as $product ) { ?>
        <li class="product">
            <a href="detail.php?id=<?=$product->id ?>">
                <img class="product-image" src="<?=$product->image ?>">
                <span class="product-name"><?=$product->name ?></span><br />
                <span class="product-price"><?=$product->price ?></span>
            </a>
        </li>
<?php } ?>
    </ul>
</div>

<?php $content = ob_get_clean() ?>
<?php require_once(__DIR__ . '/layout.php') ?>
