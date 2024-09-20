<x-layout>
  <x-slot:title>{{ 'Contact Us - Blog Website' }}</x-slot>

  {{-- Hero Section --}}
  <div class="bg-gray-100 py-8">
      <div class="container mx-auto px-4">
          <div class="text-center">
              <h1 class="text-4xl font-bold text-gray-900">Contact Us</h1>
              <p class="mt-4 text-lg text-gray-600">We'd love to hear from you! Please fill out the form below to get in touch.</p>
          </div>
      </div>
  </div>

  {{-- Contact Form --}}
  <section class="py-12">
      <div class="container mx-auto px-4">
          <div class="max-w-lg mx-auto bg-white p-8 rounded-lg border border-gray-200 shadow-md">
              <h2 class="text-3xl font-bold mb-6 text-center">Get in Touch</h2>

              {{-- Validation Errors --}}
              @if (session('success'))
                  <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
                      {{ session('success') }}
                  </div>
              @endif

              @if ($errors->any())
                  <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-lg">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form action="/contact" method="POST">
                  @csrf

                  <div class="mb-4">
                      <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Name</label>
                      <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Your Name">
                  </div>

                  <div class="mb-4">
                      <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                      <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Your Email">
                  </div>

                  <div class="mb-4">
                      <label for="subject" class="block text-gray-700 text-sm font-medium mb-2">Subject</label>
                      <input type="text" id="subject" name="subject" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Subject">
                  </div>

                  <div class="mb-4">
                      <label for="message" class="block text-gray-700 text-sm font-medium mb-2">Message</label>
                      <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Your Message"></textarea>
                  </div>

                  <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Send Message</button>
              </form>
          </div>
      </div>
  </section>
</x-layout>
