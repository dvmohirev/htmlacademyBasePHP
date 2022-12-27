

<?php
// Подключите базу данных здесь

require('products_db.php');
require('components/header.php');

$title = get_product_title(5);

require('components/product_info.php');
require('components/footer.php');
?>
<div class="data-php" data-attr="<?=$title; ?>"></div>
<script type="application/javascript" src="script.js"></script>

