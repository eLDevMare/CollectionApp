<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Coll Apps | Home</title>

    <!-- Favicon icon -->

    <link

      rel="icon"

      type="image/png"

      sizes="16x16"

      href="./images/armor.png"

    />

    <!-- Custom Stylesheet -->

    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick.css" />

    <!-- <link rel="stylesheet" type="text/css" href="./vendor/slick/slick-theme.css" /> -->

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  </head>



  <body>
    <style>
      .dropdown-menu {
  left: -130px;
  display: none;
  position: absolute;
  background-color: white;
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-menu.show {
  display: block;
}

    </style>

    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>



    <div id="main-wrapper">

      <div class="header">

        <div class="container">

          <div class="row">

            <div class="col-xxl-12">

              <div class="header-content">

                <div class="header-left">

                  <div class="brand-logo">

                    <a href="Home.php" class="">

                      <img src="./images/armor.png" style="width: 100px;" alt="" />

                      <span>Coll Apps</span>

                    </a>

                  </div>

                  <div class="search">

                    <form action="#">

                      <div class="input-group">

                        <input

                          type="text"

                          class="form-control"

                          placeholder="Search Here"

                        />

                        <span class="input-group-text"

                          ><i class="icofont-search"></i

                        ></span>

                      </div>

                    </form>

                  </div>

                </div>



                <div class="header-right">

                  <div class="dark-light-toggle" onclick="themeToggle()">

                    <span class="dark"><i class="icofont-moon"></i></span>

                    <span class="light"><i class="icofont-sun-alt"></i></span>

                  </div>

                  <div class="notification dropdown">

                    <div class="notify-bell" data-toggle="dropdown">

                      <span><i class="icofont-alarm"></i></span>

                    </div>

                    <div

                      class="

                        dropdown-menu dropdown-menu-right

                        notification-list

                      "

                    >

                      <h4>Announcements</h4>

                      <div class="lists">

                        <a href="#" class="">

                          <div class="d-flex align-items-center">

                            <span class="me-3 icon success"

                              ><i class="icofont-check"></i

                            ></span>

                            <div>

                              <p>Account created successfully</p>

                              <span>2020-11-04 12:00:23</span>

                            </div>

                          </div>

                        </a>

                        <a href="#" class="">

                          <div class="d-flex align-items-center">

                            <span class="me-3 icon fail"

                              ><i class="icofont-close"></i

                            ></span>

                            <div>

                              <p>2FA verification failed</p>

                              <span>2020-11-04 12:00:23</span>

                            </div>

                          </div>

                        </a>

                        <a href="#" class="">

                          <div class="d-flex align-items-center">

                            <span class="me-3 icon success"

                              ><i class="icofont-check"></i

                            ></span>

                            <div>

                              <p>Device confirmation completed</p>

                              <span>2020-11-04 12:00:23</span>

                            </div>

                          </div>

                        </a>

                        <a href="#" class="">

                          <div class="d-flex align-items-center">

                            <span class="me-3 icon pending"

                              ><i class="icofont-warning"></i

                            ></span>

                            <div>

                              <p>Phone verification pending</p>

                              <span>2020-11-04 12:00:23</span>

                            </div>

                          </div>

                        </a>



                        <a href="#"

                          >More <i class="icofont-simple-right"></i

                        ></a>

                      </div>

                    </div>

                  </div>



                  <div class="profile_log dropdown">
                    <div class="user" id="dropdownToggle">
                      <span class="thumb">
                        <img src="./images/avatar.png" alt="" />
                      </span>
                      <span class="arrow">
                        <i class="icofont-angle-down"></i>
                      </span>
                    </div>
                    
                    <div class="dropdown-menu dropdown-menu-right" id="dropdownMenu">
                      <div class="user-email">
                        <div class="user">
                          <span class="thumb">
                            <img src="./images/avatar.png" alt="" />
                          </span>
                          <div class="user-info">
                            @if (session('user_data'))
                                @php
                                    $user_data = session('user_data');
                                @endphp
                                <h5>{{ $user_data['nama_karyawan'] }}</h5>
                            <span></span>
                            @endif
                          </div>
                        </div>
                      </div>
                      
                      <a href="profile.php" class="dropdown-item">
                        <i class="icofont-ui-user"></i> Profile
                      </a>
                      <a href="settings-profile.php" class="dropdown-item">
                        <i class="icofont-ui-settings"></i> Setting
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class="icofont-history"></i> Activity
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class="icofont-lock"></i> Lock
                      </a>
                      <a href="{{ route('logout') }}" class="dropdown-item logout">
                        <i class="icofont-logout"></i> Logout
                      </a>
                    </div>
                  </div>                  
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>



      <div class="sidebar">

        <div class="brand-logo">

          <a href="Home.php"><img src="./images/armor.png" alt="" /> </a>

        </div>

        <div class="menu">

          <ul>

            <li>

              <a

                href="{{ route('home.index') }}"

                data-toggle="tooltip"

                data-placement="right"

                title="Home"

              >

                <span><i class="icofont-ui-home"></i></span>

              </a>

            </li>

            <li>

              <a

                href="{{ route('trade.index') }}"

                data-toggle="tooltip"

                data-placement="right"

                title="Collection"

              >

                <span><i class="icofont-stack-exchange"></i></span>

              </a>

            </li>

            <li>

              <a

                href="#"

                data-toggle="tooltip"

                data-placement="right"

                title="Wallet"

              >

                <span><i class="icofont-wallet"></i></span>

              </a>

            </li>

            <li>

              <a

                href="#"

                data-toggle="tooltip"

                data-placement="right"

                title="Price"

              >

                <span><i class="icofont-price"></i></span>

              </a>

            </li>

            <li class="logout">

              <a

                href="{{ route('logout') }}"

                data-toggle="tooltip"

                data-placement="right"

                title="Signout"

              >

                <span><i class="icofont-power"></i></span>

              </a>

            </li>

          </ul>

        </div>

      </div>


      @yield('content')
    </div>

      <script src="{{ asset('vendor/jquery/jquery.min.js')  }}"></script>

      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  
  
      <script src="{{ asset('vendor/basic-table/jquery.basictable.min.js') }}"></script>
  
      <script src="{{ asset('js/plugins/basic-table-init.js') }}"></script>
  
  
  
      <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  
      <script src="{{ asset('js/plugins/perfect-scrollbar-init.js') }}"></script>
  
  
  
      <script src="{{ asset('vendor/apexchart/apexcharts.min.js') }}"></script>
  
      <script src="{{ asset('js/dashboard.js') }}"></script>
  
      <script src="{{ asset('js/plugins/apex-price.js') }}"></script>
  
  
  
      <script src="{{ asset('vendor/slick/slick.min.js')}}"></script>
  
      <script src="{{ asset('js/plugins/slick-init.js')}}"></script>
  
      <script src="{{ asset('js/scripts.js') }}"></script>
      <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
      <script src="{{ asset('js/scripts.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        // Ambil elemen toggle dan menu
const dropdownToggle = document.getElementById('dropdownToggle');
const dropdownMenu = document.getElementById('dropdownMenu');

// Tambahkan event listener untuk toggle
dropdownToggle.addEventListener('click', function() {
  // Toggle kelas "show" untuk menu dropdown
  dropdownMenu.classList.toggle('show');
});

// Tutup dropdown jika klik di luar elemen dropdown
window.addEventListener('click', function(e) {
  if (!dropdownToggle.contains(e.target)) {
    dropdownMenu.classList.remove('show');
  }
});

      </script>

  
    </body>
  
  </html>
  
  