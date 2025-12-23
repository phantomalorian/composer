@extends('layout')

@section('main_content')
    <div class="container py-5">
        <h1 class="mb-4">Каталог товаров</h1>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200/4169E1/FFFFFF?text=Товар+1" class="card-img-top"
                        alt="Товар 1">
                    <div class="card-body">
                        <h5 class="card-title">Смартфон Vivo</h5>
                        <p class="card-text">Новый флагман с OLED-экраном, 12 ГБ оперативной памяти.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-primary mb-0">60000.00 ₽</span>
                            <button class="btn btn-sm btn-outline-primary">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200/32CD32/FFFFFF?text=Товар+2" class="card-img-top"
                        alt="Товар 2">
                    <div class="card-body">
                        <h5 class="card-title">Ноутбук Honor </h5>
                        <p class="card-text">Легкий и мощный ноутбук для работы и творчества.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-primary mb-0">100000.00 ₽</span>
                            <button class="btn btn-sm btn-outline-primary">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200/FF8C00/FFFFFF?text=Товар+3" class="card-img-top"
                        alt="Товар 3">
                    <div class="card-body">
                        <h5 class="card-title">Наушники Nothing Headphone</h5>
                        <p class="card-text">Беспроводные наушники с шумоподавлением.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-primary mb-0">15000.00 ₽</span>
                            <button class="btn btn-sm btn-outline-primary">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection