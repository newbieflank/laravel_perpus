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
                                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                                <p class="mt-1 text-sm/6 text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                </p>

                                <!-- Input Name -->
                                <div class="mt-4">
                                    <x-input-label for="judul_buku" :value="__('Judul Buku')" />
                                    <x-text-input id="judul_buku" class="block mt-1 w-full" type="text"
                                        name="judul_buku" :value="old('judul_buku', $book->judul_buku ?? '')" required autofocus autocomplete="off" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>


                                <div class="mt-4">
                                    <x-input-label for="pengarang" :value="__('Pengarang')" />
                                    <x-text-input id="pengarang" class="block mt-1 w-full" type="text"
                                        name="pengarang" :value="old('pengarang', $book->pengarang ?? '')" required autofocus autocomplete="off" />
                                    <x-input-error :messages="$errors->get('pengarang')" class="mt-2" />
                                </div>

                                <div class="mt-4">
                                    <label for="deskripsi"
                                        class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Deskripsi</label>
                                    <div class="mt-2">
                                        <textarea name="deskripsi" id="deskripsi" rows="3"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 dark:placeholder:text-gray-100 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-gray-800 dark:text-gray-100">
                                        {{ old('deskripsi', $book->deskripsi ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Input Jumlah Buku -->
                                <div class="mt-4">
                                    <x-input-label for="jumlah_buku" :value="__('Jumlah Buku')" />
                                    <x-text-input id="jumlah_buku" class="block mt-1 w-full" type="number"
                                        name="jumlah_buku" :value="old('jumlah_buku', $book->jumlah_buku ?? '')" required min="1" />
                                    <x-input-error :messages="$errors->get('jumlah_buku')" class="mt-2" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="tahun_terbit" :value="__('Tahun terbit')" />
                                    <x-text-input id="tahun_terbit" class="block mt-1 w-full" type="number"
                                        name="tahun_terbit" :value="old('tahun_terbit', $book->tahun_terbit ?? '')" required min="1000" max="2100" />
                                    <x-input-error :messages="$errors->get('tahun_terbit')" class="mt-2" />
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
