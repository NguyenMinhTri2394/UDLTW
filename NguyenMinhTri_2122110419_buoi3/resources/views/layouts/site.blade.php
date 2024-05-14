<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poetsen+One&display=swap" rel="stylesheet">
    
    @yield('header')
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <a href="index.html">
                  <img src=" {{ asset('images/logo.webp') }} " class="img-fluid" alt="logo" />
                </a>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="search">
                  <input placeholder="Tìm kiếm sản phẩm..." type="text" />
                  <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
              </div>
              <div class="col-md d-flex align-items-center account">
                <a href="" class="d-flex">
                  <i
                    class="fa-solid fa-circle-user pt-1"
                    style="font-size: 30px"
                  ></i>
                  <h6 style="margin-left: 10px">Tài khoản của tôi</h6>
                </a>
              </div>
              <div class="col-md d-flex align-items-center cart">
                <a href="" class="d-flex align-items-center">
                  <button type="button" class="btn position-relative">
                    <i
                      class="fa-solid fa-bag-shopping pt-1"
                      style="font-size: 30px"
                    ></i>
                    <span
                      class="position-absolute top-0 translate-middle badge rounded-pill bg-danger mt-3"
                    >
                      1
                    </span>
                  </button>
                  <h6 style="padding-top: 10px">Giỏ hàng</h6>
                </a>
              </div>
            </div>
            <div class="row menu">
              <ul class="d-flex justify-content-between">
                <li>
                  <a href="">GIÀY BÓNG ĐÁ</a>
                  <ul class="dropdown">
                    <li>GIÀY BÓNG ĐÁ NIKE</li>
                    <li>GIÀY BÓNG ĐÁ ADIDAS</li>
                    <li>GIÀY BÓNG ĐÁ MIZUNO</li>
                    <li>GIÀY BÓNG ĐÁ PUMA</li>
                    <li>GIÀY BÓNG ĐÁ KAMITO</li>
                  </ul>
                </li>
                <li>
                  <a href="">SALE</a>
                </li>
                <li>
                  <a href="">TRẢ GÓP</a>
                </li>
                <li>
                  <a href="">PHỤ KIỆN BÓNG ĐÁ</a>
                  <ul class="dropdown">
                    <li>TẤT THI ĐẤU</li>
                    <li>BALO THI ĐẤU</li>
                    <li>ÁO GIỮ NHIỆT</li>
                    <li>QUẦN GIỮ NHIỆT</li>
                    <li>BÓNG THI ĐẤU</li>
                  </ul>
                </li>
                <li>
                  <a href="">CHÍNH SÁCH</a>
                </li>
                <li>
                  <a href="">LIÊN HỆ</a>
                </li>
                <li>
                  <a href="">SALE</a>
                </li>
                <li>
                  <a href="">SALE</a>
                </li>
                <li>
                  <a href="">SALE</a>
                </li>
                <li>
                  <a href="">SALE</a>
                </li>
                <li>
                  <a href="">SALE</a>
                </li>
              </ul>
            </div>
          </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>FOOTER</footer>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('footer')
</body>
</html>
