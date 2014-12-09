<?php ob_start() ?>

<div class="products">
    <ul class="product-list">
        <li class="product">
            <img class="product-image" src="static/images/burhuul.png">
            <span class="product-name">Гэрлийн бүрхүүл</span><br />
            <span class="product-price">15000₮</span>
        </li>
        <li class="product">
            <img class="product-image" src="static/images/2_shagai.jpg">
            <span class="product-name">Алаг мэлхийний шагай</span><br />
            <span class="product-price">20000₮</span>
        </li>
        <li class="product">
            <img class="product-image" src="">
            <span class="product-name">Ажлийн ширээ</span><br />
            <span class="product-price">50000₮</span>
        </li>
    </ul>
</div>

<?php $content = ob_get_clean() ?>
<?php require_once(__DIR__ . '/layout.php') ?>
