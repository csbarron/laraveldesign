@props([
    'centered'=>false
])
<div class="grid grid-cols-1 md:grid-cols-2 @if($centered)items-center @endif">
    <div class="p-6">
        {{$left}}
    </div>

    <div class="p-6">
        {{$right}}
    </div>
</div>
