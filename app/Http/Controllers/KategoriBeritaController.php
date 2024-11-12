<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class KategoriBeritaController extends Controller
{
   /**
    *    @OA\Get(
    *       path="/kategori-berita",
    *       tags={"Berita"},
    *       operationId="kategoriBerita",
    *       summary="Kategori Berita",
    *       description="Mengambil Data Kategori Berita",
    *       @OA\Response(
    *           response="200",
    *           description="Ok",
    *           @OA\JsonContent
    *           (example={
    *               "success": true,
    *               "message": "Berhasil mengambil Kategori Berita",
    *               "data": {
    *                   {
    *                   "id": "1",
    *                   "nama_kategori": "Pendidikan",
    *                  }
    *              }
    *          }),
    *      ),
    *  )
    */
    public function listKategoriBerita() {
        return 'true';
    }
}
