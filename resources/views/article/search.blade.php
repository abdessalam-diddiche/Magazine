@extends('layouts.app')


@section('content')
<style>
.pagination{
  justify-content: center;
  padding-left:5px;
}
</style>
@foreach($articles as $article)

<div class="container">
    
<div id="logo" style="display: inline-block;">
<a href="{{ url('/') }}"><img src="{{ asset('images/images.png') }}" alt="" width="160px" height="120px"> 
</a>
</div>


<a href="{{ url('articles/create') }}" style="display: inline-block;padding:14px;
    font-size: 20px; background: #e1d445; border-radius: 3px;float:right;color:black;margin-top:45px">Put Your Ads</a>

</div>


<div class="card d-flex justify-content-around" style="width:60rem; margin:50px auto;">
<div style="text-align:right;margin:9px;">
<a href="announces" style="padding:7px;
    font-size: 15px; background: #6495ED; border-radius: 3px;text-align:center;color:white;">Save</a>
</div>
  <div class="d-flex justify-content-center">
  
  <img class="img-fluid" src="{{ asset('storage/'.$article->image) }}" alt="Sample image">
  
  </div>
  
  <div class="d-flex align-content-around flex-wrap">
  <div class="card-body">
    <h5 class="card-title">{{ $article->title }}</h5>
    <p class="card-text">{{ $article->content }}</p>
    <br>
    <a href="#" class="card-link">Name :{{ $article->user['name'] }}</a>
    <br>
    <br>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Category :{{ $article -> category }}</li>
  </ul>
  <div class="card-body d-flex flex-column" style="text-align:right">
    <a href="#" class="card-link">{{ Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</a>
    <a href="#" class="card-link">{{ $article->created_at }}</a>
  </div>

  </div>

  
</div>
@endforeach


@endsection