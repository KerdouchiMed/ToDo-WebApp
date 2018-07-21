@extends('layout/master')

@section('content')
<br>
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2" style="background-color:#eee">
  <div class="container-fluid">
    <br>
    <form method="post" action="{{route('save',['id'=>$todo->id])}}" class="text-right">
      {{csrf_field()}}
        <input type="text" class="form-control" name="todoTitle" value="{{$todo->todo_title}}" placeholder="Todo Title">
        <br>
        <input type="text" class="form-control" name="todoContent" value="{{$todo->todo_content}}" placeholder="Todo Content">
        <br>
        <button type="submit" name="button" class="btn btn-success btn-right">Edite Todo</button>
    </form>
    <br>
  </div>
</div>

@endsection
