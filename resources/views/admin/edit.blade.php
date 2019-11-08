@extends('layouts.default', ['title' => 'Edit'])


@section('content')

@include('layouts.nav-page')

<div class='container-fluid'>

    <div class='row'>


        <div class='col-md-9 my-5 px-5'>

            <div class="tab-content row" id="v-pills-tabContent">
                <div class="tab-pane fade show active col-12" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class='row'>
                        <div class='col-sm-10 offset-sm-1 col-md-8 offset-md-2'>
                            <h2 class='row py-5'>Creer une annonce</h2>
                            <div class='row'>

                                <form method="post" class='col-12 mb-5' action='{{route('admin.lock.update', ['id' => $edit->id])}}'>
                                    @csrf
                                    @method('PATCH')



                                    <p class='font-weight-bold'>Détails de l'annonce</p>
                                    <hr>

                                    <div class="form-group">
                                        <label for="inputAddress">Titre *</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                               placeholder="Titre de l'annonce" value="{{old('title')}}">

                                        <span class="text-danger error-title font-italic">{{$errors->first('title')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exSelect">Categorie *</label>
                                        <select name="category" class="form-control" id="category" style="{{ $errors->first('category') ? "border-color : red" : ''}}">
                                            <option value=''>-Choisir une categorie-</option>
                                            <option value=''>EMPLOI</option>
                                            <option value=''>SERVICES</option>
                                            <option value=''>Cours & Formation</option>
                                            <option value=''>MATÉRIEL PROFESSIONNEL</option>
                                            <option value=''>ACHAT - VENTE</option>
                                            <option value=''>Immobilier</option>
                                            <option value=''>Véhicules</option>
                                            <option value=''>Electronique-Média</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="SelectType">Type Annonceur</label>
                                        <select name="type" id="type" class="form-control" style="{{ $errors->first('type') ? "border-color : red" : ''}}">
                                            <option value=''>-Aucun-</option>
                                            <option value='particulier'>Particulier</option>
                                            <option value='entreprise'>Entreprise</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="inputPrice">Prix</label>
                                            <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}">
                                            <span class="text-danger error-title font-italic">{{$errors->first('price')}}</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputDevise">Devise</label>
                                            <select name="devise" id="devise" class="form-control" style="{{ $errors->first('devise') ? "border-color : red" : ''}}">
                                                <option value='fcfa' selected>FCFA</option>
                                                <option value='euro' selected>EURO</option>
                                                <option value='dollar' selected>Dollar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ControlTextarea">Description</label>
                                        <textarea name="description" class="form-control" id="description" rows="3" style="{{ $errors->first('description') ? "border-color : red" : ''}}"></textarea>
                                    </div>

                                    <p class='font-weight-bold'>Details Contact</p>
                                    <hr>

                                    <div class="form-group">
                                        <label for="inputAddress">Addresse</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                               placeholder="1234 Rue principal" value="{{old('address')}}">
                                        <span class="text-danger error-title font-italic">{{$errors->first('address')}}</span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="InputCountry">Pays</label>
                                            <select name="country" class="form-control" id="country" style="{{ $errors->first('country') ? "border-color : red" : ''}}">
                                                <option value=''>-Choisir un pays-</option>
                                                <option value='benin'>Benin</option>
                                                <option value='mali'>Mali</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">Addresse</label>
                                            <input type="text" name="city" id="city" class="form-control"
                                                   placeholder="1234 Rue principal" value="{{old('city')}}">
                                            <span class="text-danger error-title font-italic">{{$errors->first('city')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">Numero de telephone *</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                               placeholder="Votre numero de telephone" value="{{old('phone')}}">
                                    </div>

                                    <p class='font-weight-bold'>Media</p>
                                    <hr>

                                    <div class="form-row" id='mediaFile'>
                                        <div class='form-group col-auto'>
                                            <input type="file" name="file[]" class="form-control-file" id="ControlFile1">
                                            <label for='ControlFile1'><i class="fa fa-plus" style='font-size: 70px;'
                                                                         aria-hidden="true"></i></label>
                                        </div>
                                        <div class='form-group col-auto'>
                                            <input type="file" name="file[]" class="form-control-file" id="ControlFile2">
                                            <label for='ControlFile2'><i class="fa fa-plus" style='font-size: 70px;'
                                                                         aria-hidden="true"></i></label>
                                        </div>
                                        <div class='form-group col-auto'>
                                            <input type="file" name="file[]" class="form-control-file" id="ControlFile3">
                                            <label for='ControlFile3'><i class="fa fa-plus" style='font-size: 70px;'
                                                                         aria-hidden="true"></i></label>
                                        </div>
                                        <div class='form-group col-auto'>
                                            <input type="file" name="file[]" class="form-control-file" id="ControlFile4">
                                            <label for='ControlFile4'><i class="fa fa-plus" style='font-size: 70px;'
                                                                         aria-hidden="true"></i></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                J'accepte les termes and conditions
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mb-5"><i class="fa fa-plus"
                                                                                          aria-hidden="true"></i>
                                        Publier l'annonce
                                    </button>
                                    <button type="reset" class="btn btn-danger mb-5">Annuler</button>
                                    <button type="submit" class="btn btn-dark mb-5">Enregister</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                </div>





                <div class="tab-pane fade" id="v-pills-categories" role="tabpanel"
                     aria-labelledby="v-pills-messages-tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">AUDIT INTERNE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false">ETUDE ECONOMIQUE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">FORMATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                               aria-controls="pills-home" aria-selected="true">APPUI ET CONSEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false">RECRUTEMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">CONCEPTION ET
                                MONTAGE</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="card ">
                                <h5 class="card-header">ID annonce</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment (Titre)</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to
                                        additional content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Repellendus aspernatur perspiciatis ipsam laudantium? Iste a illo
                                        quisquam ipsa assumenda quis tempora qui iure sapiente, ipsam cum minima,
                                        nihil, cumque nulla. (Description)</p>

                                    <a href="#" class="btn btn-danger  font-weight-bold">Supprimer</a>
                                    <a href="#" class="btn btn-success  font-weight-bold">Publier</a>
                                    <a href="#" class="btn btn-secondary  font-weight-bold">Editer</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="card ">
                                <h5 class="card-header">ID annonce</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment (Titre)</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to
                                        additional content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Repellendus aspernatur perspiciatis ipsam laudantium? Iste a illo
                                        quisquam ipsa assumenda quis tempora qui iure sapiente, ipsam cum minima,
                                        nihil, cumque nulla. (Description)</p>

                                    <a href="#" class="btn btn-danger  font-weight-bold">Supprimer</a>
                                    <a href="#" class="btn btn-success  font-weight-bold">Publier</a>
                                    <a href="#" class="btn btn-secondary  font-weight-bold">Editer</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <div class="card ">
                                <h5 class="card-header">ID annonce</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment (Titre)</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to
                                        additional content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Repellendus aspernatur perspiciatis ipsam laudantium? Iste a illo
                                        quisquam ipsa assumenda quis tempora qui iure sapiente, ipsam cum minima,
                                        nihil, cumque nulla. (Description)</p>

                                    <a href="#" class="btn btn-danger  font-weight-bold">Supprimer</a>
                                    <a href="#" class="btn btn-success  font-weight-bold">Publier</a>
                                    <a href="#" class="btn btn-secondary  font-weight-bold">Editer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        $('.logout').click(function (event) {
            event.preventDefault();
            //window.location = '/logout';
        })
    })
</script>


<script src="{{asset('app/js/admin.js')}}"></script>

@include('layouts.footer')
@stop

