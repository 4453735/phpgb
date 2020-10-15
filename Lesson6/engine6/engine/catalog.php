<?php
function getCatalog() {
    return getAssocResult("SELECT * FROM goods ORDER BY id DESC");
}

function getOneGood($id) {
    return getAssocResult("SELECT * FROM goods WHERE id = {$id}")[0];
}