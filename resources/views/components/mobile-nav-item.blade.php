<a href="{{route($route)}}" class="

    @if($route == Route::currentRouteName())
        bg-gray-900
        text-white
    @else
        text-gray-300
        hover:bg-gray-700
        hover:text-white
    @endif
    block
    px-3
    py-2
    rounded-md
    text-base
    font-medium
">{{ucfirst($route)}}</a>
