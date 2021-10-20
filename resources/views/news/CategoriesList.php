<a href="">Вход </a> <a href="">Регистрация</a><br><br>
<a href="/">Главная</a>
<h1>Категории новостей:</h1>
<?php foreach ($categoriesList as $item):?>
    <a href="<?=route('news.fromCategory', ['CategoryId'=>$item['id']])?>">
        <?=$item['name']?>
    </a><br>
<?php endforeach;?>
