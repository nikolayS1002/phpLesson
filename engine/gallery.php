<?php
function getGallery() {
    return array_splice(scandir("gallery_img/small"), 2);
}

function getImages() {
    return getAssocResult("SELECT * FROM images");
}

function getSortedImages() {
    return getAssocResult("SELECT * FROM images ORDER BY views DESC ");
}

function getOneImage($id) {
    return getAssocResult("SELECT * FROM images WHERE id = {$id}")[0];
}

function updateViews($id) {
    return executeSql("UPDATE images SET views = views + 1 WHERE id = $id");
}

