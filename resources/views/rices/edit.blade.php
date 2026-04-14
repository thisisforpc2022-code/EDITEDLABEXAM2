<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Rice
        </h2>
    </x-slot>

    <div class="py-6">
        <!-- card width same as create -->
        <div class="max-w-md mx-auto px-4">

            <div class="bg-white shadow-md rounded-lg p-5">

                <form action="{{ route('rices.update', $rice->id) }}" method="POST" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="flex items-center gap-3">
                        <label class="w-20 text-sm text-gray-700">Name:</label>
                        <input type="text" name="name"
                            value="{{ $rice->name }}"
                            class="flex-1 text-sm rounded border-gray-300 py-1">
                    </div>

                    <!-- Price -->
                    <div class="flex items-center gap-3">
                        <label class="w-20 text-sm text-gray-700">Price:</label>
                        <input type="number" name="price" step="0.01"
                            value="{{ $rice->price }}"
                            class="flex-1 text-sm rounded border-gray-300 py-1">
                    </div>

                    <!-- Stock -->
                    <div class="flex items-center gap-3">
                        <label class="w-20 text-sm text-gray-700">Stock:</label>
                        <input type="number" name="stock"
                            value="{{ $rice->stock }}"
                            class="flex-1 text-sm rounded border-gray-300 py-1">
                    </div>

                    <!-- Description -->
                    <div class="flex items-start gap-3">
                        <label class="w-20 text-sm text-gray-700 pt-1">Description:</label>
                        <textarea name="description" rows="1"
                            class="flex-1 text-sm rounded border-gray-300 py-1">{{ $rice->description }}</textarea>
                    </div>

                    <!-- Button -->
                    <div class="pt-2 mb-4">
                        <button type="submit"
                            style="background:#0d6efd;color:white;padding:6px 12px;border:none;border-radius:4px;font-size:14px;">
                            Update Rice
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>