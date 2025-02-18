@extends('layouts.main')

@section('main')
    <div class="page-title bg-gray-900 text-white py-12">
        <div class="container relative text-center">
            <h1 class="text-4xl font-bold drop-shadow-lg animate-pulse">Starter Page</h1>
            <p class="mt-2 text-gray-300 max-w-2xl mx-auto">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores expedita dolor quas ab exercitationem
                perspiciatis, ipsa nemo qui? Laudantium quaerat tenetur repudiandae, ad dolores a, mollitia illo doloremque
                nisi quo minima ipsam iure ullam facere, ipsum error cumque ratione! Modi ipsa vel minus quisquam neque
                nobis soluta architecto, tempora at, porro dolore ratione blanditiis dignissimos quam ea qui consectetur
                recusandae molestiae magnam rem! Officiis totam, non saepe perferendis, consequuntur deserunt, iusto veniam
                suscipit unde sunt vitae ducimus dignissimos illum alias dolore soluta culpa magnam dolorem? Perspiciatis,
                non perferendis dignissimos mollitia hic minima? Illo, optio ipsam doloremque consectetur neque dignissimos
                corrupti.
            </p>
            <nav class="breadcrumbs mt-4">
                <ol class="flex justify-center space-x-2 text-gray-400 text-sm">
                    <li><a href="/login" class="hover:text-white transition">Login</a></li>
                    <li class="text-white">/ Silahkan Login untuk mengakses website</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="starter-section"
        class="starter-section section py-16 bg-gradient-to-b from-gray-800 to-gray-900 text-gray-200">
        <div class="container mx-auto text-center" data-aos="fade-up">
            <p class="text-lg font-light">Jika Anda Belum Mempunyai akun Silahkan hubungi pihak perpustakaan</p>
        </div>
    </section>
@endsection
