<a href="{{route($route)}}" class="
    flex
    items-center
    font-bold
    @if($route == Route::currentRouteName())
        bg-gray-200
        text-black
    @else
        text-black
        hover:bg-gray-100
    @endif
        px-3
        py-2
        rounded-md
        text-sm
        font-medium
"><div class="mr-2">{{$slot}}</div>{{ucfirst($route)}}</a>
