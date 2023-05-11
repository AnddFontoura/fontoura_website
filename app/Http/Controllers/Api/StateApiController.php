<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StateApiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api');
    }

    public function getStates(Request $request): JsonResponse
    {
        $this->validate($request, [
            'stateId' => 'nullable|integer|min:1',
            'stateName' => 'nullable|string|min:1|max:100',
            'stateShort' => 'nullable|string|min:1|max:3',
        ]);

        $filter = $request->only([
            'stateId',
            'stateName',
            'stateShort'
        ]);

        $states = State::select();

        if (isset($filter['stateId']) && !$filter['stateId']) {
            $states = $states->where('id', $filter['stateId']);
        }

        if (isset($filter['stateName']) && !$filter['stateName']) {
            $states = $states->where('name', 'like', $filter['stateName'] . '%');
        }

        if (isset($filter['stateShort']) && !$filter['stateShort']) {
            $states = $states->where('short', $filter['stateShort']);
        }

        $states = $states->get();

        return response()->json($states);
    }
}
