@extends('main')

@section('content')
    <div class="col s12">
        <div class="card">
            <div class="card-content clearfix">
                    <span class="card-title">
                        {{ $topic->thread->title }}  - {{ $topic->title }}&nbsp;
                        <span class="status-badge status-open">
                            Open
                        </span>
                    </span>
            </div>
        </div>



        <!-- BEGIN REPLY -->
        @foreach($topic->replies as $reply)
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Replies</span>
                    <div class="collection">
                        <div class="collection-item row">
                            <div class="col s2">
                                <span class="reply-username"></span>
                                <span class="reply-timestamp">Geplaatst op {{ $reply->created_at }}</span>
                            </div>
                            <div class="col s10">
                                <p>{!! $reply->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    <!-- EINDE REPLY -->

        <!-- TOEVOEGEN VAN EEN REPLY -->
        <div class="card">
            <div class="card-content">
                <form method="POST" action="">
                    <div class="row">
                        <div class="input-field col s6 has-error">
                            <input id="title" type="text" name="title" placeholder="Tik hier een titel voor het onderwerp in">
                            <label for="title" class="active">Titel van de topic</label>
                            <span>Titel is verplicht!</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <textarea id="message-body" name="body"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 push-s6">
                            <a href="" class="btn right cyan darken-1">
                                Bewaren
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- EINDE TOEVOEGEN VAN EEN REPLY -->

    </div>

@endsection