@extends('layouts.main')

@section('content')  
<p>
<button class="btn btn-warning" type="button" data-bs-toggle="collapse" 
        data-bs-target="#createTopic" aria-expanded="false" aria-controls="createTopic">Add topic</button>
</p>
<div class="collapse" id="createTopic">
  
  <div class="card card-body">
      <form action="/add" method="post">
      @csrf
      <div class="mb-3">
        <label class="form-label">New Topic</label>
        <input type="text" name="topic" placeholder="Add new topic..." class="form-control" id="topic">
      </div>
        <button type="submit" class="btn btn-warning">Save</button>
    </form>
  </div>
</div>

@foreach($topics as $el)
<nav class="navbar navbar-dark bg-dark border">
      <div class="container-fluid">
        <a class="navbar-brand display-1 text-white">{{$el->topic}}</a>
        <form class="d-flex">
          <a href="/view"><button class="btn btn-info" type="button">View</button></a>
          <a href="#"><button class="btn btn-success" type="submit">Delete</button></a>
        </form>
      </div>
</nav>
@endforeach


@stop