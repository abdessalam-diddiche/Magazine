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
<form class="text-center border border-light p-5 col-md-6 mx-auto" method="post" action="{{ url('articles') }}" enctype="multipart/form-data">
@csrf
    <p class="h4 mb-4">Ajouter votre article</p>

    <!-- Name -->
    @if(count($errors))
    <p style="color:red; text-align:left;">{{ $errors->first('title')}}</p>
    @endif
    <div class="form-group @if($errors->get('title')) has-error @endif">
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Titre" name="title" value="{{ old('title') }}">
    </div>

    <!-- Email -->
    @if(count($errors))
    <p style="color:red; text-align:left;">{{ $errors->first('category')}}</p>
    @endif
    <div class="form-group @if($errors->get('category')) has-error @endif">
    <input type="text" id="defaultContactFormCategory" class="form-control mb-4" placeholder="Categorie" name="category" value="{{ old('category') }}">
    </div>
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
    <div class="form-group @if($errors->get('content')) has-error @endif">
    @if(count($errors))
    <p style="color:red; text-align:left;">{{ $errors->first('content')}}</p>
    @endif
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Description" name="content">{{ old('content') }}</textarea>
    </div>

<div class="form-group">
<input class="form-control" type="file" name="image">
</div>
    <!-- <div class="form-group col-md-3">
  <label for="exampleFormControlInput1">Choose file</label>
    <div class="z-depth-1-half mb-4">
      <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img"
        alt="example placeholder" width="80px" height="70px">
    </div>
    <div class="d-flex">
      <div class="btn btn-mdb-color btn-rounded float-left">
        <input class="form-control" type="file" name="image">
      </div>
    </div>
  </div> -->

    <!-- Copy -->
    <!-- <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div> -->

    <!-- Send button -->
    <button class="btn btn-info btn-block btn-rounded" type="submit">Enregistrer</button>

</form>
<!-- Default form contact -->






@endsection