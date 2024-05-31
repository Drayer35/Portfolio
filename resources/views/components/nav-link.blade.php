@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 hover:border-b-2 border-[#008CFF] dark:border-[#08C68D] text-sm font-medium leading-5 text-[#008CFF] focus:outline-none transition duration-150 ease-in-out dark:text-[#08C68D] flex items-center  hover:bg-[#F0F8FF] hover:dark:bg-[#123229]'
            : 'inline-flex items-center px-1 pt-1 hover:border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }} 
</a>