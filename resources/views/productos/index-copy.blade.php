@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')
    <div class="mx-auto mt-4 grid max-w-7xl md:grid-cols-3 gap-4 lg:grid-cols-4">
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900">$599</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
        <article class="flex flex-col overflow-hidden rounded bg-white shadow">
            <div class="h-52">
                <img 
                    src="{{ asset('assets/img/article-1.jpg') }}" 
                    alt=""
                    class="h-full w-full object-cover object-center"    
                >
            </div>
            <div class="flex-1 space-y-3 p-5">
                <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                <h2 class="text-xl font-semibold leading-tight text-slate-800">Aprende laravel desde 0</h2>
                <p class="hidden text-slate-500 md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur voluptate ipsam, laboriosam consequuntur nisi optio, possimus cupiditate ea tempora aliquid molestiae omnis accusantium eum neque ipsum quis et dolores.</p>
            </div>
            <div class="flex space-x-2 p-5">
                <img 
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api/?name=Oscar+Castellanos" 
                    alt="Oscar Castellanos"
                >
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600">Oscar Castellanos</span>
                    <span class="text-sm text-slate-500">Dec 30, 2023</span>
                </div>
            </div>
        </article>
    </div>
@endsection