@extends('layout')

@section('main_content')
    <div class="py-5">
        <div class="jumbotron bg-light p-5 rounded">
            <h1 class="display-4">Главная страница!</h1>
            <p class="lead">This is a template for a simple marketing or informational website. It includes a large callout
                called a jumbotron and three supporting pieces of content. Use it as a starting point to create something
                more unique.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Отзывы »</a>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">Heading</h2>
                        <p class="card-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                            cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                            porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    </div>
                    <div class="card-footer border-0 bg-white">
                        <a href="#" class="btn btn-outline-secondary">View details »</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">Heading</h2>
                        <p class="card-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                            cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                            porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    </div>
                    <div class="card-footer border-0 bg-white">
                        <a href="#" class="btn btn-outline-secondary">View details »</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">Heading</h2>
                        <p class="card-text">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget
                            quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    </div>
                    <div class="card-footer border-0 bg-white">
                        <a href="#" class="btn btn-outline-secondary">View details »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection