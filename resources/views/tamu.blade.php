<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 <!-- flowbite -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />
</head>
  <body class="bg-gradient-to-r from-slate-200 to-cyan-100">

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.svg') }}" class="h-12" alt="Satpol pp LOGO" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap ">Satuan Polisi Pamong Praja</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <p class="font-semibold text-black text-2xl font-serif">TAMU</p>
        </div>

    </div>
</nav>

    <!-- card Items Hosting-->
    <div class="md:grid md:grid-cols-3">
        @foreach($post as $posts)
        @if($posts->id_jenis==2)


    <div class="py-4 px-2 flex justify-center">
            <div
            class="w-full max-w-sm h-[60px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between px-4 pt-4">

                <span
                class="text-lg truncate cursor-pointer"
                data-tooltip-target="tooltip-top-{{ $posts->id }}"
                data-tooltip-placement="top"
                onclick="location.href='{{ $posts->url }}'"
                >
                {{ $posts->name }}
                </span>
                <div
                id="tooltip-top-{{ $posts->id }}"
                role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                >
                {{ $posts->name }}
                <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <!-- Dropdown menu -->
                <div
                id="dropdown{{ $posts->id }}"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
                >
                <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>

                    <a
                        href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                        data-modal-target="editLink-modal{{ $posts->id }}"
                        data-modal-toggle="editLink-modal{{ $posts->id }}"
                        >Edit</a
                    >
                    </li>
                    <li>
                    <a
                        href="#"
                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                        data-modal-target="popup-modalDelete{{ $posts->id }}"
                        data-modal-toggle="popup-modalDelete{{ $posts->id }}"
                        >Delete</a
                    >
                    </li>
                </ul>
                </div>
            </div>
            <script>
            function myFunction{{ $posts->id }}() {
                location.href = "{{ $posts->url }}";
            }
            </script>
            </div>
    </div>

      @endif
        @endforeach()

    </div>
    <!-- end carditem -->

    @foreach($post as $posts)

    <div
      id="editLink-modal{{ $posts->id }}"
      tabindex="-1"
      aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button
            type="button"
            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="editLink-modal{{ $posts->id }}"
          >
            <svg
              class="w-3 h-3"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
              />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
              Edit Link Website
            </h3>
            <form class="space-y-6" action="{{ route('posts.update', $posts->id) }}" method="post">
                @csrf
                @method("PUT")
              <div>
                <label
                  for="email"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >Nama Website</label
                >
                <input
                  type="text"
                  name="name"
                  id="email"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                  placeholder="Website EMONEV"
                  value="{{ $posts->name }}"
                />
              </div>
              <div>
                <label
                  for="email"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >URL / Link Website</label
                >
                <input
                  type="text"
                  name="url"
                  id="email"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                  placeholder="https://contohWebsite.com"
                 value="{{ $posts->url }}"
                />
              </div>

              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Jenis Website</label
              >
              <select
                id="small"
                name="id_jenis"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
              @foreach($jenis as $jns)
                <option value="{{ $jns->id }}">{{ $jns->jenis }}</option>
              @endforeach()
              </select>
              <button
                type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Ubah Website
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal edit link -->


    <!-- delete modal -->
      <form action="{{ route('posts.destroy',$posts->id) }}" method="POST">
            @csrf
            @method('DELETE')
    <div
      id="popup-modalDelete{{ $posts->id }}"
      tabindex="-1"
      class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button
            type="button"
            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="popup-modalDelete{{ $posts->id }}"
          >
            <svg
              class="w-3 h-3"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
              />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>


          <div class="p-6 text-center">
            <svg
              class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
              />
            </svg>
            <h3
              class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"
            >
              Apakah Anda ingin menghapus data tersebut ?
            </h3>
            <button
              data-modal-hide="popup-modalDelete{{ $posts->id }}"
              type="submit"
              class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
            >
              Ya Saya Yakin !
            </button>
            <button
              data-modal-hide="popup-modalDelete{{ $posts->id }}"
              type="button"
              class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
             Tidak, Kembali
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- end delete modal -->
    @endforeach()

    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>


        <!-- script flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>
