<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityApiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api');
    }

    public function getCities(Request $request): JsonResponse
    {

        $this->validate($request, [
            'cityId' => 'nullable|integer|min:1',
            'stateId' => 'nullable|integer|min:1',
            'cityName' => 'nullable|string|min:1|max:100',
            'cityPartialName' => 'nullable|string|min:1|max:3',
        ]);

        $filter = $request->only([
            'cityId',
            'stateId',
            'cityName',
            'cityPartialName'
        ]);

        $cities = City::select(
            'id',
            'state_id',
            'name',
            'ibge_code'
        );

        if (isset($filter['stateId']) && $filter['stateId']) {
            $cities = $cities->where('state_id', $filter['stateId']);
        }

        if (isset($filter['cityId']) && $filter['cityId']) {
            $cities = $cities->where('id', $filter['cityId']);
        }

        if (isset($filter['cityPartialName']) && $filter['cityPartialName']) {
            $cities = $cities->where('name', 'like', $filter['cityPartialName'] . '%');
        }

        if (isset($filter['cityName']) && $filter['cityName']) {
            $cities = $cities->where('name', $filter['cityName']);
        }

        $cities = $cities->get();

        return response()->json($cities);
    }
}
