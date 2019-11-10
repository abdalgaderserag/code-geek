<?php

namespace App\Http\Controllers\Api;

use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            } else
                return response()->json('unknown encode', 800);

            $path = 'storage/' . $file_type . '/' . Uuid::uuid() . '.' . $type;

        } else
            return response()->json('unknown file type', 800);

        return response()->json(['path' => $path, 'type' => $file_type], 200);
    }
}
