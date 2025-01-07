@props(['active' => false])

<a class="{{$active ? 'bg-green-600 text-green-100' : 'bg-green-300 text-green-800' }} px-4 py-2 rounded-sm text-xl"
aria-current="{{ $active ? 'page' : 'false' }}"
 {{$attributes}}
>{{ $slot }}</a>