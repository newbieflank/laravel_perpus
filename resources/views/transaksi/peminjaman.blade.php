<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Peminjaman') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('books.create') }}"
                class="px-4 py-2 bg-gray-900 text-white rounded-lg shadow-md hover:bg-gray-800 dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-800">
                Tambah Buku
            </a>

        </div>
    </div>


    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-300 dark:border-gray-700">
                            <thead>
                                <tr class="bg-gray-900 text-white dark:bg-gray-100 dark:text-gray-900">
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">No</th>
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">ID</th>
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">Judul Buku</th>
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">Jumlah Buku</th>
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">Jumlah Peminjaman
                                    </th>
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">Tanggal Masuk
                                    </th>
                                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($books as $index => $item)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            {{ $index + 1 }}</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            {{ $item->id }}</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            {{ $item->judul_buku }}</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            {{ $item->jumlah_buku }}</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            {{ $item->jumlah_di_pinjam }}</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            {{ $item->tanggal_masuk }}</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-700">
                                            <a href="{{ route('books.edit', $item->id) }}"
                                                class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-green-600 !important">Edit</a>
                                            <form action="{{ route('books.destroy', $item->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600"
                                                    onclick="return confirm('Apakah kamu yakin ingin menghapus?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7"
                                            class="px-4 py-4 text-center text-gray-500 dark:text-gray-400">
                                            Tidak ada data
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
