<x-layout>
  <x-slot:title>{{ 'Home Page' }}</x-slot>

  {{-- Hero Section --}}
  <div class="bg-gray-100 py-8">
      <div class="container mx-auto px-4">
          <div class="text-center">
              <h1 class="text-5xl font-bold text-gray-900">Welcome to the Blog</h1>
              <p class="mt-4 text-xl text-gray-600">Explore our latest articles on design, technology, and programming</p>
          </div>
      </div>
  </div>

  {{-- Latest Posts --}}
  <section class="py-10">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-6">Latest Posts</h2>
          <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
              @foreach ($posts as $post)
              <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                      <a href="/categories/{{ $post->category->slug }}">
                          <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                              {{ $post->category->name }}
                          </span>
                      </a>
                      <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                  </div>
                  <a href="/posts/{{ $post->slug }}">
                      <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h2>
                  </a>
                  <p class="mb-5 font-light text-gray-500">{{ Str::limit($post->body, 150) }}</p>
                  <div class="flex justify-between items-center">
                      <div class="flex items-center space-x-3">
                          <a href="/authors/{{ $post->author->username }}">
                              <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                              <span class="font-medium text-sm">
                                  {{ $post->author->name }}
                              </span>
                          </a>
                      </div>
                      <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 hover:underline text-sm">
                          Read more
                          <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </a>
                  </div>
              </article>
              @endforeach
          </div>
          
          {{-- See More Button --}}
          <div class="mt-8 text-center">
              <a href="/posts" class="inline-block bg-blue-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-700">See More</a>
          </div>
      </div>
  </section>

  {{-- Featured Categories --}}
  <section class="py-10">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6">Featured Categories</h2>
        <div class="flex space-x-4">
            @foreach ($categories as $category)
            <a href="/categories/{{ $category->slug }}" class="flex-1 bg-{{ $category->color }}-100 text-center p-6 rounded-lg shadow hover:bg-{{ $category->color }}-200">
                <h3 class="text-lg font-bold text-{{ $category->color }}-800">{{ $category->name }}</h3>
            </a>
            @endforeach
        </div>
    </div>
</section>

</x-layout>


  
