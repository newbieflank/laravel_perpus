<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('books.update', $book->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base/7 font-semibold text-gray-900">Tambah Buku</h2>
                                <p class="mt-1 text-sm/6 text-gray-600">
                                    Silakan isi detail buku dengan lengkap.
                                </p>

                                <!-- Input Name -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Nama Buku')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name', $book->name ?? '')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Input Jumlah Buku -->
                                <div class="mt-4">
                                    <x-input-label for="jumlah_buku" :value="__('Jumlah Buku')" />
                                    <x-text-input id="jumlah_buku" class="block mt-1 w-full" type="number"
                                        name="jumlah_buku" :value="old('jumlah_buku', $book->jumlah_buku ?? '')" required min="1" />
                                    <x-input-error :messages="$errors->get('jumlah_buku')" class="mt-2" />
                                </div>

                                <!-- Input Jumlah Dipinjam -->
                                <div class="mt-4">
                                    <x-input-label for="jumlah_di_pinjam" :value="__('Jumlah Dipinjam')" />
                                    <x-text-input id="jumlah_di_pinjam" class="block mt-1 w-full" type="number"
                                        name="jumlah_di_pinjam" :value="old('jumlah_di_pinjam', $book->jumlah_di_pinjam ?? '')" required min="0" />
                                    <x-input-error :messages="$errors->get('jumlah_di_pinjam')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
