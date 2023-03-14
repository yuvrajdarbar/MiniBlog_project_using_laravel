<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>MiniBlog Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased bg-black">
        <nav class="flex items-center justify-between flex-wrap bg-red-500 p-4">
            <div class="flex items-center flex-shrink-0 text-white mr-6 space-x-3">
             <img src="images/1.jpg" class="w-10 h-9 rounded-md">
              <span class="font-semibold text-xl tracking-tight">MiniBlog</span>
            </div>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500 no-underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white no-underline dark:text-gray-500 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>  
          </nav>  
          <!---Main Body start--->
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800">
                   <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-400 table-auto">
                                    
                                    <tbody class="bg-gray-600 text-white divide-y divide-gray-500">
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="px-3 py-4 whitespace-nowrap"><b>Topic:-</b>{{$post->title}}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-8 py-2"><b>Answer:-</b><p> {{$post->body}}</p></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="bg-slate-400 flex text-center justify-center"> 
                                    {{$posts->links()}}
                                </div>

                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>
