<h2>Галерея</h2>
<div id="main">
    <div class="post_title">
    </div>
    <div class="gallery">
        <!-- <?php foreach ($gallery as $value) : ?>
            <a rel="gallery" class="photo" href="/gallery_img/big/<?= $value; ?>"><img src="/gallery_img/small/<?= $value; ?>" width="150" height="100" /></a>
        <?php endforeach; ?> -->
        <?php foreach ($images as $item) : ?>
            <a rel="gallery" class="photo" href="/imageone/?id=<?= $item['id'] ?>"><img src="/gallery_img/small/<?= $item['title'] ?>" width="150" height="100" /></a><!-- <b><?= $item['views'] ?></b> -->
        <?php endforeach ?>
    </div>
</div><br><br>
<?= $message ?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Загрузить">
</form>