<div id="printableArea" class="grid grid-cols-1 bg-gray-100 rounded-lg" style="padding: 0 30px">
    <div class="card px-5 py-12 sm:px-18">
        <div class="flex flex-col justify-between sm:flex-row">
            <div class="text-center sm:text-left">
                <a href="#" class="flex justify-center w-full sm:block">
                    <img src="{{ asset('img/core-img/logo.png') }}" width="100px" alt="" />
                </a>
                <div class="space-y-1 pt-2">
                    <p>Zaouiet Sidi Abdelmalek, Kalaat M'Gouna</p>
                    <p>kasbahroseville@gmail.com</p>
                    <p>+212 698 909 638</p>
                </div>
            </div>
            <div class="mt-4 text-center sm:m-0 sm:text-right">
                <h2 class="text-2xl font-semibold uppercase text-primary dark:text-accent-light">
                    invoice
                </h2>
                <div class="space-y-1 pt-2">
                    <p>Invoice #: <span class="font-semibold">{{ $payment->id }}</span></p>
                    <p>
                        Created: <span class="font-semibold">{{ $payment->created_at->format('F j, Y') }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
        <div class="flex flex-col justify-between sm:flex-row">
            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                    Invoiced To:
                </p>
                <div class="space-y-1 pt-2">
                    <p class="font-semibold">{{ $payment->reservation->user->name }}</p>
                    <p>{{ $payment->reservation->user->email }}</p>
                    <p>{{ $payment->reservation->user->phone }}</p>
                </div>
            </div>
            <div class="mt-4 text-center sm:m-0 sm:text-right">
                <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                    Payment Method:
                </p>
                <div class="space-y-1 pt-2">
                    <p class="font-medium">{{ $payment->payment_methodes->first()->type }}</p>
                </div>
            </div>
        </div>
        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
            <table class="is-zebra w-full text-left">
                <thead>
                    <tr>
                        <th
                            class="whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            #
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-3 py-3 font-semibold text-center uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Room
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Room Type
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Price
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            CheckIn
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            CheckOut
                        </th>
                        <th
                            class="whitespace-nowrap rounded-r-lg bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Guests
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="whitespace-nowrap text-center rounded-l-lg px-4 py-3 sm:px-5">
                            1
                        </td>
                        <td class="w-2/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                            {{ $payment->reservation->room->name }}
                        </td>
                        <td class="w-2/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                            {{ $payment->reservation->room->type->type }}
                        </td>
                        <td class="w-2/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                            ${{ $payment->reservation->room->price }}
                        </td>
                        <td class="w-2/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-center font-semibold sm:px-5">
                            {{ $payment->reservation->checkIn }}
                        </td>
                        <td class="w-2/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-center font-semibold sm:px-5">
                            {{ $payment->reservation->checkOut }}
                        </td>
                        <td class="w-2/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-center font-semibold sm:px-5">
                            {{ $payment->reservation->total_adults + $payment->reservation->total_children }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

        <div class="flex flex-col justify-end sm:flex-row">
            <div class="mt-4 text-center sm:m-0 sm:text-right">
                <p class="text-lg font-semibold text-pink-600">
                    Grand Total: <span class="font-medium">${{ $payment->totalAmount }}</span>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('printButton').onclick = function() {
        var printContents = document.getElementById('printableArea').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
