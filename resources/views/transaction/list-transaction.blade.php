<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div>
                                <p class="font-semibold text-black">Sufyan</p>
                                <p class="text-xs text-gray-600">Developer</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-ms font-semibold border">22</td>
                    <td class="px-4 py-3 text-xs border">
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Income </span>
                    </td>
                    <td class="px-4 py-3 text-sm border">6/4/2000</td>
                </tr>
                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div>
                                <p class="font-semibold text-black">Stevens</p>
                                <p class="text-xs text-gray-600">Programmer</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-md font-semibold border">27</td>
                    <td class="px-4 py-3 text-xs border">
                        <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Expense </span>
                    </td>
                    <td class="px-4 py-3 text-sm border">6/10/2020</td>
                </tr>


                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex flex-col items-start text-sm">
                            <div>
                                <select
                                    name="Type"
                                    id="Type"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700  sm:text-sm"
                                >
                                    <option value="">Type</option>
                                    <option value="JM">John Mayer</option>
                                    <option value="SRV">Stevie Ray Vaughn</option>
                                </select>
                            </div>
                            <div>
                                <select
                                    name="Type"
                                    id="Type"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700  sm:text-sm"
                                >
                                    <option value="">Type</option>
                                    <option value="JM">John Mayer</option>
                                    <option value="SRV">Stevie Ray Vaughn</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-md border">
                        <div>
                            <input
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
                    <td class="px-4 py-3 text-sm border">6/10/2020</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
