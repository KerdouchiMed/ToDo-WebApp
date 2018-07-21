

@extends('layout/master')

@section('content')
<br>
<div class="col-lg-8 offset-lg-2 col-md-12 offset-md-0" style="background-color:#eee">
  <div class="container-fluid">
    <br>
    <form method="post" action="add/todo" class="">
      {{csrf_field()}}
      <div class="btn-group d-flex" role="group">
        <input type="text" class="form-control" style="width:30%" name="todoTitle" value="" placeholder="Todo Title">
        <input type="text" class="form-control w-100" name="todoContent" value="" placeholder="Todo Content">
        <button type="submit" name="button" class="btn btn-success">New Todo</button>
      </div>
    </form>
    <br>
    <div>
      @foreach ($todos as $todo)
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group d-flex">
            <button class="btn btn-secondary text-left w-100">{{str_limit($todo->todo_title,25)}}</button>
            <!--<a href="" role="button" class="btn btn-info">show details</a>  -->
            @if ($todo->completed)
              <a href="{{route('completed',['id'=>$todo->id])}}" role="button" class="btn btn-success" style="width:30%"> Completed </a>
            @else
              <a href="{{route('completed',['id'=>$todo->id])}}" role="button" class="btn btn-warning" style="width:30%">Not Completed !</a>
            @endif
            <a href="{{route('edite',['id'=>$todo->id])}}" role="button" class="btn btn-primary ">Edite</a>
            <a href="{{route('delete',['id'=>$todo->id])}}" role="button" class="btn btn-danger ">Delete</a>
          </div>
        </div>
      </div>
      <br>
      @endforeach
    </div>
  </div>
</div>

@endsection
