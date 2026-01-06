@props(['value'])

<th
    {{ $attributes->merge(['class' => 'px-4 sm:px-6 py-5 font-bold leading-tight tracking-wider text-center text-gray-700 uppercase border-b border-gray-200']) }}>
    {{ $value }}
</th>
