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

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-8 lg:px-10">
                            <div class="bg-white">
                                <table class="table-auto w-full">
                                    <thead>
                                        <tr>
                                            <th class="border px-6 py-4">Nama Produk</th>
                                            <th class="border px-4 py-2">Ukuran</th>
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
                                            <th class="border px-6 py-4">Kota</th>
                                            <th class="border px-6 py-4">Alamat</th>
                                            <th class="border px-6 py-4">No Rumah</th>
                                            <th class="border px-6 py-4">No Telepon</th>
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
                                        </tr>
                                    </tbody>
                                </table>

                                <br><br>

                                <div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
                                    <div class="flex flex-wrap mb-3">
                                        <div class="w-5/6">
                                            <div class="text-sm">Payment URL</div>
                                            <div class="text-lg">
                                                <a href="{{ $item->payment_url }}">{{ $item->payment_url }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="w-1/6">
                                        <div class="text-sm mb-1">Change Status</div>
                                        <br>
                                        <!-- <a style="background-color: blue;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'ON_DELIVERY']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    On Delivery
                                </a>
                                <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'DELIVERED']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    Delivered
                                </a>
                                <a style="background-color: red;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    Cancelled
                                </a> -->

                                        <a style="background-color: blue;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'belum_dibayar']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                            Belum Dibayar
                                        </a>
                                        <br>
                                        <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_dibayar']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                            Sudah Dibayar
                                        </a>
                                        <br>
                                        <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sedang_perjalanan']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                            Sedang Perjalanan
                                        </a>
                                        <br>
                                        <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_tiba']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                            sudah Tiba
                                        </a>
                                        <br>
                                        <a style="background-color: red;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                            Cancelled
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>