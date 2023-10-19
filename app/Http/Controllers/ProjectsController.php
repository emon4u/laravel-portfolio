<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view( 'projects', [
            'projects' => $this->geData()
        ] );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ): View
    {
        $getProjects = $this->geData();
        $getProject = collect( $getProjects )->firstWhere( 'id', $id );

        if ( $getProject ) {
            return view( 'project-details', [
                'project' => $getProject
            ] );
        } else {
            return abort( 404 );
        }
    }

    private function geData(): array
    {
        $jsonPath = storage_path( 'data/projects.json' );

        if ( file_exists( $jsonPath ) ) {
            $jsonData = file_get_contents( $jsonPath );
            return json_decode( $jsonData, true );
        }

        return [];
    }
}
