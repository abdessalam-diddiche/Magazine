@extends('layouts.app')

@section('content')

@if(count($errors))
<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach
</ul>
</div>
@endif

<!-- Default form contact -->
<form class="text-center border border-light p-5 col-md-6 mx-auto" method="post" action="{{ url('articles/'.$articles->id) }}">
@method('PUT')
@csrf
    <p class="h4 mb-4">Modifier votre article</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Titre" name="title" value="{{$articles->title}}">

    <!-- Email -->
    <input type="text" id="defaultContactFormCategory" class="form-control mb-4" placeholder="Categorie" name="category" value="{{$articles->category}}">

    <!-- Subject -->
    <!-- <label>Subject</label> -->
    <!-- <select class="browser-default custom-select mb-4">
        <option value="" disabled>Choose option</option>
        <option value="1" selected>Feedback</option>
        <option value="2">Report a bug</option>
        <option value="3">Feature request</option>
        <option value="4">Feature request</option>
    </select> -->

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Description" name="content">{{$articles->content}}</textarea>
    </div>

    <!-- Copy -->
    <!-- <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div> -->

    <!-- Send button -->
    <button class="btn btn-success btn-block btn-rounded" type="submit">Modifier</button>

</form>
<!-- Default form contact -->






@endsection