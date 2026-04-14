<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Order
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto px-4">

            <div class="bg-white shadow-md rounded-lg p-5">

                <form action="{{ route('orders.store') }}" method="POST" class="space-y-3">
                    @csrf

                    <!-- Rice -->
                    <div class="flex items-center gap-3">
                        <label class="w-20 text-sm text-gray-700">Rice:</label>
                        <select name="rice_id"
                            class="flex-1 text-sm rounded border-gray-300 py-1">
                            @foreach($rices as $rice)
                                <option value="{{ $rice->id }}">
                                    {{ $rice->name }} (₱{{ $rice->price }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Quantity -->
                    <div class="flex items-center gap-3">
                        <label class="w-20 text-sm text-gray-700">Qty:</label>
                        <input type="number" name="quantity"
                            class="flex-1 text-sm rounded border-gray-300 py-1">
                    </div>

                    <!-- Button -->
                    <div class="pt-2 mb-4">
                        <button type="submit"
                            style="background:#0d6efd;color:white;padding:6px 12px;border:none;border-radius:4px;font-size:14px;">
                            Create Order
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>