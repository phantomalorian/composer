@extends('layout')

@section('main_content')
    <div class="py-5">
        <div class="jumbotron bg-light p-5 rounded">
            <h1 class="display-4">Главная страница Маркета</h1>
            <p class="lead">Маркет. Всё, что нужно, и даже больше.</p>
            <p class="lead">От свежих продуктов до гаджетов, от книг до стильной одежды. Ваш универсальный магазин с
                невероятным выбором и выгодными ценами. Просто, удобно, для вас.</p>
            <a class="btn btn-primary btn-lg" href="/review" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chat-left-text me-2" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                </svg>
                Отзывы »
            </a>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">
                            <span
                                style="background-color:#1E90FF; padding: 5px 10px; display: inline-block; border-radius: 3px; color: white;">
                                Олег
                            </span>
                        </h2>
                        <p class="card-text"
                            style="background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important;">
                            "Покупаю здесь регулярно уже больше года. Качество продуктов всегда на высоте,
                            особенно радует отдел фермерских товаров. Персонал вежливый, доставка всегда вовремя."</p>
                    </div>
                    <div class="card-footer border-0 bg-white">
                        <a href="/review" class="btn btn-outline-secondary">Посмотреть отзыв »</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">
                            <span
                                style="background-color:#32CD32; padding: 5px 10px; display: inline-block; border-radius: 3px; color: white;">
                                Марина
                            </span>
                        </h2>
                        <p class="card-text"
                            style="background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important;">"Люблю
                            этот маркет за широкий ассортимент и свежие продукты. Особенно нравится,
                            что есть органические овощи и фрукты. Цены адекватные, акции частые."</p>
                    </div>
                    <div class="card-footer border-0 bg-white">
                        <a href="/review" class="btn btn-outline-secondary">Посмотреть отзыв »</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">
                            <span
                                style="background-color:#FF8C00; padding: 5px 10px; display: inline-block; border-radius: 3px; color: white;">
                                Дмитрий
                            </span>
                        </h2>
                        <p class="card-text"
                            style="background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important;">
                            "Пользуюсь доставкой из этого маркета постоянно. Ни разу не было просроченных
                            товаров или проблем с качеством. Очень удобно, что можно заказать всё в одном месте."</p>
                    </div>
                    <div class="card-footer border-0 bg-white">
                        <a href="/review" class="btn btn-outline-secondary">Посмотреть отзыв »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection