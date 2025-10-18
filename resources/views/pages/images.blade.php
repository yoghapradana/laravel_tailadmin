@section('title', 'Images | TailAdmin - Tailwind CSS Admin Dashboard Template')
@extends('layouts.app')
@section('alpineData')
  x-data="{ page: 'images', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop':
  false }"
  x-init="
  darkMode = JSON.parse(localStorage.getItem('darkMode'));
  $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark bg-gray-900': darkMode === true};
        // hide preloader after DOM and resources are ready
  window.onload = () => setTimeout(() => loaded = false, 400);"
@endsection
@section('content')
  <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: 'Images'}">
      @include('layouts.partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Responsive image
          </h3>
        </div>
        <div class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6">
          @include('layouts.partials.grid-image.image-01')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Image in 2 Grid
          </h3>
        </div>
        <div class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6">
          @include('layouts.partials.grid-image.image-02')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Image in 3 Grid
          </h3>
        </div>
        <div class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6">
          @include('layouts.partials.grid-image.image-03')
        </div>
      </div>
    </div>
  </div>
@endsection