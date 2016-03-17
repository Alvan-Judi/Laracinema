@extends('layout')

@section('content')

    <section id="content">
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
    </div>

    <div class="row col-md-4"><!--DEUXIEME LIGNE -->

        <!-- MOVIE VISIBLE -->
        <div class="col-sm-12 col-md-12">
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

        <div class="col-sm-12 col-md-12">
            <div class="bs-component">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-primary light">
                        <h1 class="fs35 mbn">{{$avgNotePress}}</h1>
                        <h6 class="text-white">Press Note Average</h6>
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
    </div><!-- FIN DEUXIEME LIGNE -->

        <div class="row col-md-8">
            <div class="panel" id="spy2">
                <div class="panel-heading">
              <span class="panel-title">
                <span class="fa fa-table"></span>Check Our Amazing Directors !</span>
                    <div class="pull-right">
                        <code class="mr20">.fucking directors</code>
                    </div>
                </div>
                <div class="panel-body pn">
                    <div class="bs-component">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allDirectors as $director)
                            <tr>
                                <td>{{$director->id}}</td>
                                <td>{{$director->firstname}} {{$director->lastname}}</td>
                                <td><img src="{{$director->image}}" style="max-width: 10%;"></td>
                                <td>{{$director->note}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
                </div>
            </div>
        </div>

    </section>

@endsection