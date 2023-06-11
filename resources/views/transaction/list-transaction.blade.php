<section class="container mx-auto p-6 font-mono">
    <!-- Success Notification -->
    @if (session()->has('success'))
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M0 10a10 10 0 1120 0A10 10 0 010 10zm11-5a1 1 0 00-2 0v5H6a1 1 0 100 2h3v3a1 1 0 102 0v-3h3a1 1 0 100-2h-3V5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium">Success</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Error Notification -->
    @if (session()->has('error'))
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-8a1 1 0 01-2 0V7a1 1 0 012 0v3zm0 4a1 1 0 110 2 1 1 0 010-2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium">Error</p>
                        <p class="text-sm">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
                </thead>
                <tbody class="bg-white">

                @if (auth()->user()->role_id == 5)
                    @if($isUpdating)
                        @include('livewire.expense.update',['itemsGroups' => $itemsGroups])
                    @else
                        @include('livewire.expense.create',['itemsGroups' => $itemsGroups])
                    @endif

                @endif

                @foreach($expenses as $expense)


                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                                <div>
                                    @if ($expense->items_group_id)
                                        <p class="font-semibold text-black">{{$expense->item->item_name}}</p>
                                        <p class="text-xs text-gray-600">{{$expense->itemGroup->items_group}}</p>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-md font-semibold border">{{$expense->expense}}</td>
                        <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Expense </span>
                        </td>
                        <td class="px-4 py-3 text-sm border">
                            <button
                                wire:click="editExpense({{ $expense->id }})"
                                class="text-gray-500 hover:text-gray-700" title="Update">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                </svg>
                            </button>
                            <button
                                x-data="{ confirmDelete: false }"
                                x-on:click="confirmDelete = confirm('Are you sure you want to delete this item?'); if (confirmDelete) { window.livewire.emit('destroy', {{ $expense->id }}) }"
                                class="text-gray-500 hover:text-gray-700" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                </svg>
                            </button>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>
