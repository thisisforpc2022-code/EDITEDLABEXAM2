<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="text-2xl font-bold mb-6">
                        Welcome, {{ auth()->user()->name }}
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                        <a href="{{ route('rices.index') }}"
                           class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:shadow-lg">
                            🌾 Rice Menu
                        </a>

                        <a href="{{ route('orders.index') }}"
                           class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:shadow-lg">
                            📦 Orders
                        </a>

                        <a href="{{ route('payments.index') }}"
                           class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:shadow-lg">
                            💳 Payments
                        </a>

                    </div>

                    <h3 style="margin-top:30px;">Rice Stocks</h3>

                    <table style="width:100%; background:white; border-collapse:collapse;">
                        <tr style="background:#2d2d2d; color:white;">
                            <th style="padding:10px;">Name</th>
                            <th style="padding:10px;">Stock</th>
                        </tr>

                        @foreach($rices as $rice)
                        <tr>
                            <td style="padding:10px;">{{ $rice->name }}</td>
                            <td style="padding:10px;">{{ $rice->stock }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>