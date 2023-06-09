<div class="lg:w-1/2 max-w-md mx-auto">
    <div class="max-w-md w-full mx-4 bg-white p-8 rounded shadow-lg mt-20">
        <h2 class="text-2xl font-bold mb-4">Update Item</h2>
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
                <select wire:model="groupId" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4">
                    @foreach ($itemsGroups as $itemGroup)
                        <option value="{{$itemGroup->id}}">{{$itemGroup->items_group}}</option>
                    @endforeach
                </select>
                <input hidden wire:model="itemId">
                <input wire:model="itemName" type="text" placeholder="Item Name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4">
                <button wire:click.prevent="updateItem()" class="bg-white hover:bg-gray-100 text-black font-bold py-2 px-4 border border-gray-300 rounded focus:outline-none">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
