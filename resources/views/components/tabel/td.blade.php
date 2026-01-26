@props(['value', 'cols' => '1', 'route' => '#', 'id' => '#', 'money' => false])

<th
    {{ $attributes->merge(['class' => 'text-center font-medium px-4 sm:px-6 text-sm leading-tight text-gray-900 whitespace-no-wrap border-b border-gray-200 group-hover:bg-gray-300 group-hover:bg-opacity-75', 'cols' => $cols]) }}>
    <a href="{{ $route }}/{{ $id }}">
        @if ($money)
            <div class="py-7">{{ Number::currency($value, 'IDR', 'id') }}</div>
        @else
            <div class="py-7">{{ $value }}</div>
        @endif
    </a>
</th>
