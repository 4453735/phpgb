<?php

function getAllFeedback() {
    $sql = "SELECT * FROM feedback ORDER BY id DESC";
    return getAssocResult($sql);
}

function getIdGoodFeedback($id) {
    $sql = "SELECT * FROM feedback WHERE id_good = '{$id}' ORDER BY id DESC";
    return getAssocResult($sql);
}

function addFeedBack($name, $feedback, $id) {
    var_dump($_POST);
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $name)));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $feedback)));
    $id = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $id)));
    $sql = "INSERT INTO feedback (name, feedback, id_good) VALUES ('{$name}', '{$feedback}', '{$id}')";
    mysqli_query(getDb(), $sql);
    return mysqli_insert_id(getDb());
}

function deleteFeedback($id_feed) {
    $id_feed = (int)$id_feed;
    mysqli_query(getDb(), "DELETE FROM `feedback` WHERE id = {$id_feed}");
}

function doFeedbackAction(&$params, $action) {
    $params['action'] = 'add';
    $params['button'] = 'Добавить';
    $params['name'] = '';
    $params['text'] = '';
    $params['id_good'] = '';
    $params['id_feed'] = '';

    if ($action == 'add') {
        var_dump($_POST);
        addFeedback($_POST['name'], $_POST['feedback'], $_POST['id_good']);
        header("Location: /feedback/?message=OK");
    }

    if ($action == "delete") {
        deleteFeedback($_GET['id_feed']);
        header("Location: /feedback/?message=delete");
    }

    if ($action == 'edit') {
        $id_feed = (int)$_GET['id_feed'];
        $result_feedback = getAssocResult("SELECT * FROM feedback WHERE id = {$id_feed}");
        $params['name'] = $result_feedback[0]['name'];
        $params['text'] = $result_feedback[0]['feedback'];
        $params['action'] = "save";
        $params['id_feed'] = $id_feed;
        $params['button'] = "Править";
    }

    if ($action == "save") {
        $id_feed = (int)$_POST['id_feedback'];
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
        $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['feedback'])));
        mysqli_query(getDb(), "UPDATE feedback SET name = '{$name}', feedback = '{$feedback}' WHERE id = '{$id_feed}'");
        header("Location: /feedback/?message=edit");


    }
}