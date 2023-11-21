<x-app-layout>
    @section('title', 'Profile')

    <style>
        img{
            width: 60px;
            height: 60px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Orders History</h2>

                @if (auth()->check() && auth()->user()->orders)
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>image</th>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (auth()->user()->orders as $order)
                                    <tr>
                                        <td>
                                            <img src="../img/{{ $order->products->image }}"
                                                alt="{{ $order->products->name }}" >
                                        </td>
                                        <td>{{ $order->products->name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>${{ $order->total }}</td>
                                        <td>{{ $order->date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>No orders found.</p>
                @endif

            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
