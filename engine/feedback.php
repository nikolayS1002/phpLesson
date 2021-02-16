<?php
function getFeedback()
{
    return getAssocResult("SELECT * FROM feedback");
}

function putFeedback()
{
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['text'])));
    executeSql("INSERT INTO feedback(`name`, `text`) VALUES ('$name', '$text')");

    header("Location: /feedback/?message=ok");
}
