<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $ukuran = $request->input('ukuran');
        $types = $request->input('types');

        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        $rate_from = $request->input('rate_from');
        $rate_to = $request->input('rate_to');

        if ($id) {
            $produk = Produk::find($id);

            if ($produk)
                return ResponseFormatter::success(
                    $produk,
                    'Data produk berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }

        $produk = Produk::query();

        if ($name)
            $produk->where('name', 'like', '%' . $name . '%');

        if ($ukuran)
            $produk->where('ukuran', 'like', '%' . $ukuran . '%');

        if ($types)
            $produk->where('types', 'like', '%' . $types . '%');

        if ($price_from)
            $produk->where('price', '>=', $price_from);

        if ($price_to)
            $produk->where('price', '<=', $price_to);

        if ($rate_from)
            $produk->where('rate', '>=', $rate_from);

        if ($rate_to)
            $produk->where('rate', '<=', $rate_to);

        return ResponseFormatter::success(
            $produk->paginate($limit),
            'Data list produk berhasil diambil'
        );
    }
}
