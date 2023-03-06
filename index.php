<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color: var(--main-bg-color);">
    <div class="container">
        <a class="navbar-brand" href="/">PHP Social</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    <h1 class="h2 mb-4">Оставить комментарий</h1>
    <form class="comments-form mb-5">
        <div class="form-floating mb-3">
            <textarea class="comments-form__textarea form-control" placeholder="Комментарий" id="comment" name="comment" required></textarea>
            <label for="comment">Комментарий</label>
        </div>
        <button type="submit" class="btn btn-indigo">Отправить</button>
    </form>
    <div class="post-list">
        <div class="post-card card mb-3" style="border-color: var(--main-bg-color);">
            <div class="card-body">
                <p class="card-text">Comments text</p>
            </div>
            <div class="post-card__footer card-header">
                <div class="post-card__wrapper">
                    <a href="#" class="post-card__author">
                        <span class="post-card__avatar">M</span>
                        <span class="post-card__name">Maxim K.</span>
                    </a>
                    <time class="post-card__time" datetime="">06.03.2023 17:44</time>
                </div>

                <div class="post-card__actions">
                    <button type="button" class="post-card__action post-card__reply">Ответить</button>
                    <button type="button" class="post-card__action post-card__remove">Удалить</button>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/index.js"></script>
</body>
</html>