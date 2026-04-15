<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Payments
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">

        <div style="margin-top:20px; overflow-x:auto;">
            <table style="width:100%; border-collapse: collapse; background:white;">

                <tr style="background:#2d2d2d; color:white;">
                    <th style="padding:10px;">Order ID</th>
                    <th style="padding:10px;">Rice</th>
                    <th style="padding:10px;">Total</th>
                    <th style="padding:10px;">Status</th>
                    <th style="padding:10px;">Actions</th>
                </tr>

                @foreach($payments as $payment)
                <tr style="border-bottom:1px solid #ddd;">
                    
                    <td style="padding:10px;">
                        {{ $payment->order_id }}
                    </td>

                    <td style="padding:10px;">
                        {{ $payment->order->rice->name }}
                    </td>

                    <td style="padding:10px;">
                        ₱{{ $payment->order->total }}
                    </td>

                    <td style="padding:10px;">
                        @if($payment->status == 'Paid')
                            <span style="color:green;font-weight:bold;">Paid</span>
                        @else
                            <span style="color:red;font-weight:bold;">Unpaid</span>
                        @endif
                    </td>

                    <td style="padding:10px;">
                        @if($payment->status == 'Unpaid')
                        <a href="{{ url('payments/'.$payment->id.'/paid') }}"
                        style="background:green;color:white;padding:5px 10px;border-radius:4px;text-decoration:none;">
                            Mark Paid
                        </a>
                        @else
                            ✔ Done
                        @endif

                    </td>

                </tr>
                @endforeach

            </table>
        </div>

    </div>
</x-app-layout>