@extends('layout')

@section('content')

    <section id="content">
        <div class="row">
            <h1>Chat</h1>

            <div id="messages_area">
            @foreach($messages as  $message)

                    <p class=""><span class="text-danger" >{{$message->pseudo}}</span> : {{$message->message}}</p>



            @endforeach
            </div>
            <div class="admin-form theme-primary tab-pane mw700 active col-md-12" id="comment1" role="tabpanel">
                <div class="panel panel-primary heading-border">
                    <div class="panel-heading">
                        <span class="panel-title">
                            <i class="fa fa-rocket"></i>Leave a comment</span>
                    </div>
                    <!-- end .panel-heading section -->

                    <form method="post" action="{{route('chat_store')}}" id="chat" data-ajax="{{route('chat_ajax')}}">
                        {{csrf_field()}}
                        <div class="panel-body p25">
                            <div class="section row">
                                <div class="col-md-6">
                                    <label for="pseudo" class="field prepend-icon">
                                        <input type="text" name="pseudo" id="pseudo" class="gui-input" placeholder="Pseduo">
                                        <label for="pseudo" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                             </div>

                            <!-- end section row section -->

                            <div class="section">
                                <label for="message" class="field prepend-icon">
                                    <textarea class="gui-textarea" id="message" name="message" placeholder="Your message"></textarea>
                                    <label for="message" class="field-icon">
                                        <i class="fa fa-comments"></i>
                                    </label>
                                    <span class="input-footer">
                                        <strong>DO:</strong>Be awesome.
                                        <strong>DO NOT:</strong>Be negative or off topic. We expect a great message...</span>
                                </label>
                            </div>
                            <!-- end section -->

                        </div>
                        <!-- end .form-body section -->

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary" id="chatSubmit" data-submit="{{route('chat_store')}}">Post Message</button>
                        </div>
                        <!-- end .form-footer section -->
                    </form>
                </div>
                <!-- end: .panel -->
            </div>
        </div>
    </section>

@endsection