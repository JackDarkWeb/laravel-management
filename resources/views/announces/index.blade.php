@extends('layouts.default', ['title' => 'Tous nos annonces'])


@section('content')

    @include('layouts.nav-page')

    <section class='pb-5'>

    <div class='container'>
        <div class='row my-4'>
            <h2 class=''>Tous les annonces</h2>
        </div>

        <?if(isset($announces)):?>

        <div class="card-deck">
            <? foreach ($announces as $item):?>
            <div class="card">
                <a href="{{route('announce',  ['id' => $item->code, "slug" => $item->slug])}}"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('announce',  ['id' => $item->code, "slug" => $item->slug])}}">{{$item->title}}</a></h5>
                    <p class="card-text">{{$item->price.'  '.strtoupper($item->devise)}}</p>

                    <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> <a href="{{route('category', ['category' => $item->name])}}">{{$item->name}}</a></p>

                    <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href=''>{{$item->city}}</a></p>

                    <p class="card-text"><i class="fa fa-eye" aria-hidden="true"></i> {{'2 Vues'}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{'1 semaine deja'}}</small>
                </div>
            </div>
            <? endforeach;?>
        </div>

        <?endif;?>


        <!-- Paginate -->


    </div>
</section>

    <script src="{{asset('app/js/announces.js')}}"></script>

    @include('layouts.footer')
@stop

