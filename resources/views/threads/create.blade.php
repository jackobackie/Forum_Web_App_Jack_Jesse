@extends('main')

@section('content')

<!--dit is de pagina waar je een thread kan aanmaken-->

    <form method="POST" action="/threads">

        {{ csrf_field() }}

        <div class="form-group"></div>

        <div>

            <input name="title" type="text" placeholder="title" class="form-control">

        </div>

        <div class="form-group">

            <textarea name="description" placeholder="description" class="form-control"></textarea>

        </div>

        <div>

            <button type="submit" class="btn btn-primary">Sla op</button>

        </div>
    </div>
    </form>

@endsection