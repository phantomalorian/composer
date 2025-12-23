@extends('layout')

@section('main_content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 mb-4">Отзывы о нашем маркете</h1>
                <p class="lead mb-5">Честные мнения наших клиентов о качестве товаров и уровне обслуживания.</p>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row mb-5">
                    <h2 class="h3 mb-4">Что говорят наши клиенты</h2>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                        <span class="text-primary fw-bold">О</span>
                                    </div>
                                    <div>
                                        <h3 class="h5 mb-0">Олег</h3>
                                        <div class="text-warning small">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">"Покупаю здесь регулярно уже больше года. Качество продуктов всегда на
                                    высоте, особенно радует отдел фермерских товаров. Персонал вежливый, доставка всегда
                                    вовремя."</p>
                                <p class="text-muted small mb-0">2 недели назад</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                        <span class="text-success fw-bold">М</span>
                                    </div>
                                    <div>
                                        <h3 class="h5 mb-0">Марина</h3>
                                        <div class="text-warning small">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">"Люблю этот маркет за широкий ассортимент и свежие продукты. Особенно
                                    нравится, что есть органические овощи и фрукты. Цены адекватные, акции частые."</p>
                                <p class="text-muted small mb-0">1 месяц назад</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                        <span class="text-warning fw-bold">А</span>
                                    </div>
                                    <div>
                                        <h3 class="h5 mb-0">Анна</h3>
                                        <div class="text-warning small">
                                            ★★★★☆
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">"Хороший выбор товаров для дома. Обслуживание на кассе быстрое, но
                                    иногда бывают очереди в выходные. В целом рекомендую!"</p>
                                <p class="text-muted small mb-0">3 месяца назад</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3">
                                        <span class="text-info fw-bold">Д</span>
                                    </div>
                                    <div>
                                        <h3 class="h5 mb-0">Дмитрий</h3>
                                        <div class="text-warning small">
                                            ★★★★★
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">"Пользуюсь доставкой из этого маркета постоянно. Ни разу не было
                                    просроченных товаров или проблем с качеством. Очень удобно, что можно заказать всё в
                                    одном месте."</p>
                                <p class="text-muted small mb-0">5 месяцев назад</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="h3 mb-4">Оставить отзыв</h2>
                        <p class="text-muted mb-4">Поделитесь своим опытом покупок в нашем маркете. Ваше мнение поможет нам
                            стать лучше.</p>

                        <form action="/review/submit" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Ваше имя *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="rating" class="form-label">Оценка *</label>
                                <div class="rating mb-2">
                                    <div class="d-flex">
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="rating" id="rating5"
                                                value="5">
                                            <label class="form-check-label" for="rating5">
                                                ★★★★★ Отлично
                                            </label>
                                        </div>
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="rating" id="rating4"
                                                value="4">
                                            <label class="form-check-label" for="rating4">
                                                ★★★★☆ Хорошо
                                            </label>
                                        </div>
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="rating" id="rating3"
                                                value="3">
                                            <label class="form-check-label" for="rating3">
                                                ★★★☆☆ Нормально
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="review" class="form-label">Ваш отзыв *</label>
                                <textarea class="form-control" id="review" name="review" rows="4" required
                                    placeholder="Расскажите о вашем опыте покупок..."></textarea>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                                <label class="form-check-label" for="agree">
                                    Я согласен с обработкой персональных данных
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Отправить отзыв</button>
                            <a href="/" class="btn btn-outline-secondary ms-2">Вернуться на главную</a>
                        </form>
                    </div>
                </div>

                <div class="mt-5 pt-4 border-top">
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <div class="display-6 fw-bold text-primary">4.8</div>
                            <p class="text-muted mb-0">Средняя оценка</p>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="display-6 fw-bold text-success">156</div>
                            <p class="text-muted mb-0">Всего отзывов</p>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="display-6 fw-bold text-warning">94%</div>
                            <p class="text-muted mb-0">Положительных</p>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="display-6 fw-bold text-info">24ч</div>
                            <p class="text-muted mb-0">Ответ службы поддержки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .rating input[type="radio"]:checked+label {
            background-color: #f8f9fa;
            color: #ffc107;
        }

        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
@endsection