<h2>Каталог</h2>
<div class="catalog">
    <?php foreach ($catalog as $product) : ?>
        <div class="catalog_item">
            <div class="catalog_item_name"><b><?= $product['name']; ?></b></div>
            <a href="/product/?id=<?= $product['id'] ?>"><img src="/goods_img/<?= $product['id'] ?>.jpg" width="150"></a>
            <div class="catalog_item_price"><b>Цена: <?= $product['price']; ?></b></div><br>
            <div class="catalog_item_likes">likes: <span id="<?= $product['id']; ?>"><?= $product['likes']; ?></span>
                <button class="like" data-id="<?= $product['id']; ?>">Лайк</button>
            </div><br>
            <div class="catalog_item_btn"><a href="/catalog/?action=buy&id=<?= $product['id'] ?>">Купить</a></div>
        </div><br><br>
    <?php endforeach; ?>
</div>

<script>
    let buttons = document.querySelectorAll('.like');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/?action=apilike&id=' + id);
                    const answer = await response.json();
                    document.getElementById(id).innerText = answer.like;
                }
            )();
        })
    })
</script>