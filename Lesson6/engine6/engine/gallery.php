<?php
function getGallery() {
    return getAssocResult("SELECT * FROM photo ORDER BY likes DESC");
}

function getOnePhoto($id) {
    return getAssocResult("SELECT * FROM photo WHERE id = {$id}")[0];
}

function getPlusLike($id) {
    // return executeSql("UPDATE photo SET likes = likes + 1 WHERE id = {$id}");
    mysqli_query(getDb(),"UPDATE photo SET likes = likes + 1 WHERE id = {$id}");
}