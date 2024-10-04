<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function downloadDiplomaBachiller(): BinaryFileResponse
    {
        $filePath = public_path('pdfs/Diploma_bachiller.pdf');
        return response()->download($filePath, 'Diploma_bachiller.pdf');
    }

    public function downloadActaBachiller(): BinaryFileResponse
    {
        $filePath = public_path('pdfs/Acta_bachiller.pdf');
        return response()->download($filePath, 'Acta_bachiller.pdf');
    }

    public function downloadDiplomaTecnico(): BinaryFileResponse
    {
        $filePath = public_path('pdfs/Diploma_tecnico.pdf');
        return response()->download($filePath, 'Diploma_tecnico.pdf');
    }

    public function downloadActaTecnico(): BinaryFileResponse
    {
        $filePath = public_path('pdfs/Acta_tecnico.pdf');
        return response()->download($filePath, 'Acta_tecnico.pdf');
    }

    public function downloadCertificadoAprendiz(): BinaryFileResponse
    {
        $filePath = public_path('pdfs/Certificado_aprendiz.pdf');
        return response()->download($filePath, 'Certificado_aprendiz.pdf');
    }

    public function downloadHv(): BinaryFileResponse
    {
        $filePath = public_path('pdfs/Hv_jose_angel_videz_diaz.pdf');
        return response()->download($filePath, 'Hv_jose_angel_videz_diaz.pdf');
    }

    public function mostrarPDF()
    {
        $pathToFile = public_path('pdfs/Hv_jose_angel_videz_diaz.pdf');
        return response()->file($pathToFile);
    }
}

