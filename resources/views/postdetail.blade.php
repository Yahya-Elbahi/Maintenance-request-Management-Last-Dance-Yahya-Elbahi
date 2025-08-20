<!-- resources/views/technisien/posts.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($posts as $post)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $post->title }}
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        {{ $post->content }}
                    </p>
                    <div class="mt-4">
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            من العميل: {{ $post->user->name }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

            @if($posts->isEmpty())
            <div class="text-center py-12">
                <p class="text-gray-500 dark:text-gray-400">لا توجد منشورات حالياً</p>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
