<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
     <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gradient-to-r from-slate-200 to-cyan-100">
    <div class="py-10">

        @if(session('error'))
        <div class="py-6 px-12 ">
            <div class="bg-red-400  py-2 w-64 mx-auto rounded-md flex justify-between px-3 shadow-lg" id="show">
                <p class="text-center text-white text-base">{{ session('error') }}</p>
                <span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </span>
            </div>
        </div>
        @endif

      <div class="w-[80%] mx-auto shadow-2xl rounded-lg">
        <div class="flex">
          <div class="w-[32%] hidden md:block">
            <div class="w-full">
              <img src="img/logo.svg" class="w-full h-full" alt="" />
              <p class="text-center text-lg font-semibold leading-tight py-5 ">Kelola Website Satpol PP</p>
            </div>
          </div>
          <div class="w-[100%] md:w-[70%]">
            <div class="flex justify-between">
              <div class="px-3 pt-2 gap-2">
                <img src="img/logo.svg" width="40" alt="" />
              </div>
              <div>
                <p class="pt-4 px-3 text-base text-center font-semibold">
                  Satuan Polisi Pamong Praja
                </p>
              </div>
            </div>
            <div class="pt-3">
              <hr class="font-bold border-1 border-black" />
            </div>



            <div>
              <h1 class="font-semibold text-2xl px-4 pt-6">Selamat Datang</h1>
              <p class="text-slate-400 text-sm px-4 pt-2">
                Silahkan Masuk Dengan Mengisi Username dan Password
              </p>

               <form action="{{ route('actionlogin') }}" method="post">
                @csrf
              <div class="px-4 pt-6">
                <label for="">Email</label>
                <input
                  type="text"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Masukkan Email"
                  name="email"
                  required
                />
              </div>
              <div class="px-4 pt-3">
                <label for="">Password</label>
                <input
                  type="password"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Masukkan Password"
                  name="password"
                  required
                />
              </div>
              <div class="py-10 px-4">
                <button type="submit"
                  class="px-4 rounded-lg w-full py-3 bg-red-400 text-white"
                >
                  Masuk
                </button>
                 <div class="py-4 text-end">
                    <button class="rounded-lg py-3 px-5 bg-yellow-400" onclick="location.href='{{ route('tamu') }}'">Masuk Sebagai Tamu</button>
                 </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>

     <script>
      $("#show").show();
      setTimeout(function () {
        $("#show").hide();
      }, 3000);
    </script>

        <!-- script flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
