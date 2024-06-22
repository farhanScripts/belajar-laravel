<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <article class="py-8 max-w-screen-lg border-b border-gray-300">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-900">{{ $post['title'] }}</h2>
    <div class="text-base text-grey-500">
      <a href="#">{{ $post['author'] }}</a> | 1 Januari 2024
    </div>
    <p class="my-4 font-light text-justify">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">Back To Posts </a>
  </article>
</x-layout>