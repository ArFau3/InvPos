@props(['name', 'value', 'money' => false])
<div class="flex justify-between bg-zinc-200 px-5 py-4 rounded ">
    <P>{{ $name }}</P>
    @if ($money)
        <p>{{ Number::currency($value, 'IDR', 'id') }}</p>
    @else
        <p>{{ $value }}</p>
    @endif

</div>
