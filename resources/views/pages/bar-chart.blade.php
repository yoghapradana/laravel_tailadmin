@section('title', 'Bar Chart | TailAdmin - Tailwind CSS Admin Dashboard Template')
@extends('layouts.app')
@section('alpineData')
  x-data="{ page: 'barChart', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop':
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
    <div x-data="{ pageName: 'Bar Chart'}">
      @include('layouts.partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-6">
      <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="px-6 py-5">
          <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Bar Chart 1
          </h3>
        </div>
        <div class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6">
          <!-- ====== Bar Chart One Start -->
          <div class="max-w-full overflow-x-auto custom-scrollbar">
            <div id="chartOne" class="min-w-[1000px]"></div>
          </div>
          <!-- ====== Bar Chart One End -->
        </div>
      </div>
    </div>
  </div>
@endsection