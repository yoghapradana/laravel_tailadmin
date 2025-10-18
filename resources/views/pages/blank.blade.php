@section('title', 'Blank Page | TailAdmin - Tailwind CSS Admin Dashboard Template')
@extends('layouts.app')
@section('alpineData')
x-data="{ page: 'blank', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
    <div x-data="{ pageName: `Blank Page`}">
      @include('layouts.partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <div
      class="min-h-screen rounded-2xl border border-gray-200 bg-white px-5 py-7 dark:border-gray-800 dark:bg-white/[0.03] xl:px-10 xl:py-12">
      <div class="mx-auto w-full max-w-[630px] text-center">
        <h3 class="mb-4 text-theme-xl font-semibold text-gray-800 dark:text-white/90 sm:text-2xl">
          Card Title Here
        </h3>

        <p class="text-sm text-gray-500 dark:text-gray-400 sm:text-base">
          Start putting content on grids or panels, you can also use
          different combinations of grids.Please check out the
          dashboard and other pages
        </p>
      </div>
    </div>
  </div>

@endsection