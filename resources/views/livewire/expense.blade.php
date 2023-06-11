@include('transaction.list-transaction',['expenses'=>$expenses])


{{--<div class="lg:w-1/2 max-w-md mx-auto">--}}
{{--    <div class="max-w-md w-full mx-4 bg-white p-8 rounded shadow-lg mt-20">--}}
{{--        <h2 class="text-2xl font-bold mb-4">Create Item</h2>--}}

{{--            <div class="mb-4">--}}
{{--                <select wire:model="groupId" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4">--}}
{{--                    @foreach ($itemsGroups as $itemGroup)--}}
{{--                        <option value="{{$itemGroup->id}}">{{$itemGroup->items_group}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                <select--}}
{{--                    wire:model="itemId"--}}
{{--                    name="Type"--}}
{{--                    id="Type"--}}
{{--                    class="`w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4"--}}
{{--                >--}}
{{--                    @if ($groupId)--}}
{{--                        @foreach ($itemsGroups->find($groupId)->items as $item)--}}
{{--                            <option value="{{ $item->id }}">{{ $item->item_name }}</option>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </select>--}}
{{--                <input wire:model="itemName" type="text" placeholder="Item Name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4">--}}
{{--                <button--}}
{{--                    wire:click.prevent="createItem()"--}}
{{--                    class="bg-white hover:bg-gray-100 text-black font-bold py-2 px-4 border border-gray-300 rounded focus:outline-none">--}}
{{--                    Save--}}
{{--                </button>--}}
{{--            </div>--}}

{{--    </div>--}}
{{--</div>--}}
