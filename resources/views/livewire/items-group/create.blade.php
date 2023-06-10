<div class="lg:w-1/2 max-w-md mx-auto">
    <div class="max-w-md w-full mx-4 bg-white p-8 rounded shadow-lg mt-20">
        <h2 class="text-2xl font-bold mb-4">Create Item-Group</h2>
        @if (session()->has('success'))
            <div class="bg-green-200 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-200 text-red-700 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form>
            <div class="mb-4">
                <label for="itemGroup" class="block text-gray-700 font-bold mb-2">Item Group</label>
                <input type="text" id="itemGroup" name="itemGroup" wire:model="items_group"
                       class="border border-gray-400 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-500"/>
            </div>
            <button type="submit" wire:click.prevent="create()"
                    class="bg-white hover:bg-gray-100 text-black font-bold py-2 px-4 border border-gray-300 rounded focus:outline-none">
                Submit
            </button>
        </form>
    </div>
</div>
