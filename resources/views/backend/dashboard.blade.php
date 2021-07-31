@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        @lang('Welcome :Name', ['name' => Auth::user()->name])
    </x-slot>

    <x-slot name="body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Contacts</h5>
                        <p class="card-text">{{$contactCount}}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-backend.card>
@endsection