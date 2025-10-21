@extends('layouts.master')
@section('container')
    {{-- FIXME: nanti pakai role --}}
    @isset($role_user)
        @if ($role_user == 1)
            {{-- IF: Role 1 (Pengepul) --}}
            @include('dashboard.pengepul')
        @elseif ($role_user == 2)
            {{-- IF: Role 2 (Pabrik) --}}
            @include('dashboard.pabrik')
        @else
            {{-- IF: Failsafe, back to template --}}
            @include('dashboard.count')
        @endif
    @endisset
    @empty($role_user)
        {{-- IF: Empty --}}
        @include('dashboard.count')
    @endempty
@endsection
