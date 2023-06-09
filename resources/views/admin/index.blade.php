@extends('layouts.admin')

@section('title', $title)

@section('content')
<div class="min-h-full">



  <main>
    <div class="mx-5 mt-2">




    </div>
    <div class=" mx-auto py-2 sm:px-4 lg:px-14">
      <!-- stats -->


      <x-stats />
      <!-- lists -->
      <!-- <button onclick="Livewire.emit('openModal', 'feedback-modal')">Open Modal</button> -->
      <dl class="mt-5 border border-gray-300 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 lg:grid-cols-3 md:grid-cols-2 md:divide-y-0 md:divide-x">
        <livewire:admin.search name="artist" />
        <livewire:admin.search name="band" />
        <livewire:admin.search name="genre" />


      </dl>
      <div>

      </div>


      <!-- /End replace -->
    </div>
  </main>
</div>

@endsection