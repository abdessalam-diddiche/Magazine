@extends('layouts.app')

@section('content')


<div class="container" id="app">
    <div class="row">
        <div class="col-md-12">
        
        <h1>@{{ message }}</h1>

        <div class="card">
        <div class="row">
        <div class="col-md-11">
        <h5 class="card-header h5">Evenments</h5>
        </div>
           <div class="col-md-1">
           <button class="btn btn-success">Ajouter</button>
           </div>
        </div>
            <div class="card-body">
                  <p class="card-text">
                  <ul class="list-group">
                      <li class="list-group-item">
                      <div class="pull-right">
                      <button class="btn btn-warning btn-sm">Editer</button>
                      </div>
                      <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptatum beatae 
                      incidunt recusandae harum laborum, aliquid magni esse ducimus totam a cumque, quod earum nam tempora ex consequatur itaque quo quos. Culpa, rerum aperiam dolores amet quasi praesentium 
                      numquam voluptates veniam non distinctio sunt accusantium dolorum saepe nam dolorem magni!</p>
                      <small>12/05/2018 - 30/09/2019</small>
                      </li>

                      <li class="list-group-item">
                      <div class="pull-right">
                      <button class="btn btn-warning btn-sm">Editer</button>
                      </div>
                      <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptatum beatae 
                      incidunt recusandae harum laborum, aliquid magni esse ducimus totam a cumque, quod earum nam tempora ex consequatur itaque quo quos. Culpa, rerum aperiam dolores amet quasi praesentium 
                      numquam voluptates veniam non distinctio sunt accusantium dolorum saepe nam dolorem magni!</p>
                      <small>12/05/2018 - 30/09/2019</small>
                      </li>

                      <li class="list-group-item">
                      <div class="pull-right">
                      <button class="btn btn-warning btn-sm">Editer</button>
                      </div>
                      <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptatum beatae 
                      incidunt recusandae harum laborum, aliquid magni esse ducimus totam a cumque, quod earum nam tempora ex consequatur itaque quo quos. Culpa, rerum aperiam dolores amet quasi praesentium 
                      numquam voluptates veniam non distinctio sunt accusantium dolorum saepe nam dolorem magni!</p>
                      <small>12/05/2018 - 30/09/2019</small>
                      </li>
                  </ul>
                  </p>
            </div>
        </div>

<hr>


            <div class="card">
            <div class="row">
            <div class="col-md-11">
           <h5 class="card-header h5">Appointment</h5>
           </div>
           <div class="col-md-1">
           <button class="btn btn-success">Ajouter</button>
           </div>
           </div>
            <div class="card-body">
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>

        
        
        </div>
    </div>
</div>



@endsection

@section('javascripts')

<script src="js/vue.js"></script>

<script>
var app = new Vue ({
    el: '#app',
    data: {
        message: 'Je suis Abdessalam Diddiche'
    }

});

</script>


@endsection