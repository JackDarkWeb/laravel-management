@extends('layouts.default', ['title' => 'Contact me'])


@section('content')

@include('layouts.nav-page')

<section class=''>
    <div class='container py-5'>
        <div class='row mt-5'>
            <div class='col-md-6'>
                <div class='row img-fluid'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1232676834375!2d2.3885645146405916!3d6.378085094879389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102354e509f894f7%3A0xc8fde921f89849f6!2zQ290b25vdSwgQsOpbmlu!5e0!3m2!1sfr!2sua!4v1571431162459!5m2!1sfr!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            </div>

            <div class='col-md-6'>


                <div class="result"></div>

                @if(session('message'))
                    {{session('message')}}
                @endif

                <div class='row'>
                    <h2 class='mx-auto mb-5'>Formulaire de contact</h2>
                </div>

                <div class='row'>
                    <form method="post" class='col-12' action='{{route('contact.store')}}' id="form-contact">

                        @csrf

                        <div class="row">
                            <div class="col">
                                <input type="text" name="first_name" id="first-name" class="form-control" placeholder="Votre Prenom" value="{{old('first_name')}}"/>
                                <span class="text-danger error-first-name font-italic">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="col">
                                <input type="text" name="last_name" id="last-name" class="form-control" placeholder="Votre Nom" value="{{old('last_name')}}">
                                <span class="text-danger error-last-name font-italic">{{$errors->first('last_name')}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label ></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email')}}">
                            <span class="text-danger error-email font-italic">{{$errors->first('email')}}</span>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Quel est le sujet du message?" value="{{old('subject')}}">
                            <span class="text-danger error-subject font-italic">{{$errors->first('subject')}}</span>
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder='Votre Message' id="message" rows="3" style="{{ $errors->first('message') ? "border-color : red" : ''}}">{{old('message')}}</textarea>
                        </div>

                        <button type="submit" name="submit" class='btn btn-primary text-uppercase px-4'>Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('app/js/contact.js')}}"></script>

@include('layouts.footer')
@stop
