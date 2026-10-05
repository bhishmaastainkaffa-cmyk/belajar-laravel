<x-admin.layout>
    <div class="pb-6">
        <h1 class="text-2xl font-bold text-white">
            {{ $title }}
        </h1>

        <p class="text-white">
            {{ $name }}
        </p>
        <a href="{{ $link }}"
        target="_blank"
        class="text-blue-600 dark:text-blue-400 hover:underline">
            {{ $link }}
        </a>
    </div>
</x-admin.layout>
