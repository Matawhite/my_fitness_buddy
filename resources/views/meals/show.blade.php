@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>
      {{$meal->title}} <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Item to Meal</button>

    </h1>
    <strong><hr /></strong>
    <p>
      Meal Eaten at: {{$meal->created_at}}
    </p>
    <ul class="list-group">
      @foreach ($meal->nutrients as $nutrient)
        <li class="list-group-item"><h3>{{ $nutrient->foodname}}</h3></li>
        <li class="list-group-item">{{ $nutrient->protein}} grams of protein</li>
        <li class="list-group-item">{{ $nutrient->carbs}} grams of carbohydrates</li>
        <li class="list-group-item">{{ $nutrient->fat}} grams of fat</li>
        <br />
      @endforeach
    </ul>
    <a href="/meals"><button type="button" class="btn btn-info">Show All Meals</button></a>

  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h3>Add an Item to Meal</h3>
          <form class="form-group" action="/meals/{{ $meal->id }}/nutrients" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="foodname">Name of Item Eaten</label>
              <input class="form-control" type="text" name="foodname" placeholder="chicken">
            </div>
            <div class="form-group">
              <label for="protein">Protein of Item</label>
              <input class="form-control" type="text" name="protein" placeholder="10">
            </div>
            <div class="form-group">
              <label for="carbs">Carbohydrates of Item</label>
              <input class="form-control" type="text" name="carbs" placeholder="10">
            </div>
            <div class="form-group">
              <label for="fat">Carbohydrates of Fat</label>
              <input class="form-control" type="text" name="fat" placeholder="10">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" >Add Item</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

@stop('content')
