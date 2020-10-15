<h2>Каталог</h2>
<div class="row">
<?php foreach ($catalog as $value):?>

    <div class="card" style="width: 18rem;">
        <a href="/good/?id=<?=$value['id']?>"><img src="<?=IMG . $value['image']?>" class="card-img-top" alt="<?=$value['name']?>"></a>
        <div class="card-body">
            <h5 class="card-title"><a href="/good/?id=<?=$value['id']?>"><?=$value['name']?></a></h5>
            <p class="card-text"><?=$value['price']?> руб.</p>
            <a href="/good/?id=<?=$value['id']?>" class="btn btn-primary">Купить</a>
        </div>
    </div>
<? endforeach;?>
</div>