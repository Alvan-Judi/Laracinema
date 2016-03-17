 @extends('layout')

@section('content')

        <?php $url = $_SERVER['REQUEST_URI'] ; ?>
        <section id="content" class="table-layout">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($url == '/movies/create')
            <div class="row">
                <div class="col-md-6">
                    <div class="admin-form theme-danger tab-pane mw700 active" id="div-create" role="tabpanel">
                        <div class="panel panel-danger heading-border">
                            <div class="panel-heading">
                                <span class="panel-title">
                                    <i class="fa fa-pencil-square"></i>Create A Movie Record
                                </span>
                            </div>
                            <!-- end .form-header section -->

                            <form method="post" action="{{route('store_movies')}}" id="form-create">
                                {{ csrf_field() }}

                                <div class="panel-body p25">
                                    <div class="section row">
                                        <div class="col-md-12">
                                            <label for="names" class="field-label">Movie Name</label>
                                            <label for="title" class="field prepend-icon">
                                                <input type="text" name="title" id="title" class="gui-input">
                                                <label for="title" class="field-icon">
                                                    <i class="fa fa-film"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- end section row section -->

                                    <div class="section row">
                                        <div class="col-md-12">
                                            <label for="username" class="field-label">Movie Jacket</label>
                                            <label for="image" class="field prepend-icon">
                                                <input type="url" name="image" id="image" class="gui-input">
                                                <label for="image" class="field-icon">
                                                    <i class="fa fa-picture-o"></i>
                                                </label>
                                            </label>

                                        </div>

                                    </div>
                                    <!-- end section -->

                                    <div class="section row">
                                        <div class="col-md-12">
                                            <div class="section">
                                                <label for="synopsis" class="field-label">Synopsis</label>
                                                <label class="field prepend-icon">
                                                    <textarea class="gui-textarea" id="synopsis" name="synopsis"></textarea>
                                                    <label for="synopsis" class="field-icon">
                                                        <i class="fa fa-pencil"></i>
                                                    </label>
                                                    <span class="input-footer">
                                                       Twenty chars minimum</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="section row">
                                        <div class="col-md-12">
                                            <label for="categories_id" class="field-label">Category</label>
                                            <label for="categories_id" class="field select">
                                                <select id="categories_id" name="categories_id">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="section row">
                                        <div class="col-md-12">
                                            <label for="note_presse" class="field-label">Note</label>
                                            <label for="note_presse" class="field select">
                                                <select id="note_presse" name="note_presse">
                                                    @for($i=0; $i<=5; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="section row">
                                        <div class="col-md-12">
                                            <div class="option-group field section">
                                                <label class="field-label">Visibility</label>
                                                <label for="visible" class="block mt15 option option-primary">
                                                    <input type="radio" name="visible" id="visible" value="1">
                                                    <span class="radio"></span>Visible</label>
                                                <label for="hidden" class="block mt15 option option-primary">
                                                    <input type="radio" name="visible" id="hidden" value="0">
                                                    <span class="radio"></span>Hidden</label>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- end .form-body section -->



                                <div class="panel-footer">
                                    <button type="submit" class="button btn-primary" name="submit">Create !</button>
                                </div>
                                <!-- end .form-footer section -->
                            </form>
                        </div>
                        <!-- end .admin-form section -->
                    </div>
                </div><!-- en first col md6  -->
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-icon"></span>
                            <span class="panel-title"> Preview</span>
                        </div>
                        <div class="panel-body text-center" id="preview">
                            <div class="bg-danger" id="error">
                                <ul>

                                </ul>
                            </div>
                            <h1>Title</h1>
                            <img src="http://www.allomac.fr/images/comment.jpg" alt="img preview" id="img-preview" style="max-width: 80%;">
                            <p id="syn-preview">Synopsis</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        @elseif($url == '/actors/create')
            LIST ACTORS

        @elseif($url == '/directors/create')
            LIST DIRECTORS

        @elseif($url == '/categories/create')
            LIST CATEGORIES
        @endif

@endsection