<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="flex md:flex-row flex-col gap-10 justify-center">
    <div class="bg-white md:w-1/4 w-full p-5 text-center rounded-lg border border-gray-500 shadow-xl flex flex-col">
      <h3 class="text-lg font-semibold">Belum Pernah Berkunjung?</h3>
      <p class="text-sm mb-5">Silahkan Isi Form terlebih Dahulu</p>
      <a href="/about" class="mt-auto bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg">Klik Disini</a>
    </div>
    <div class="bg-white md:w-1/4 w-full p-5 text-center rounded-lg border border-gray-500 shadow-xl flex flex-col">
      <h3 class="text-lg font-semibold">Sudah Pernah Berkunjung</h3>
      <a href="/about" class="mt-auto bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg">Klik Disini</a>
    </div>
  </div>
</x-layout>
