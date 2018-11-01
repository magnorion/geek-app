@extends('partials.header')
@section('conteudo')
<section id="home">
  <div class="row no-gutters">
    <div class="geek-select-box col-md-12 mb-2 mt-2">
      <div class="row">
        <div class="col-md-6">
          <img src="/images/starwars.jpg" alt="Star Wars">
        </div>
        <div class="col-md-6">
          <h3 class="mt-4"> Universo Star Wars </h3>
        </div>
      </div>
    </div>
    <div class="geek-select-box col-md-12">
      <div class="row">
        <div class="col-md-6">
          <img src="/images/marvel.jpg" alt="Marvel">
        </div>
        <div class="col-md-6">
          <h3 class="mt-4"> Universo Marvel </h3>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection