

<?php
// Подключите базу данных здесь

require('products_db.php');
require('components/header.php');

// Объявите переменную здесь
$id = 7;
$title = get_product_title($id);
$img_url = get_img_url($id);

require('components/product_info.php');
require('components/footer.php');
?>
<div class="data-php" data-attr="<?=$title; ?>"></div>
<script type="application/javascript" src="script.js"></script>

