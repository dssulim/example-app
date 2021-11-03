<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">О нас</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto error, fuga inventore nemo quia sapiente.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
{{--                    <h4 class="text-white">Contact</h4>--}}
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Главная</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-white">Все новости</a></li>
                        <li><a href="{{ route('news.categoryList') }}" class="text-white">Категории новостей</a></li>
                        <li><a href="{{ route('admin.index') }}" class="text-white">Админка</a></li>
                        <li><a href="{{ route('authorization') }}" class="text-white">Вход</a></li>
                        <li><a href="#" class="text-white">Регистрация</a></li>
                        <li><a href="{{ route('news.feedback.index') }}" class="text-white">Обратная связь</a></li>
                        <li><a href="{{ route('news.upload.index') }}" class="text-white">Выгрузка новостей</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{ route('news.index') }}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>News</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
