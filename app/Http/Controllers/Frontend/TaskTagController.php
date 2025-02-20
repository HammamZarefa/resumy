<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTaskTagRequest;
use App\Http\Requests\StoreTaskTagRequest;
use App\Http\Requests\UpdateTaskTagRequest;
use App\Models\TaskTag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskTagController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskTags = TaskTag::with(['team'])->get();

        return view('frontend.taskTags.index', compact('taskTags'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.taskTags.create');
    }

    public function store(StoreTaskTagRequest $request)
    {
        $taskTag = TaskTag::create($request->all());

        return redirect()->route('frontend.task-tags.index');
    }

    public function edit(TaskTag $taskTag)
    {
        abort_if(Gate::denies('task_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskTag->load('team');

        return view('frontend.taskTags.edit', compact('taskTag'));
    }

    public function update(UpdateTaskTagRequest $request, TaskTag $taskTag)
    {
        $taskTag->update($request->all());

        return redirect()->route('frontend.task-tags.index');
    }

    public function show(TaskTag $taskTag)
    {
        abort_if(Gate::denies('task_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskTag->load('team');

        return view('frontend.taskTags.show', compact('taskTag'));
    }

    public function destroy(TaskTag $taskTag)
    {
        abort_if(Gate::denies('task_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskTag->delete();

        return back();
    }

    public function massDestroy(MassDestroyTaskTagRequest $request)
    {
        $taskTags = TaskTag::find(request('ids'));

        foreach ($taskTags as $taskTag) {
            $taskTag->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
