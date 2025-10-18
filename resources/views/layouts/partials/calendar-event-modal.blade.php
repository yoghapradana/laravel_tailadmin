<div
  class="fixed inset-0 items-center justify-center hidden p-5 overflow-y-auto modal z-99999"
  id="eventModal"
>
  <div
    class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"
  ></div>
  <div
    class="modal-dialog modal-dialog-scrollable modal-lg no-scrollbar relative flex w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11"
  >
    <!-- close btn -->
    <button
      class="modal-close-btn transition-color absolute right-5 top-5 z-999 flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300 sm:h-11 sm:w-11"
    >
      <svg
        class="fill-current"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
          fill=""
        />
      </svg>
    </button>

    <div
      class="flex flex-col px-2 overflow-y-auto modal-content custom-scrollbar"
    >
      <div class="modal-header">
        <h5
          class="mb-2 font-semibold text-gray-800 modal-title text-theme-xl dark:text-white/90 lg:text-2xl"
          id="eventModalLabel"
        >
          Add / Edit Event
        </h5>
        <p class="text-sm text-gray-500 dark:text-gray-400">
          Plan your next big moment: schedule or edit an event to stay on track
        </p>
      </div>
      <div class="mt-8 modal-body">
        <div>
          <div>
            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Event Title
              </label>
              <input
                id="event-title"
                type="text"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>
          </div>
          <div class="mt-6">
            <div>
              <label
                class="block mb-4 text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Event Color
              </label>
            </div>
            <div class="flex flex-wrap items-center gap-4 sm:gap-5">
              <div class="n-chk">
                <div class="form-check form-check-primary form-check-inline">
                  <label
                    class="flex items-center text-sm text-gray-700 form-check-label dark:text-gray-400"
                    for="modalDanger"
                  >
                    <span class="relative">
                      <input
                        class="sr-only form-check-input"
                        type="radio"
                        name="event-level"
                        value="Danger"
                        id="modalDanger"
                      />
                      <span
                        class="flex items-center justify-center w-5 h-5 mr-2 border border-gray-300 rounded-full box dark:border-gray-700"
                      >
                        <span
                          class="w-2 h-2 bg-white rounded-full dark:bg-transparent"
                        >
                        </span>
                      </span>
                    </span>
                    Danger
                  </label>
                </div>
              </div>
              <div class="n-chk">
                <div class="form-check form-check-warning form-check-inline">
                  <label
                    class="flex items-center text-sm text-gray-700 form-check-label dark:text-gray-400"
                    for="modalSuccess"
                  >
                    <span class="relative">
                      <input
                        class="sr-only form-check-input"
                        type="radio"
                        name="event-level"
                        value="Success"
                        id="modalSuccess"
                      />
                      <span
                        class="flex items-center justify-center w-5 h-5 mr-2 border border-gray-300 rounded-full box dark:border-gray-700"
                      >
                        <span
                          class="w-2 h-2 bg-white rounded-full dark:bg-transparent"
                        >
                        </span>
                      </span>
                    </span>
                    Success
                  </label>
                </div>
              </div>
              <div class="n-chk">
                <div class="form-check form-check-success form-check-inline">
                  <label
                    class="flex items-center text-sm text-gray-700 form-check-label dark:text-gray-400"
                    for="modalPrimary"
                  >
                    <span class="relative">
                      <input
                        class="sr-only form-check-input"
                        type="radio"
                        name="event-level"
                        value="Primary"
                        id="modalPrimary"
                      />
                      <span
                        class="flex items-center justify-center w-5 h-5 mr-2 border border-gray-300 rounded-full box dark:border-gray-700"
                      >
                        <span
                          class="w-2 h-2 bg-white rounded-full dark:bg-transparent"
                        >
                        </span>
                      </span>
                    </span>
                    Primary
                  </label>
                </div>
              </div>
              <div class="n-chk">
                <div class="form-check form-check-danger form-check-inline">
                  <label
                    class="flex items-center text-sm text-gray-700 form-check-label dark:text-gray-400"
                    for="modalWarning"
                  >
                    <span class="relative">
                      <input
                        class="sr-only form-check-input"
                        type="radio"
                        name="event-level"
                        value="Warning"
                        id="modalWarning"
                      />
                      <span
                        class="flex items-center justify-center w-5 h-5 mr-2 border border-gray-300 rounded-full box dark:border-gray-700"
                      >
                        <span
                          class="w-2 h-2 bg-white rounded-full dark:bg-transparent"
                        >
                        </span>
                      </span>
                    </span>
                    Warning
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-6">
            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Enter Start Date
              </label>
              @include('layouts.partials.datepicker')
            </div>
          </div>

          <div class="mt-6">
            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Enter End Date
              </label>
              @include('layouts.partials.datepicker')
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-3 mt-6 modal-footer sm:justify-end">
        <button
          type="button"
          class="btn modal-close-btn bg-danger-subtle text-danger flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto"
          data-bs-dismiss="modal"
        >
          Close
        </button>
        <button
          type="button"
          class="btn btn-success btn-update-event flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto"
          data-fc-event-public-id=""
        >
          Update changes
        </button>
        <button
          type="button"
          class="btn btn-primary btn-add-event flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto"
        >
          Add Event
        </button>
      </div>
    </div>
  </div>
</div>

<!-- <div
  class="modal fixed left-0 top-0 z-99999 hidden min-h-screen w-full justify-center overflow-y-auto overflow-x-hidden bg-gray-400/50 px-4 py-4 backdrop-blur-[32px] lg:py-[120px]"
  id="eventModal"
>
</div> -->
