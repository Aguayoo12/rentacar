<div>
    @if($isOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-4 rounded-lg shadow-lg w-1/2">
                <button wire:click="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
                
            </div>
        </div>
    @endif
</div>