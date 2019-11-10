@extends('layouts.app')

@section('content')

@if(session()->has('approuver'))
<div class="alert alert-success">
{{ session()->get('approuver') }}
</div>
@endif

@if(session()->has('enregistrer'))
<div class="alert alert-success">
{{ session()->get('enregistrer') }}
</div>
@endif

@if(session()->has('editer'))
<div class="alert alert-success">
{{ session()->get('editer') }}
</div>
@endif

@if(session()->has('supprimer'))
<div class="alert alert-success">
{{ session()->get('supprimer') }}
</div>
@endif


<h1>Liste de mes articles :</h1>
<a href="{{ url('articles/create') }}" class="btn btn-secondary btn-rounded float-right">Nouveau article</a>

<table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th></th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Titre
      </th>
      <th class="th-sm">Nom de category
      </th>
      <th class="th-sm">Description
      </th>
      <th class="th-sm">Date
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
  @foreach($articles as $article)
    <tr>
      <td></td>
      <td>{{ $article->user['name'] }}</td>
      <td> <img src="{{ asset('storage/'.$article->image) }}" alt="" width="80px" height="60px"> </td>
      <td>{{ $article -> title }}</td>
      <td>{{ $article -> category }}</td>
      <td><?php echo substr("$article->content",0,30);?></td>
      <td>{{ $article -> created_at }}</td>

      <td>

      @can('view', $article)
      <form action="{{ url('/toggle-approve') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input <?php if($article->approve == 1){ echo "checked"; } ?> type="checkbox" name="approve">

      <input type="hidden" name="articleId" value="{{ $article->id }}">

      <input class="btn btn-primary" type="submit" value="Approved">
      
      </form>
      @endcan
      
      
      </td>


      <td>
      <a href="{{ 'show/'.$article->id }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
      @can('update', $article)
      <a href="{{ 'articles/'.$article->id.'/edit' }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
      @endcan

      <form action="{{ url('articles/'.$article->id) }}" method="post" style="display:inline-block">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
      </form>
      </td>


    </tr>
   @endforeach
   
  </tbody>
  <tfoot>
    <tr>
    <th></th>
    <th>Name
      </th>
      <th>Image
      </th>
      <th>Titre
      </th>
      <th>Nom de category
      </th>
      <th>Description
      </th>
      <th>Date
      </th>
      <th>Action
      </th>
    </tr>
  </tfoot>
</table>





@endsection