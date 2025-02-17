<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf

                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                                <p class="mt-1 text-sm/6 text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                </p>

                                <!-- Input Buku -->
                                <div class="mt-4">
                                    <select class="js-example-basic-single w-full" name="id_buku">
                                        @forelse ($book as $index => $item)
                                            <option value="{{ $item->id }}">{{ $item->judul_buku }}</option>
                                        @empty
                                            <option value="0">NO Data</option>
                                        @endforelse

                                    </select>
                                    <x-input-error :messages="$errors->get('id_buku')" class="mt-2" />
                                </div>


                                <!-- Input Jumlah Buku -->
                                <div class="mt-4">
                                    <x-input-label for="jumlah_buku" :value="__('Jumlah Buku')" />
                                    <x-text-input id="jumlah_buku" class="block mt-1 w-full" type="number"
                                        name="jumlah_buku" :value="old('jumlah_buku')" required min="1" />
                                    <x-input-error :messages="$errors->get('jumlah_buku')" class="mt-2" />
                                </div>



                                <!-- Input User -->
                                <div class="mt-4">
                                    <select class="js-example-basic-single w-full" name="id_user">
                                        @forelse ($user as $index => $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @empty
                                            <option value="0">NO Data</option>
                                        @endforelse

                                    </select>
                                    <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
                                </div>


                                <!-- Input Admin -->
                                <div class="mt-4">
                                    <select class="js-example-basic-single w-full" name="penanggung_jawab">
                                        @forelse ($admin as $index => $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                            <option value="0">NO Data</option>
                                        @endforelse

                                    </select>
                                    <x-input-error :messages="$errors->get('penanggung_jawab')" class="mt-2" />
                                </div>




                                <!-- Input Tanggal Pengembalian -->
                                <div class="mt-4">
                                    <x-input-label for="tanggal_pengembalian" :value="__('Tanggal Pengembalian')" />
                                    <x-text-input id="tanggal_pengembalian" class="block mt-1 w-full" type="date"
                                        name="tanggal_pinjam" :value="old('tanggal_pinjam')" required />
                                    <x-input-error :messages="$errors->get('tanggal_pengembalian')" class="mt-2" />
                                </div>
                            </div>

                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
