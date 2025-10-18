@section('title', 'Buttons | TailAdmin - Tailwind CSS Admin Dashboard Template')
@extends('layouts.app')
@section('alpineData')
  x-data="{ page: 'buttons', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop':
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
    <div x-data="{ pageName: 'Buttons'}">
      @include('layouts.partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Primary Button
          </h3>
        </div>
        <div class="border-t border-gray-100 px-6 py-6.5 dark:border-gray-800">
          @include('layouts.partials.buttons.button-01')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Primary Button with Left Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 px-6 py-6.5 dark:border-gray-800">
          @include('layouts.partials.buttons.button-02')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Primary Button with Right Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 px-6 py-6.5 dark:border-gray-800">
          @include('layouts.partials.buttons.button-03')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Secondary Button
          </h3>
        </div>
        <div class="border-t border-gray-100 px-6 py-6.5 dark:border-gray-800">
          @include('layouts.partials.buttons.button-04')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Secondary Button with Left Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 px-6 py-6.5 dark:border-gray-800">
          @include('layouts.partials.buttons.button-05')
        </div>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Secondary Button with Right Icon
          </h3>
        </div>
        <div class="border-t border-gray-100 px-6 py-6.5 dark:border-gray-800">
          @include('layouts.partials.buttons.button-06')
        </div>
      </div>
    </div>
  </div>
@endsection