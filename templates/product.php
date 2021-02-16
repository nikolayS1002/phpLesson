<h2>Каталог</h2>
<div class="catalog">
    <div class="catalog_item">
        <div class="catalog_item_name"><b><?=$product['name'];?></b></div>
        <a href="/product/?id=<?= $product['id'] ?>"><img src="/goods_img/<?= $product['id'] ?>.jpg" width="150"></a><br><br>
        <div class="catalog_item_price"><b><?=$product['price'];?></b></div><br>
        <div class="catalog_item_price"><?=$product['description'];?></div><br>
        <div class="catalog_item_btn"><input type="button" name="buyout" value="Купить"></div>
    </div><br><br>
</div>