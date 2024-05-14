@extends('layouts.site')
@section('title', "Home")
@section('content')

<div class="section_slide">
   <div class="slides">
     <div
       id="carouselExampleFade"
       class="carousel slide carousel-fade"
       data-bs-ride="carousel"
     >
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img
             
             src="{{asset('images/slide1.webp')}}"
             class="d-block w-100"
             alt="..."
           />
         </div>
         <div class="carousel-item">
           <img
           src="{{asset('images/slide2.jpg')}}"
             class="d-block w-100"
             alt="..."
           />
         </div>
         <div class="carousel-item">
           <img
           src="{{asset('images/slide3.webp')}}"
             class="d-block w-100"
             alt="..."
           />
         </div>
       </div>
       <button
         class="carousel-control-prev"
         type="button"
         data-bs-target="#carouselExampleFade"
         data-bs-slide="prev"
       >
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button
         class="carousel-control-next"
         type="button"
         data-bs-target="#carouselExampleFade"
         data-bs-slide="next"
       >
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </button>
     </div>
   </div>
   <div class="slides1 d-flex align-items-center my-3">
     <div class="row m-0 p-0">
       <div class="col-md-3 bg-white">
         <img src="{{asset('images/banner1.jpg')}}" alt="" />
       </div>
       <div class="col-md-3 bg-white">
         <img src="{{asset('images/banner2.jpg')}}" alt="" />
       </div>
       <div class="col-md-3 bg-white">
         <img src="{{asset('images/banner3.jpg')}}" alt="" />
       </div>
       <div class="col-md-3 bg-white">
         <img src="{{asset('images/banner4.jpg')}}" alt="" />
       </div>
     </div>
   </div>
   <div class="section-content mt-4">
      <a href="">
        <h2 class="p-0">SẢN PHẨM MỚI</h2>
      </a>
      <div class="container mt-4">
        <div class="row m-0 d-flex justify-content-between mb-4">
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product1.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product2.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product3.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product4.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row m-0 d-flex justify-content-between">
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                  src="{{ asset('images/product3.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product4.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product2.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product1.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
   </div>
   <div>
     <div class="row m-0">
       <img src="{{ asset('images/img-banner-top.webp')}}" alt="" />
     </div>
   </div>
   <div class="section-content mt-4">
      <a href="">
        <h2 class="p-0">SẢN PHẨM BÁN CHẠY</h2>
      </a>
      <div class="container mt-4">
        <div class="row m-0 d-flex justify-content-between mb-4">
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product1.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product2.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product3.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product4.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row m-0 d-flex justify-content-between">
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                  src="{{ asset('images/product3.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product4.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product2.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <div class="card" style="width: 18rem">
                <img
                src="{{ asset('images/product1.webp')}}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
   </div>
@endsection
