<?php

function getAllFeedback() {
    $sql = "SELECT * FROM feedback ORDER BY id DESC";
    return getAssocResult($sql);
}

function addFeedBack() {
    var_dump($_POST);
    die();
}

function doFeedbackAction($action) {
    if ($action == 'add') {
        addFeedBack();
    }
    if ($action == 'edit') {
        addFeedBack();
    }
}