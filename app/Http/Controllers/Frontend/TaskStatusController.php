<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTaskStatusRequest;
use App\Http\Requests\StoreTaskStatusRequest;
use App\Http\Requests\UpdateTaskStatusRequest;
use App\Models\TaskStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskStatuses = TaskStatus::with(['team'])->get();

        return view('frontend.taskStatuses.index', compact('taskStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.taskStatuses.create');
    }

    public function store(StoreTaskStatusRequest $request)
    {
        $taskStatus = TaskStatus::create($request->all());

        return redirect()->route('frontend.task-statuses.index');
    }

    public function edit(TaskStatus $taskStatus)
    {
        abort_if(Gate::denies('task_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskStatus->load('team');

        return view('frontend.taskStatuses.edit', compact('taskStatus'));
    }

    public function update(UpdateTaskStatusRequest $request, TaskStatus $taskStatus)
    {
        $taskStatus->update($request->all());

        return redirect()->route('frontend.task-statuses.index');
    }

    public function show(TaskStatus $taskStatus)
    {
        abort_if(Gate::denies('task_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskStatus->load('team');

        return view('frontend.taskStatuses.show', compact('taskStatus'));
    }

    public function destroy(TaskStatus $taskStatus)
    {
        abort_if(Gate::denies('task_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyTaskStatusRequest $request)
    {
        $taskStatuses = TaskStatus::find(request('ids'));

        foreach ($taskStatuses as $taskStatus) {
            $taskStatus->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
