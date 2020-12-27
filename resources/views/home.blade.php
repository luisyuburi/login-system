@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="recibir" aria-selected="true">Recibir</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="enviar" aria-selected="false">Enviar</a>
                            </li>

                        </ul>
                        <div class="tab-content text-center" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="recibir-tab">
                                <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">

                                    <label class="btn btn-secondary active">
                                        <input type="radio" name="options" id="option1" class="radio-button-option" checked
                                            data-option="1" data-action="get"> 1
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option2" class="radio-button-option"
                                            data-option="2" data-action="get"> 2
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option3" class="radio-button-option"
                                            data-option="3" data-action="get"> 3
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option4" class="radio-button-option"
                                            data-option="4" data-action="get"> 4
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option5" class="radio-button-option"
                                            data-option="5" data-action="get"> 5
                                    </label>

                                </div>


                                <div>
                                    <img src="/img/get1.png"" class="img-fluid" id="img-get" />
                                </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="enviar-tab">

                                <div class="tab-content text-center" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="recibir-tab">
                                        <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">

                                            <label class="btn btn-secondary active">
                                                <input type="radio" name="options" id="option1" class="radio-button-option"
                                                    checked data-option="1" data-action="send"> 1
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option2" class="radio-button-option"
                                                    data-option="2" data-action="send"> 2
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option3" class="radio-button-option"
                                                    data-option="3" data-action="send"> 3
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option4" class="radio-button-option"
                                                    data-option="4" data-action="send"> 4
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option5" class="radio-button-option"
                                                    data-option="5" data-action="send"> 5
                                            </label>
                                        </div>

                                        <div>
                                            <img src="/img/send1.png" class="img-fluid" id="img-send" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="enviar-tab">...
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
