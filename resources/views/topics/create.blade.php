@extends('main')

@section('content')



    <form method="POST" action="/topics" class="">

        {{ csrf_field() }}

        <div class="form-group"></div>

        <div>

            <input name="title" type="text" placeholder="title" class="col-md-4 col-form-label text-md-right">

        </div>

        <div>

            <textarea name="description" placeholder="description" class="col-md-4 col-form-label text-md-right"></textarea>

        </div>

        <div>

            <button type="submit" class="btn btnSubmit">Sla op</button>

        </div>
        </div>
    </form>

@endsection