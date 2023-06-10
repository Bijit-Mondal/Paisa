<div>
    <div class="flex flex-col lg:flex-row">
        @if($isUpdating)
            @include('livewire.items-group.update')
        @else
            @include('livewire.item.create',['itemGroups' => $itemGroups])
        @endif


        <div class="lg:w-1/2 max-w-md mx-auto">
            <div class="max-w-md w-full mx-4 bg-white p-8 rounded shadow-lg mt-20" x-data="{ openGroup: null }">

                @foreach ($itemGroups as $itemGroup)
                    <div class="border rounded">
                        <!-- item group header -->
                        <button class="w-full flex items-center justify-between p-4 focus:outline-none"
                                x-on:click="openGroup === {{$itemGroup->id}} ? openGroup = null : openGroup = {{$itemGroup->id}}">
                            <span>{{$itemGroup->items_group}}</span>
                            <svg class="w-4 h-4 transform transition-transform" :class="{'rotate-180': openGroup === {{$itemGroup->id}}}"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <!-- item group content -->
                        <div class="p-4" x-show="openGroup === {{$itemGroup->id}}" x-transition x-cloak>
                            <!-- Loop through items-group within the group -->
                            @foreach ($itemGroup->items as $item)
                                <div class="py-2">
                                    {{$item->item_name}}
                                    <div class="flex items-center justify-end space-x-2 m-2">
                                        <button class="text-gray-500 hover:text-gray-700" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                            </svg>
                                        </button>
                                        <button class="text-gray-500 hover:text-gray-700" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
