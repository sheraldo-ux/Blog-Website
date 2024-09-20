<x-layout>
  <x-slot:title>{{ 'About Us - Blog Website' }}</x-slot>

  {{-- Hero Section --}}
  <div class="bg-gray-100 py-8">
      <div class="container mx-auto px-4">
          <div class="text-center">
              <h1 class="text-5xl font-bold text-gray-900">About Us</h1>
              <p class="mt-4 text-xl text-gray-600">Learn more about our mission, values, and team.</p>
          </div>
      </div>
  </div>

  {{-- About Content --}}
  <section class="py-10">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-6">Our Mission</h2>
          <p class="mb-4 text-lg text-gray-600">
              We are passionate about sharing knowledge and fostering a community of learners. Our blog covers a range of topics from design and technology to programming, all with the goal of providing valuable insights and resources to our readers.
          </p>

          <h2 class="text-3xl font-bold mb-6">Our Values</h2>
          <ul class="list-disc ml-5 mb-4 text-lg text-gray-600">
              <li>Commitment to Quality</li>
              <li>Community Engagement</li>
              <li>Continuous Learning</li>
              <li>Integrity and Transparency</li>
          </ul>

          <h2 class="text-3xl font-bold mb-6">Meet the Team</h2>
          <div class="flex flex-wrap justify-center gap-4">
            <div class="w-80 bg-white p-6 rounded-lg border border-gray-200 shadow-md">
                <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Team Member Name" />
                <h3 class="text-xl font-bold text-center mt-4">Sheraldo Halim</h3>
                <p class="text-center text-gray-500">Full Stack Developer</p>
            </div>
        </div>        
  </section>

</x-layout>
