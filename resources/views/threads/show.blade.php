@extends('main')

<!--dit is de pagina die de thread laat zien waar je op hebt geklikt in index.blade.php-->

@section('content')<br><br><br>


    <div class="container-fluid">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <div class="card">
                    <div class="card-body">
                        <h1><span class="card-title">{{ $thread->title }} </span></h1>
                        <p><span class="card-title">{{ $thread->description }} </span></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- BEGIN TOPIC -->
<br>
    @foreach($thread->topics as $topic)

     <div class="container">
        <a href="{{ route('topics.show', ['id' => $topic->id]) }}" class="collection-item avatar collection-link">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="card">
                            <div class="card-body">
                                <h1><span class="card-title">{{ $topic->title }} </span></h1>
                                <p><span class="card-title">{{ $topic->body }} </span></p>
                                <div class="col s12 post-timestamp">
                                    Gepost door: {{ $topic->user->name }}
                                    op: {{ $topic->created_at }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
     </div>
<br>

    @endforeach

@endsection