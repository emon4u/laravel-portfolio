<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view( 'home', [
            'data' => $this->geData()
        ] );
    }

    private function geData(): array
    {
        $jsonPath = storage_path( 'data/home.json' );

        if ( file_exists( $jsonPath ) ) {
            $jsonData = file_get_contents( $jsonPath );
            return json_decode( $jsonData, true );
        }

        return [];
    }
}
