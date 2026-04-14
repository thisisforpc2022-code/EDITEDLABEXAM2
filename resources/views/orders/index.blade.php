<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Orders
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">

        <a href="{{ route('orders.create') }}"
           style="background:#2d2d2d;color:white;padding:8px 12px;border-radius:6px;text-decoration:none;">
            + Add Order
        </a>

        <div style="margin-top:20px; overflow-x:auto;">
            <table style="width:100%; border-collapse: collapse; background:white;">

                <tr style="background:#2d2d2d; color:white;">
                    <th style="padding:10px;">Rice</th>
                    <th style="padding:10px;">Quantity</th>
                    <th style="padding:10px;">Total</th>
                </tr>

                @foreach($orders as $order)
                <tr style="border-bottom:1px solid #ddd;">
                    <td style="padding:10px;">
                        {{ $order->rice->name }}
                    </td>

                    <td style="padding:10px;">
                        {{ $order->quantity }}
                    </td>

                    <td style="padding:10px;">
                        ₱{{ $order->total }}
                    </td>
                </tr>
                @endforeach

            </table>
        </div>

    </div>
</x-app-layout>