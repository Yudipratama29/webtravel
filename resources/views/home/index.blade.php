@extends('layout.master')

@section('title', 'Home')

@section('breadcrumb')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
<div class="card-body">
    <h2>Welcome, Travelers</h2>

    <h5>Traveloke is a website where you can book tourist attractions, you can even book drivers or transportation which can be done easily, with just one click your travel problems will be helped easily.</h5>

    <div class="container text-center">
        <div class="row">
          <div class="col-4">
            <div class="card" style="">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/55421.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/54333.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/55418.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                    <div class="card-body">
                        <h5 class="card-title">Lazy River Penarungan</h5>
                        <p class="card-text">The clean and well-maintained subak river flow in Penarungan village also offers the Lazy River Tubing attraction as a family-friendly water game with its calm flow and safe and comfortable contours and depth.</p>
                        <a href="/destination/showMWG01" class="btn btn-primary">Details</a>
                    </div>
              </div>
          </div>
          <div class="col-4">
            <div class="card" style="">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/55427.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/55424.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/54459.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                    <div class="card-body">
                        <h5 class="card-title">Jogging Track Penarungan</h5>
                        <p class="card-text">The Penarungan Jogging Track is a footpath that was built taking into account the natural landscape and ecology, including the existence of the Subak stream which flows through the rice fields.</p>
                        <a href="/destination/showMWG02" class="btn btn-primary">Details</a>
                    </div>
              </div>
          </div>
          <div class="col-4">
            <div class="card" style="">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/55485.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/55432.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://jadesta.kemenparekraf.go.id/imgpost/83372.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                    <div class="card-body">
                        <h5 class="card-title">Taman Beji Paluh - Pancoran Solas</h5>
                        <p class="card-text">Painting activities (cleaning using Holy Water) can be carried out every day from 7 am to 6 pm by bringing painting equipment. Luggage facilities can be provided on site by the management with a day's notice.</p>
                        <a href="/destination/showMWG03" class="btn btn-primary">Details</a>
                    </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
