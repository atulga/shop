<?php ob_start() ?>

<div class="product-image-detailed">
    <img class="main" src="images/shagai/main shagai.jpg"/>
    <img class="thumb" src="images/shagai/zoomed blue shagai.jpg"/>
    <img class="thumb" src="images/shagai/zoomed red shagai.jpg"/>
</div>
<div>
    <h5 class="product-detail-name">Алаг мэлхийн шагай</h5>
    <div class="product-price">20,000₮</div><br/>
    <b>Өнгө алаглуулан будсан</b> алаг мэлхийн шагайнд дараах зүйлс багтсан:
    <ul>
        <li>Улаан шагай 40 ширхэг</li>
        <li>Хөх шагай 42 ширхэг</li>
        <li>Шоо нэг ширхэг</li>
        <li>Торон уут дагалдана</li>
    </ul>
    Уламжлалаа хадгалан үлдээж гэр бүлээрээ цагаа өнгөрөөхөд тохиромжтой.
</div>
<div class="clear"></div>
<div class="product-details">
    <p>
    Алаг мэлхий нь Монголчуудын уламжлалт тоглоом билээ.<br/>
    Бог малын шагайгаар мэлхий өрөн, ээлж ээлжээр шоо хаяж буусан тоогоор мэлхийн хэсгийг авдаг.<br/>
    Хэрэв тухайн тооны ямар нэг хэсэг байхгүй бол дараагийн тоглогч үргэлжлүүлдэг.</br>
    </p>
    <p>Мэлхийн бүх хэсгийг дуустал ээлжилнэ. Мэлхийг дууссаны дараа хамгийн их шагайтай тоглогч ялагч болдог.
    Алаг мэлхийг хэдэн ч тоглогч тоглож болдог бөгөөд ихэвчлэн айл гэрээрээ цуглаж тоглоход илүү хөгжөөнтэй байдаг гэж үздэг байжээ.
    </p>
    <p>Алаг мэлхий нь дараах тооны шагайнаас бүрддэг:</p>
    <ul>
        <li>Толгой 1, Зүрх 1</li>
        <li>Сүүл 2</li>
        <li>Хоёр бөөр тус бүр 3-н шагай</li>
        <li>Дөрвөн мөч тус тус 4-н шагай</li>
        <li>Дөрвөн сарвуу тус тус 5-н шагай</li>
        <li>Дараалласан зургаан нуруу тус тус 6-н шагай</li>
    </ul>
    Нийт 62 шагайнаас бүрддэг.
</div>
<div class="product-seller">
    Энэ бүтээгдэхүүнийг худалдагчтай холбоо барих<br/>
    <b>Утас</b>: 99437911 <br />
    <b>Мэйл хаяг</b>: ariunbayar.b@gmail.com <br />
    <img src="images/sellers/ariunbayar.jpg"> <br />
    <span class="name">Ариунбаяр</span>
</div>

<?php $content = ob_get_clean() ?>
<?php require_once(__DIR__ . '/layout.php') ?>
