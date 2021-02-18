<h2>Каталог</h2>
<div class="catalog">
<?php foreach ($catalog as $product) : ?>
    <div class="catalog_item">
        <div class="catalog_item_name"><b><?=$product['name'];?></b></div>
        <a href="/product/?id=<?= $product['id'] ?>"><img src="/goods_img/<?= $product['id'] ?>.jpg" width="150"></a>
        <div class="catalog_item_price"><b><?=$product['price'];?></b></div><br>
        <div class="catalog_item_btn"><a href="/catalog/?action=buy&id=<?= $product['id'] ?>">Купить</a></div>
    </div><br><br>
<?php endforeach; ?>    
</div>