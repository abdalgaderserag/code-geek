<?php

namespace App\Http\Controllers\Files;

use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        list($type, $data) = explode(';', $request->file);
        list($code, $data) = explode(',', $data);
        list($file_type, $type) = explode(':', $type);
        list($file_type, $type) = explode('/', $type);

        if ($file_type == "video") {

            if ($code == "base64") {
                $data = base64_decode($data);
            } else {
                return response()->json('unknown encode', 800);
            }

            $path = $file_type . '/' . Uuid::uuid() . '.' . $type;

        } else {

            return response()->json('unknown file type', 800);
        }

        Storage::disk('local')->put($path, $data);

        return response()->json(['path' => $path], 200);
    }
}
