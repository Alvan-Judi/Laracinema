@extends('layout')

@section('content')

    <section id="content" class="table-layout">
    <div class="row">

        <!-- MOVIE NUMBER -->
        <div class="col-sm-4 col-md-3">
            <div class="bs-component">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-primary light">
                        <h1 class="fs35 mbn">{{$nbMovies}}</h1>
                        <h6 class="text-white">Movies</h6>
                    </div>
                    <div class="panel-footer bg-primary br-n p12">
                      <span class="fs11">
                        <i class="fa fa-arrow-up pr5"></i>
                        <b> Amazing, isn't it ?</b>
                      </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MOVIE NUMBER -->

        <!-- ACTORS NUMBER -->
        <div class="col-sm-4 col-md-3">
            <div class="bs-component">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-success light">
                        <h1 class="fs35 mbn">{{$nbActors}}</h1>
                        <h6 class="text-white">Actors</h6>
                    </div>
                    <div class="panel-footer bg-success br-n p12">
                      <span class="fs11">
                        <i class="fa fa-arrow-up pr5"></i>
                        <b> Wow, beautiful !</b>
                      </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ACTORS NUMBER -->

        <!-- DIRECTORS NUMBER -->
        <div class="col-sm-4 col-md-3">
            <div class="bs-component">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-warning light">
                        <h1 class="fs35 mbn">{{$nbDirectors}}</h1>
                        <h6 class="text-white">Directors</h6>
                    </div>
                    <div class="panel-footer bg-warning br-n p12">
                      <span class="fs11">
                        <i class="fa fa-arrow-up pr5"></i>
                        <b> Not so bad</b>
                      </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DIRECTORS NUMBER -->

        <!-- CATEGORY NUMBER -->
        <div class="col-sm-4 col-md-3">
            <div class="bs-component">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-danger light">
                        <h1 class="fs35 mbn">{{$nbCategories}}</h1>
                        <h6 class="text-white">Categories</h6>
                    </div>
                    <div class="panel-footer bg-danger br-n p12">
                      <span class="fs11">
                        <i class="fa fa-arrow-up pr5"></i>
                        <b> How many ?</b>
                      </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CATEGORY NUMBER -->

        <!-- MOVIE VISIBLE -->
        <div class="col-sm-4 col-md-3">
            <div class="bs-component">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-primary light">
                        <h1 class="fs35 mbn">{{$nbMoviesVisible}} sur {{$nbMovies}}</h1>
                        <h6 class="text-white">Visible Movies</h6>
                    </div>
                    <div class="panel-footer bg-primary br-n p12">
                      <span class="fs11">
                        <i class="fa fa-arrow-up pr5"></i>
                        <b>Hep</b>
                      </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MOVIE VISIBLE -->

    </div>


    </section>

@endsection