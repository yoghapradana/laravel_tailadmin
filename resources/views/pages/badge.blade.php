@section('title', 'Badge | TailAdmin - Tailwind CSS Admin Dashboard Template')
@extends('layouts.app')
@section('alpineData')
  x-data="{ page: 'badge', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop':
  false }"
  x-init="
  darkMode = JSON.parse(localStorage.getItem('darkMode'));
  $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark bg-gray-900': darkMode === true};
  // hide preloader after DOM and resources are ready
  window.onload = () => setTimeout(() => loaded = false, 400);"
@endsection
@section('content')
  <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: 'Badge'}">
      @include('layouts.partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            With Light Background
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800 xl:p-10">
          @include('layouts.partials.badge.badge-01')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            With Solid Background
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800 xl:p-10">
          @include('layouts.partials.badge.badge-02')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Light Background with Left Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800 xl:p-10">
          @include('layouts.partials.badge.badge-03')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Solid Background with Left Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800 xl:p-10">
          @include('layouts.partials.badge.badge-04')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Light Background with Right Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800 xl:p-10">
          @include('layouts.partials.badge.badge-05')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Solid Background with Right Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 p-6 dark:border-gray-800 xl:p-10">
          @include('layouts.partials.badge.badge-06')
        </div>
      </div>
    </div>
  </div>
@endsection