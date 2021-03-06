@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('page')
<div class="min-h-screen bg-gray-100">


    <div class="grid grid-cols-6 gap-4">
    <div class="col">
    <livewire: admin.sidebar/>
    sidebar

    </div>
    <div class="col-span-5">
    <header class="bg-white shadow">

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    {{ $header }}
    </div>

    </header>
    <main>
    {{ $slot }}

    </main>
    </div>

    </div>

</div>

@endsection


@push('scripts')

<script src="{{ asset('js/admin.js') }}"></script>
@endpush