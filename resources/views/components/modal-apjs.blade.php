<div  x-show="open" class="modal fixed inset-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto pr-2 z-30" style="display:none;">
      <div  class="modal-dialog w-auto mx-auto my-10 relative z-40" 
            style="max-width: 500px;"
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
      >
          <div class="modal-content relative flex flex-col w-full outline-none bg-white border border-gray-600 rounded-md shadow-md">
              <button @click="open = false" class="absolute p-3 right-0 focus:outline-none">
                  <svg class="text-black hover:text-gray-700 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>

              <div class="modal-header p-4 border-b">
                  <h2>{!! isset($title) && $title ? $title : 'Título' !!}</h2>
              </div>

              <div class="modal-body p-4">
                  <p> {!! isset($content) && $content ? $content : '...' !!}</p>
              </div>

              <div class="modal-footer p-4 border-t">
                  <button class="p-3 rounded-md bg-yellow-600 hover:bg-yellow-800 text-white inline-flex justify-center focus:outline-none">Footer da modal</button>
              </div>
          </div>
      </div>
    <div @click="open = false" class="absolute inset-0 z-20 w-screen h-screen">
      <div class="bg-gray-800 opacity-75 absolute inset-0"></div>
    </div>
</div>

