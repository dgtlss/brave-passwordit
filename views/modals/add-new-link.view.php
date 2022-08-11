<div class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="newPasswordModal">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 frosted-bg" id="pwModalBg">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6 animated fadeInUp">
      <div>
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100">
          <!-- Heroicon name: outline/check -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="mt-3 text-center sm:mt-5">
          <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Add a new password</h3>
          <div class="w-full mt-4">
            <input type="text" name="" id="newWebsiteAddressInput"
            class="w-full px-2 py-2 rounded-md ring-1 ring-gray-200 mb-2"
            placeholder="Website Address">

            <input type="text" name="" id="newWebsitePasswordInput"
            class="w-full px-2 py-2 rounded-md ring-1 ring-gray-200"
            placeholder="Website Password">
          </div>
        </div>
      </div>
      <div class="mt-5 sm:mt-6">
        <button type="button" 
        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
            Save
        </button>
      </div>
    </div>
  </div>
</div>