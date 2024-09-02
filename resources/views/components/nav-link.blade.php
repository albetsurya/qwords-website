@props(['active' => false])

<a class="{{ $active ? 'border-b-2 border-black text-black' : 'text-black hover:border-b-2 hover:text-black' }} px-3 py-2 text-lg font-semibold "
    aria-current="{{ $active ? '"page"' : false }}" {{ $attributes }}>{{ $slot }}</a>
