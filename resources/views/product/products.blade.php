@extends('user.layouts.header')
@section('container')
<div class="p-4 sm:ml-64">
    <div class="bg-slate-600 h-28 w-32mb">

    </div>
    <div class="h-28 bg-slate-300 w-72">
        <div></div>
    </div>
</div>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20230531111955.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20230531111955.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20230531111955.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
<div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20230531111955.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20230531111955.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20230531111955.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

@endsection
