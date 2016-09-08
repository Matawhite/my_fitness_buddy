@extends('layout')

@section('content')
<div class="row">
  </div>
  <div class="col-md-12">
    <h1>
      All Meals <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add a Meal</button>
    </h1>
  @foreach ($meals as $meal)
      <div class="">
        <a href="/meals/{{ $meal->id }}">{{$meal->title}}</a>
      </div>
  @endforeach
  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h3>Add a Meal</h3>
          <form class="form-group" action="{{ url('add') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="foodname">Name of Meal</label>
              <input class="form-control" type="text" name="title" placeholder="dinner, lunch, etc...">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add Meal</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

@stop('content')
