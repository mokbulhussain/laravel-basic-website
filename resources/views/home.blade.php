@extends('layout.app')
@section('title','Home')

@section('content')
   <header>
       <div class="container">
           <div class="row">
               <div class="col-xl-12">
                   <div class="header-content text-center mt-5">
                       <h1>Software Engineer</h1>
                       <p>Mobile and App</p>
                       <button>Learn More</button>
                   </div>
               </div>
           </div>
       </div>
   </header>

    <section>
        <div class="container">
            <div class="row mt-5 text-center">
                <h1>Recent Project</h1>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-xl-4">
                    <div class="card">
                        <img src="{{asset('img/card1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <img src="{{asset('img/card1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <img src="{{asset('img/card1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
