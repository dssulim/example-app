<a href="<?=route('authorization')?>">Вход </a> <a href="">Регистрация</a><br><br>
<a href="/">Главная</a>
<?php foreach ($categoriesNews as $item): ?>
    <div>
        <h1>
            <a href="<?=route('news.fromCategory', ['CategoryId'=>$item['id']])?>">
                Категория: <?=$item['name']?>
            </a>
        </h1>
        <?php foreach ($item['newsList'] as $key=>$value): ?>
            <div>
                <h3>
                    <a href="<?=route('news.show', ['id'=>$value['id']])?>">
                        <?=$value['title']?>
                    </a>
                </h3>
                <p>Автор: <?=$value['author']?></p>
                <p><?=$value['description']?></p>
            </div>
        <?php endforeach;?>
        <hr>
    </div>
<?php endforeach;?>