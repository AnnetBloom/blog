<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Post
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="max-w-1xl mx-auto px-4">
                <!-- Кнопка назад -->
                <a href="/posts" class="text-blue-600 hover:text-blue-800 transition mb-4 inline-block">
                    &larr; Вернуться ко всем постам
                </a>

                <!-- Карточка поста -->
                <article class="bg-white shadow-lg rounded-2xl overflow-hidden">
                    
                    <div class="p-8">
                        <!-- Заголовок -->
                        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 leading-tight">
                            {{ $post->title }}
                        </h1>

                        <!-- Контент -->
                        <div class="prose prose-blue text-gray-700 leading-relaxed">
                            {{ $post->content }}
                        </div>
                    </div>

                    <!-- Футер карточки -->
                    <div class="bg-gray-50 px-8 py-4 border-t border-gray-100 text-sm text-gray-500">
                        Опубликовано: {{ $post->created_at->format('d.m.Y') }}
                    </div>
                </article>
            </div>
    </div>
</x-app-layout>