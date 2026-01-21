<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $enviroment = with(env('APP_ENV'), fn($enviroment) => $enviroment === 'local' ? 'development' : $enviroment);

        abort_unless(
            in_array($enviroment, ['development', 'staging', 'production']),
            400,
            "Please make sure the enviroment is set to one of these values: 'local', 'development', 'staging', 'production'."
        );

        $path = public_path("client/{$enviroment}/index.html");

        abort_unless(
            file_exists($path),
            400,
            "Run 'npm run generate' in 'client' folder to generate static html files."
        );

        $html = file_get_contents($path);

        return $html;
    }
}
