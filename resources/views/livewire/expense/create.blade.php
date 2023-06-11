<tr class="text-gray-700">
    <td class="px-4 py-3 border">
        <div class="flex flex-col items-start text-sm">
            <div>
                <select
                    wire:model="groupId"
                    name="Type"
                    id="Type"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700  sm:text-sm"
                >
                    <option></option>
                    @foreach ($itemsGroups as $itemGroup)
                        <option value="{{ $itemGroup->id }}">{{ $itemGroup->items_group }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select
                    wire:model="itemId"
                    name="Type"
                    id="Type"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700  sm:text-sm"
                >
                    <option></option>
                    @if ($groupId)
                        @foreach ($itemsGroups->find($groupId)->items as $item)
                            <option value="{{ $item->id }}">{{ $item->item_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </td>
    <td class="px-4 py-3 text-md border">
        <div>
            <input
                wire:model="expense"
                type="number"
                id="Amount"
                placeholder="Amount"
                class="rounded-md border-gray-200 pe-10 sm:w-44 lg:w-auto shadow-sm sm:text-sm "
            />
        </div>
    </td>
    <td class="px-4 py-3 text-xs border">
        <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Expense </span>
    </td>
    <td class="px-4 py-3">
        <button
            wire:click.prevent="createExpense({{ Auth::id() }})"
            class="text-gray-500 hover:text-gray-700 py-2 px-4 bg-white font-semibold border border-gray-300 hover:bg-gray-50 rounded-md">Save</button>
    </td>
</tr>
