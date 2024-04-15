<tbody id="reservationsList">
    @forelse ($reservations as $reservation)
        <div x-data="{ expanded: false }">
            <tr class="border-y border-transparent">
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $reservation->id }}</td>
                
                <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                    <button @click="expanded = !expanded"
                        class="btn size-8 rounded-full p-0 text-[#64748B] text-sm hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <i :class="expanded && '-rotate-180'"
                            class="fas fa-chevron-down text-sm transition-transform"></i>
                    </button>
                </td>
            </tr>
            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                <td colspan="100" class="p-0">
                    <div x-show="expanded" x-collapse>
                        <div class="px-4 pb-4 sm:px-5">
                            <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                                <table class="is-hoverable w-full text-left">
                                    <thead>
                                        <tr
                                            class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                            <th
                                                class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                Price
                                            </th>
                                            <th
                                                class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                created at
                                            </th>
                                            <th
                                                class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <div class="flex space-x-2">
                                                    <div class=" px-[8px] py-[3px] font-semibold">
                                                        ${{ $reservation->room->price }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                {{ $reservation->created_at->format('d M, Y') }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <button @click="expanded = false"
                                    class="btn mt-2 h-8 rounded text-[13px] text-[#364A62] px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                                    Hide
                                </button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </div>
    @empty
        <tr>
            <td colspan="9" class="text-center text-gray-400 py-4">No reservations found</td>
        </tr>
    @endforelse
</tbody>
