<nav class="mb-2 border-b-2 border-gray-400">
    <ul class="m-2 flex flex-wrap">
      <li class="ml-auto mr-6">
        <a href="{{ route('home') }}"
            @if( Route::currentRouteName() == "home" )
                class="text-gray-700 cursor-not-allowed"
            @else
                class="text-blue-500 hover:text-blue-800"
            @endif
            >Главная</a>
      </li>
      <li  class="mr-6">
        <a href="{{ route("messages.create") }}" 
            @if( Route::currentRouteName() == "messages.create" )
                class="text-gray-700 cursor-not-allowed"
            @else
                class="text-blue-500 hover:text-blue-800"
            @endif
           >Написать сообщение</a>
      </li>
      <li class="mr-auto">
        <a href="{{ route("messages.index") }}" 
            @if( Route::currentRouteName() == "messages.index" )
                class="text-gray-700 cursor-not-allowed"
            @else
                class="text-blue-500 hover:text-blue-800"
            @endif
           >Все сообщения</a>
      </li>
    </ul>
</nav>