<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rice Menu
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">

        <a href="{{ route('rices.create') }}"
           style="background:#2d2d2d;color:white;padding:8px 12px;border-radius:6px;text-decoration:none;">
            + Add Rice
        </a>

        <div style="margin-top:20px; overflow-x:auto;">
            <table style="width:100%; border-collapse: collapse; background:white;">

                <tr style="background:#2d2d2d; color:white;">
                    <th style="padding:10px;">Name</th>
                    <th style="padding:10px;">Price</th>
                    <th style="padding:10px;">Stock</th>
                    <th style="padding:10px;">Description</th>
                    <th style="padding:10px;">Actions</th>
                </tr>

                @foreach($rices as $rice)
                <tr style="border-bottom:1px solid #ddd;">
                    <td style="padding:10px;">{{ $rice->name }}</td>
                    <td style="padding:10px;">{{ $rice->price }}</td>
                    <td style="padding:10px;">{{ $rice->stock }}</td>
                    <td style="padding:10px;">{{ $rice->description }}</td>

                    <td style="padding:10px;">
                        <a href="{{ route('rices.edit', $rice->id) }}">Edit</a>

                        <form action="{{ route('rices.destroy', $rice->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button style="color:red; border:none; background:none;">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>

    </div>
</x-app-layout>