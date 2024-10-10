<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Coll Apps | Login</title>

    <link rel="icon" type="image/png" sizes="16x16" href="./images/armor.png" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="">
      <div class="authincation pt-[6rem] overflow-hidden">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 col-md-6">
              <div class="mini-logo text-center my-4 flex flex-col justify-center items-center">
                <a href="./intro.html"
                  ><img src="./images/armor.png" style="width: 100px;" alt="" /></a>
                <h4 class="card-title mt-3">Sign in to Collection Apps</h4>
              </div>
              <div class="auth-form card">
                <div class="card-body">
                  <form class="signin_validate row g-3" method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="col-12">
                      <input type="text" class="form-control" placeholder="Username" name="username" />
                    </div>
                    <div class="col-12">
                      <input type="password" class="form-control" placeholder="Password" name="password" />
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                  </form>

                  @if ($errors->has('login'))                
                    <div class="fixed z-10 inset-0 overflow-y-auto" id="my-error-modal">
                      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-4 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-[14rem] sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                          <div>
                            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                              <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">Login Gagal</h3>
                            </div>
                          </div>
                          <div class="mt-4 sm:mt-4">
                            <button class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm" onclick="closeModal()">
                              OK
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
        function closeModal() {
          document.getElementById('my-error-modal').classList.add('hidden');
        }
    </script>

    <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('js/scripts.js') }}"></script>
  </body>
</html>