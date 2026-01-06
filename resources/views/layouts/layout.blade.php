<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }} | Simku</title>

    <!-- MAIN STYLE -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 60px;
            background-color: rgb(82 82 91);
            color: rgb(228 228 231);
            text-align: center;
            border-radius: 6px;
            padding: 2px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -30px;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>
    <!-- END MAIN STYLE -->
    {{-- HACK:USING FLOWBITE WITH CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    {{-- END Flowbite --}}
</head>

<body>
    @include('layouts.sidebar')
    <div class="lg:w-5/6 px-0 lg:float-right border my-1 min-h-screen">
        {{-- SECTION Header --}}
        <div class="bg-white px-3 py-5 sm:p-5 border-b-1">
            <a href="/dashboard" class="flex justify-between">
                <div class="">
                    <div class="leading-4 float-left pl-15 ">
                        <h3 class="sm:leading-7 font-bold sm:text-2xl">{{ $judul }}</h3>
                    </div>
                </div>
            </a>
        </div>
        {{-- END SECTION Header --}}
        {{-- SECTION Body --}}
        <div class="min-h-screen">
            <div class="pt-3 px-3">
                <div class="rounded-lg bg-zinc-200 md:px-4 py-6">
                    <div class="bg-zinc-50 md:p-3 rounded">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{-- END SECTION Body --}}
    </div>


</body>
{{-- HACK:USING FLOWBITE WITH CDN --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>
