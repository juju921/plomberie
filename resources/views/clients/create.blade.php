@extends('layouts.master')

@section('content')



    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Ajouter un client
            </div>
            <div class="card-body">
                <form method="POST" action="/clients/userschoice">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">

                            <label for="nBatiment">n° du batiment</label>
                            <input type="text" class="form-control" placeholder="n° du batiment" id="nBatiment"
                                   name="nBatiment">

                            <label for="firstName">prénom</label>
                            <input type="text" class="form-control" placeholder="prénom" id="firstName"
                                   name="firstName">


                            <label for="name">nom</label>
                            <input type="text" class="form-control" placeholder="nom" id="name" name="name">


                            <label for="adress">adress</label>
                            <input type="text" class="form-control" placeholder="adresse" id="adress" name="adress">

                            <label for="postalCode">Code postal</label>
                            <input type="text" class="form-control" placeholder="adresse" id="postalCode" name="postalCode">



                            <label for="inovoiceAdress">Adresse de facturation</label>
                            <input type="text" class="form-control" placeholder="Adresse de facturation"
                                   id="inovoiceAdress" name="inovoiceAdress">


                     <select class="form-control" id="statutHabitation" name="statutHabitation" v-model="statutHabitation" v-on:change="GetNameProprietaire()" v-bind:disable="disableWhenSelect">
                        <option value="Locataire">Locataire</option>
                        <option value="Propriètaire">Propriètaire</option>
                     </select>

                        <label for="proprietaireName">nom du proprietaire</label>
                        <input type="text" class="form-control" placeholder="proprietaireName" id="proprietaireName" name="proprietaireName" v-show="locataireShow">




                        </div>

                        <div class="col-md-6">

                            <label for="habitation">type de logement</label>

                            <select class="form-control" id="habitation" name="habitation">
                                <option value="Maison">Maison</option>
                                <option value="Appartement">Appartement</option>
                            </select>


                            <label for="accesCode">code d'accès</label>
                            <input type="text" class="form-control" placeholder="code d'accès" id="accesCode"
                                   name="accesCode">


                            <label for="accesCode2">code d'accès n°2</label>
                            <input type="text" class="form-control" placeholder="code d'accès n°2" id="accesCode2"
                                   name="accesCode2">

                            <label for="phoneNumber">numéro de téléphone</label>
                            <input type="text" class="form-control" placeholder="numéro de téléphone" id="phoneNumber"
                                   name="phoneNumber">


                            <label for="fax">fax</label>
                            <input type="text" class="form-control" placeholder="fax" id="fax" name="fax">


                            <label for="mobileNumber">numéro de portable</label>
                            <input type="text" class="form-control" placeholder="numéro de portable" id="mobileNumber"
                                   name="mobileNumber">

                            <label for="email">email</label>
                            <input type="text" class="form-control" placeholder="email" id="email" name="email">

                        </div>
                        <div class="form-footer">
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">ajouter</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    @if(Session::has('error'))
                        <div class="alert alert-danger">

                        </div>
                    @endif



                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>

            </div>

        </div>

@endsection

@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="{{asset('js/vendor.js')}}"></script>
<script src="{{asset('js/apps.js')}}"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.2.0/vue-resource.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<script src="{{asset('js/app.js')}}"></script>


@endpush