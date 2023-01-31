<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Str;

/**
 * Represents the given resource data as JSON
 *
 * @param mixed $data
 * @param string $resource
 * @param int $code
 * @return JsonResponse
 */
function json(mixed $data, string $resource = null, int $code = 200):JsonResponse
{
    if($resource) {
        $data = new $resource($data);
    } else {
        if(!is_array($data) && !($data instanceof AnonymousResourceCollection)) {
            $data = [$data];
        }
    }

    return response()->json($data, $code);
}
