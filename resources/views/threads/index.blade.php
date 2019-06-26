@extends('main')

<!--dit is de pagina die al de threads laat zien-->

@section('content')
<div class="container">
<br><br><br>
<h1>Threads</h1>
@auth
    <a href="{{ route('createThread')  }}"><button class="btn btn-primary">Maak Thread</button></a><br>
    @endauth
            @foreach ($threads as $thread)
                <br>
                <a href="{{ route('thread.show', ['id' => $thread->id]) }}">
                    <div class="card">
                        <div class="card-body">
                    <tr>
                        <td>Titel: {{ $thread->title }}</td> <br>
                        <td>{{ $thread->description }}</td> <br>
                        <td></td>{{ count($thread->topics) }} topic(s)<br>
                        <td>geplaatst door: {{ $thread->user->name }}<td>




                        </div>
                    </tr>
                </a>


            </div><br>
<a href="#" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-thumbs-up"></span> Like
</a>
<br>



            @endforeach





            </div>

@endsection