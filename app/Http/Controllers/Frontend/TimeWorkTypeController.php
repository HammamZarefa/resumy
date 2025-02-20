<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTimeWorkTypeRequest;
use App\Http\Requests\StoreTimeWorkTypeRequest;
use App\Http\Requests\UpdateTimeWorkTypeRequest;
use App\Models\TimeWorkType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimeWorkTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('time_work_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeWorkTypes = TimeWorkType::with(['team'])->get();

        return view('frontend.timeWorkTypes.index', compact('timeWorkTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('time_work_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.timeWorkTypes.create');
    }

    public function store(StoreTimeWorkTypeRequest $request)
    {
        $timeWorkType = TimeWorkType::create($request->all());

        return redirect()->route('frontend.time-work-types.index');
    }

    public function edit(TimeWorkType $timeWorkType)
    {
        abort_if(Gate::denies('time_work_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeWorkType->load('team');

        return view('frontend.timeWorkTypes.edit', compact('timeWorkType'));
    }

    public function update(UpdateTimeWorkTypeRequest $request, TimeWorkType $timeWorkType)
    {
        $timeWorkType->update($request->all());

        return redirect()->route('frontend.time-work-types.index');
    }

    public function show(TimeWorkType $timeWorkType)
    {
        abort_if(Gate::denies('time_work_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeWorkType->load('team');

        return view('frontend.timeWorkTypes.show', compact('timeWorkType'));
    }

    public function destroy(TimeWorkType $timeWorkType)
    {
        abort_if(Gate::denies('time_work_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeWorkType->delete();

        return back();
    }

    public function massDestroy(MassDestroyTimeWorkTypeRequest $request)
    {
        $timeWorkTypes = TimeWorkType::find(request('ids'));

        foreach ($timeWorkTypes as $timeWorkType) {
            $timeWorkType->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
