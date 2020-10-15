<h2>Галерея</h2>

<?php foreach ($gallery as $value):?>
    <a href="/photo/?id=<?=$value['id']?>"><img src="<?=IMG_SMALL . $value['name']?>"></a>
<? endforeach;?>