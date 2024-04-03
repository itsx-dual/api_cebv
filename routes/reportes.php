<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Reportes\Reporte;

/*
|--------------------------------------------------------------------------
| Rutas de reportes
|--------------------------------------------------------------------------
|
| Aqui es donde iran las rutas que esten relacionadas a la generacion de
| reportes en formato PDF.
|
*/

Route::middleware('auth:sanctum')->group(function() {

    Route::get("/informe_de_inicio/{id}", function ($id) {
        $reporte = Reporte::findOrFail($id);
        return Pdf::loadView("reportes.informe_de_inicio", ["reporte" => $reporte])->stream($reporte->folio.".pdf");
    });

    Route::get("/ficha_de_datos", function () {
        return Pdf::loadView("reportes.ficha_de_datos")->stream();
    });
});