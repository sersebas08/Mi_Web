@extends('template.index')

@section('title', 'Home')

@section('index')
    <h1 class="text-center pt-4 h1__titulo">SERSEBAS08</h1>
    <div class="row text-center m-auto lh-lg py-4 px-2 rounded rounded-lg shadow ">
        <div class="col-12 col-md-6 m-auto">
            <picture class="picture__home w-10">
                <source media="(min-width: 751px)" srcset="<?= url('../img/yo.jpg'); ?>">
                <source media="(min-width: 380px)" srcset="<?= url('../img/yo.jpg'); ?>">
                <img src="<?= url('../img/yo.jpg'); ?>" class="m-auto" alt="Mi imagen responsive">
            </picture>
        </div>
        <div class="col-12 col-md-6 m-auto">
            <h3 class="w-100 py-2">Algo sobre mi</h3>
            <p>
                ¡Hola y bienvenido a mi página web! Soy un apasionado programador autodidacta con una insaciable sed
                de conocimiento y una pasión ardiente por la creación digital. Desde los cimientos hasta las soluciones
                innovadoras, he recorrido un camino de aprendizaje autodirigido para convertirme en un experto en el mundo
                de la programación.
            </p>
        </div>
    </div>
@endsection
