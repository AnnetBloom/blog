<form method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}">
    
    @csrf
    @if(isset($post))
        @method('PUT')
    @endif

    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title ?? '') }}" 
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror">
        @error('title')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
        <textarea name="content" id="content" rows="10" 
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('content') border-red-500 @enderror">{{ old('content', $post->content ?? '') }}</textarea>
        @error('content')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex gap-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ isset($post) ? 'Update Post' : 'Create Post' }}
        </button>
        <a href="{{ route('posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Cancel
        </a>
    </div>
</form>