<!-- Estilos para animações -->
<style>
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>

<div>
    {{-- Hero Section Start --}}
    <div class="relative w-full min-h-screen overflow-hidden bg-white">
        <!-- Padrão de grade tecnológica -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0wIDBoNjB2NjBIMHoiLz48cGF0aCBkPSJNMzAgMzBoMzB2MzBIMzB6IiBmaWxsPSIjMjEyMTIxIiBmaWxsLW9wYWNpdHk9Ii4zIi8+PC9nPjwvc3ZnPg==')] opacity-10">
        </div>

        <!-- Círculos decorativos -->
        <div
            class="absolute top-0 left-0 rounded-full w-96 h-96 bg-cyan-500 mix-blend-multiply filter blur-xl opacity-10 animate-blob">
        </div>
        <div
            class="absolute top-0 right-0 bg-purple-500 rounded-full w-96 h-96 mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute bg-blue-500 rounded-full -bottom-8 left-20 w-96 h-96 mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-4000">
        </div>

        <div class="relative max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
            <!-- Grid -->
            <div class="grid gap-4 md:grid-cols-2 md:gap-8 xl:gap-20 md:items-center">
                <div>
                    <div class="relative">
                        <h1 class="block text-4xl font-bold text-gray-900 sm:text-5xl lg:text-6xl lg:leading-tight">
                            Sua Fábrica Avançada<br>com a <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">NEX</span>
                        </h1>
                        <!-- Linha decorativa -->
                        <div class="absolute left-0 w-24 h-1 -bottom-2 bg-gradient-to-r from-cyan-400 to-blue-500">
                        </div>
                    </div>

                    <p class="mt-8 text-lg text-gray-700 lg:text-xl">
                        TRAZENDO PARA SUA EMPRESA CRIATIVIDADE, INOVAÇÃO, INTELIGÊNCIA ARTIFICIAL<br>
                        E TODOS OS BENEFÍCIOS DE UMA INDÚSTRIA 4.0
                    </p>

                    <!-- Botões -->
                    <div class="grid w-full gap-3 mt-8 sm:inline-flex">
                        <a class="inline-flex items-center justify-center px-6 py-4 text-base font-medium text-white transition-all duration-200 transform border border-transparent rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 hover:-translate-y-1"
                            href="/register">
                            CONHEÇA AGORA NOSSOS PRODUTOS E SOLUÇÕES
                            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <!-- Métricas -->
                    <div class="grid grid-cols-2 gap-8 mt-12 lg:gap-12">
                        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">98%</span>
                                <span class="text-cyan-400">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path d="M12 2L2 19.7778H22L12 2Z" />
                                    </svg>
                                </span>
                            </div>
                            <p class="mt-2 text-gray-600">Satisfação dos clientes</p>
                        </div>
                        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">+10</span>
                                <span class="text-cyan-400">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2Z" />
                                    </svg>
                                </span>
                            </div>
                            <p class="mt-2 text-gray-600">Projetos entregues</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <!-- Imagem principal com efeito de brilho -->
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-cyan-400/30 via-transparent to-purple-400/30 rounded-xl blur-xl filter">
                        </div>
                        <img class="relative w-full transition-transform duration-300 transform shadow-lg rounded-xl hover:scale-105"
                            src="/img/hero-image.jpg" alt="Profissional da indústria fazendo anotações">
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Hero Section End --}

    {{-- Brand Section Start --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold text-gray-900">Navegue pelas<span class="text-blue-500">
                            Marcas
                        </span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200">
                        </div>
                        <div class="flex-1 h-2 bg-blue-400">
                        </div>
                        <div class="flex-1 h-2 bg-blue-600">
                        </div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-600">
                    Descubra as principais marcas do mercado e encontre os melhores produtos para sua indústria.
                </p>
            </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">

                @foreach ($brands as $brand)
                    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800" wire:key="{{ $brand->id }}">
                        <a href="/products?selected_brands[0]={{ $brand->id }}" class="">
                            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}"
                                class="object-cover w-full h-64 rounded-t-lg">
                        </a>
                        <div class="p-5 text-center">
                            <a href=""
                                class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                                {{ $brand->name }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- Brand Section End --}}


    {{-- Categories Section Start --}}
    <div class="py-20 bg-white">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold text-gray-900">Explore as <span class="text-blue-500">
                            Categorias
                        </span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200">
                        </div>
                        <div class="flex-1 h-2 bg-blue-400">
                        </div>
                        <div class="flex-1 h-2 bg-blue-600">
                        </div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-600">
                    Encontre facilmente os produtos que você precisa navegando por nossas categorias especializadas.
                </p>
            </div>
        </div>

        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:gap-6">

                @foreach ($categories as $category)
                    <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}">
                        <div class="p-4 md:p-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="h-[2.375rem] w-[2.375rem] rounded-full"
                                        src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                                    <div class="ms-3">
                                        <h3
                                            class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-gray-400 dark:text-gray-200">
                                            {{ $category->name }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>

    </div>
    {{-- Categories Section  End --}}

    {{-- Customer review Section  Start --}}
    <section class="py-14 bg-gray-50">
        <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
            <div class="max-w-xl mx-auto">
                <div class="text-center">
                    <div class="relative flex flex-col items-center">
                        <h1 class="text-5xl font-bold text-gray-900">Avaliações dos <span class="text-blue-500">
                                Clientes
                            </span></h1>
                        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                            <div class="flex-1 h-2 bg-blue-200">
                            </div>
                            <div class="flex-1 h-2 bg-blue-400">
                            </div>
                            <div class="flex-1 h-2 bg-blue-600">
                            </div>
                        </div>
                    </div>
                    <p class="mb-12 text-base text-center text-gray-600">
                        Veja o que nossos clientes estão dizendo sobre nossos produtos e serviços.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <div class="py-6 bg-white rounded-lg shadow-sm">
                    <div
                        class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b border-gray-200">
                        <div class="flex items-center px-6 mb-2 md:mb-0">
                            <div class="flex mr-2 rounded-full">
                                <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt=""
                                    class="object-cover w-12 h-12 rounded-full">
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    Adren Roy</h2>
                                <p class="text-xs text-gray-600">Web Designer</p>
                            </div>
                        </div>
                        <p class="px-6 text-base font-medium text-gray-600">Joined 12, SEP, 2022</p>
                    </div>
                    <p class="px-6 mb-6 text-base text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                        iure minus sed fugit obcaecati minima quam reiciendis dicta!
                    </p>
                    <div class="flex flex-wrap justify-between pt-4 border-t border-gray-200">
                        <div class="flex px-6 mb-2 md:mb-0">
                            <ul class="flex items-center justify-start mr-4">
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="text-sm text-gray-600">Rating: <span
                                    class="font-semibold text-gray-900">3.0</span></h2>
                        </div>
                        <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-600">
                            <div class="flex items-center">
                                <div class="flex mr-3 text-sm text-gray-600">
                                    <a href="#" class="flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-hand-thumbs-up-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                            </path>
                                        </svg>
                                        <span>12</span>
                                    </a>
                                </div>
                                <div class="flex text-sm text-gray-600">
                                    <a href="#" class="inline-flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-chat" viewBox="0 0 16 16">
                                            <path
                                                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                            </path>
                                        </svg>
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 bg-white rounded-lg shadow-sm">
                    <div
                        class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b border-gray-200">
                        <div class="flex items-center px-6 mb-2 md:mb-0">
                            <div class="flex mr-2 rounded-full">
                                <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg"
                                    alt="" class="object-cover w-12 h-12 rounded-full">
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    Sonira Roy</h2>
                                <p class="text-xs text-gray-600">Manager</p>
                            </div>
                        </div>
                        <p class="px-6 text-base font-medium text-gray-600">Joined 12, SEP, 2022</p>
                    </div>
                    <p class="px-6 mb-6 text-base text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                        iure minus sed fugit obcaecati minima quam reiciendis dicta!
                    </p>
                    <div class="flex flex-wrap justify-between pt-4 border-t border-gray-200">
                        <div class="flex px-6 mb-2 md:mb-0">
                            <ul class="flex items-center justify-start mr-4">
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="text-sm text-gray-600">Rating: <span
                                    class="font-semibold text-gray-900">3.0</span></h2>
                        </div>
                        <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-600">
                            <div class="flex items-center">
                                <div class="flex mr-3 text-sm text-gray-600">
                                    <a href="#" class="flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-hand-thumbs-up-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                            </path>
                                        </svg>
                                        <span>12</span>
                                    </a>
                                </div>
                                <div class="flex text-sm text-gray-600">
                                    <a href="#" class="inline-flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-chat" viewBox="0 0 16 16">
                                            <path
                                                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                            </path>
                                        </svg>
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 bg-white rounded-lg shadow-sm">
                    <div
                        class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b border-gray-200">
                        <div class="flex items-center px-6 mb-2 md:mb-0">
                            <div class="flex mr-2 rounded-full">
                                <img src="https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg" alt=""
                                    class="object-cover w-12 h-12 rounded-full">
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    William harry</h2>
                                <p class="text-xs text-gray-600">Marketing Officer</p>
                            </div>
                        </div>
                        <p class="px-6 text-base font-medium text-gray-600">Joined 12, SEP, 2022</p>
                    </div>
                    <p class="px-6 mb-6 text-base text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                        iure minus sed fugit obcaecati minima quam reiciendis dicta!
                    </p>
                    <div class="flex flex-wrap justify-between pt-4 border-t border-gray-200">
                        <div class="flex px-6 mb-2 md:mb-0">
                            <ul class="flex items-center justify-start mr-4">
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="text-sm text-gray-600">Rating: <span
                                    class="font-semibold text-gray-900">3.0</span></h2>
                        </div>
                        <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-600">
                            <div class="flex items-center">
                                <div class="flex mr-3 text-sm text-gray-600">
                                    <a href="#" class="flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-hand-thumbs-up-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                            </path>
                                        </svg>
                                        <span>12</span>
                                    </a>
                                </div>
                                <div class="flex text-sm text-gray-600">
                                    <a href="#" class="inline-flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-chat" viewBox="0 0 16 16">
                                            <path
                                                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                            </path>
                                        </svg>
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 bg-white rounded-lg shadow-sm">
                    <div
                        class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b border-gray-200">
                        <div class="flex items-center px-6 mb-2 md:mb-0">
                            <div class="flex mr-2 rounded-full">
                                <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg"
                                    alt="" class="object-cover w-12 h-12 rounded-full">
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    James jack</h2>
                                <p class="text-xs text-gray-600">Java Programmer</p>
                            </div>
                        </div>
                        <p class="px-6 text-base font-medium text-gray-600">Joined 12, SEP, 2022</p>
                    </div>
                    <p class="px-6 mb-6 text-base text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                        iure minus sed fugit obcaecati minima quam reiciendis dicta!
                    </p>
                    <div class="flex flex-wrap justify-between pt-4 border-t border-gray-200">
                        <div class="flex px-6 mb-2 md:mb-0">
                            <ul class="flex items-center justify-start mr-4">
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="text-sm text-gray-600">Rating: <span
                                    class="font-semibold text-gray-900">3.0</span></h2>
                        </div>
                        <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-600">
                            <div class="flex items-center">
                                <div class="flex mr-3 text-sm text-gray-600">
                                    <a href="#" class="flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-hand-thumbs-up-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                            </path>
                                        </svg>
                                        <span>12</span>
                                    </a>
                                </div>
                                <div class="flex text-sm text-gray-600">
                                    <a href="#" class="inline-flex items-center hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 mr-1 bi bi-chat" viewBox="0 0 16 16">
                                            <path
                                                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                            </path>
                                        </svg>
                                        Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Customer review Section  End --}}
    <!-- Rodapé -->
    @include('livewire.partials.footer')
</div>
