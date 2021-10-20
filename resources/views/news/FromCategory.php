<a href="<?=route('authorization')?>">Вход </a> <a href="">Регистрация</a><br><br>
<a href="/">Главная</a>
<h1>Новости из категории  <?=$categoryID?>.</h1>
<?php foreach ($newsList as $news): ?>
<div>
    <h2>
        <a href="<?=route('news.show', ['id'=>$news['id']])?>">
            <?=$news['title']?>
        </a>
        <p>Автор: <?=$news['author']?></p>
        <p><?=$news['description']?></p>
    </h2>
</div>

<?php endforeach;?>