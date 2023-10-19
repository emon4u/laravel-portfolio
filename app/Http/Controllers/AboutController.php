<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(): View
    {
        $aboutData = $this->geData();

        return view( 'about', [
            'personalInfo' => $aboutData[ 'personalInfo' ],
            'experiences'  => $aboutData[ 'experiences' ],
            'educations'   => $aboutData[ 'educations' ],
            'statsInfo'    => $aboutData[ 'statsInfo' ],
        ] );
    }

    private function geData(): array
    {
        $jsonPath = storage_path( 'data/about.json' );

        if ( file_exists( $jsonPath ) ) {
            $jsonData = file_get_contents( $jsonPath );
            return json_decode( $jsonData, true );
        }

        return [];
    }
}
