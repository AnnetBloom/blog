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

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @forelse ($posts as $post)
                        <div class="mb-6 pb-6 border-b">
                            <h3 class="text-2xl font-bold mb-2">
                                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:text-blue-800">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 mb-2">
                                By {{ $post->user->name }} • {{ $post->created_at->diffForHumans() }}
                            </p>
                            <p class="text-gray-700 mb-4">
                                {{ Str::limit($post->content, 200) }}
                            </p>
                            @if (auth()->id() === $post->user_id)
                                <div class="flex gap-2">
                                    <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                                    <form method="POST" action="{{ route('posts.destroy', $post) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @empty
                        <p class="text-gray-500">No posts yet. <a href="{{ route('posts.create') }}" class="text-blue-600">Create one!</a></p>
                    @endforelse

                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
