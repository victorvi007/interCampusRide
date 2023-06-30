<div class="hidden" id="cardcarParticulars">

    <div  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full flex justify-center  items-center bg-dark/[.7] ">
        <div class="relative w-full max-w-2xl max-h-full border ">
            <!-- Modal content -->
            <div class="relative bg-light rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-dark dark:text-white">
                        CAR
                    </h3>
                    <button type="button" class="closeBtn text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-2 space-y-6">
                  <a href="{{ $ride->plate_number }}">

                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 h-96 rounded" style="background-image: url('assets/images/background.jpg');">

                      </p>
                  </a>
                </div>
                <!-- Modal footer -->

            </div>
        </div>
    </div>
</div>
