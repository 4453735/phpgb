<div class="jumbotron">
    <img src="<?=IMG . $catalog['image']?>" alt="<?=$catalog['name']?>" width="300px" height="300px">
    <h1 class="display-4"><?=$catalog['name']?></h1>
    <p class="lead"><?=$catalog['description']?></p>
    <hr class="my-4">
    <p><?=$catalog['price']?> &#8381;</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Купить</a>

    <?foreach ($feedback as $value): ?>
        <div>
            <?=$value['date']?> <strong><?=$value['name']?></strong>:<br>
            <?=$value['feedback']?>
            <a href="/feedback/edit/?id_feed=<?=$value['id']?>">[править]</a>
            <a href="/feedback/delete/?id_feed=<?=$value['id']?>">[X]</a>
        </div>
    <?endforeach;?>

    <form action="/feedback/<?=$action?>/" method="post">
        Оставьте отзыв: <br>
        <input hidden type="text" name="id_feedback" value="<?=$id_feed?>">
        <input hidden type="text" name="id_good" value="<?=$id_good?>">
        <input type="text" name="name" placeholder="Ваше имя" value="<?=$name?>"><br>
        <input type="text" name="feedback" placeholder="Ваш отзыв" value="<?=$text?>"><br>
        <input type="submit" value="<?=$button?>">
    </form>
</div>

