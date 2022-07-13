<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; {{ $item->food->name }} by {{ $item->user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                    <div class="w-full md:w-1/6 px-4 mb-4 md:mb-0">
                        <img src="{{ $item->food->picturePath }}" alt="" class="w-full rounded">
                    </div>
                    <br><br>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-6 py-4">Product Name</th>
                                <th class="border px-6 py-4">Ukuran</th>
                                <th class="border px-6 py-4">Harga</th>
                                <th class="border px-6 py-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-6 py-4 ">{{ $item->food->name }}</td>
                                <td class="border px-6 py-4">{{ $item->food->ukuran }}</td>
                                <td class="border px-6 py-4">{{ number_format($item->total) }}</td>
                                <td class="border px-6 py-4">{{ $item->status }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <br><br>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-6 py-4">Nama</th>
                                <th class="border px-6 py-4">Email</th>
                                <th class="border px-6 py-4">City</th>
                                <th class="border px-6 py-4">Address</th>
                                <th class="border px-6 py-4">House Number</th>
                                <th class="border px-6 py-4">Phone Number</th>
                                <th class="border px-6 py-4">Payment URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-6 py-4 ">{{ $item->user->name }}</td>
                                <td class="border px-6 py-4">{{ $item->user->email }}</td>
                                <td class="border px-6 py-4">{{ $item->user->city }}</td>
                                <td class="border px-6 py-4">{{ $item->user->address }}</td>
                                <td class="border px-6 py-4">{{ $item->user->houseNumber }}</td>
                                <td class="border px-6 py-4">{{ $item->user->phoneNumber }}</td>
                                <td class="border px-6 py-4">{{ $item->payment_url }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <br><br>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-6 py-4">Change Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-6 py-4 ">
                                    <a style="background-color: blue;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'belum_dibayar']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                        Belum Dibayar
                                    </a>
                                </td>
                                <td class="border px-6 py-4">
                                    <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_dibayar']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                        Sudah Dibayar
                                    </a>
                                </td>
                                <td class="border px-6 py-4">
                                    <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sedang_perjalanan']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                        Sedang Perjalanan
                                    </a>
                                </td>
                                <td class="border px-6 py-4">
                                    <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_tiba']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                        sudah Tiba
                                    </a>
                                </td>
                                <td class="border px-6 py-4">
                                    <a style="background-color: red;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                        Cancelled
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>