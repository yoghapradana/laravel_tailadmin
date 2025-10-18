@section('title', 'Calendar | TailAdmin - Tailwind CSS Admin Dashboard Template')
@extends('layouts.app')
@section('alpineData')
  x-data="{ page: 'calendar', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop':
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
    <div x-data="{ pageName: 'Calendar'}">
      @include('layouts.partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
      <div id="calendar" class="min-h-screen"></div>
    </div>
  </div>
@endsection
@push('modals')
  <!-- BEGIN MODAL -->
  @include('layouts.partials.calendar-event-modal')
  <!-- END MODAL -->
@endpush