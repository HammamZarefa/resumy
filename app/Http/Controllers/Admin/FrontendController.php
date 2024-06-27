<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFrontendRequest;
use App\Http\Requests\StoreFrontendRequest;
use App\Http\Requests\UpdateFrontendRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontendController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('frontend_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.frontends.index');
    }

    public function create()
    {
        abort_if(Gate::denies('frontend_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.frontends.create');
    }

    public function store(StoreFrontendRequest $request)
    {
        $frontend = Frontend::create($request->all());

        return redirect()->route('admin.frontends.index');
    }

    public function edit(Frontend $frontend)
    {
        abort_if(Gate::denies('frontend_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.frontends.edit', compact('frontend'));
    }

    public function update(UpdateFrontendRequest $request, Frontend $frontend)
    {
        $frontend->update($request->all());

        return redirect()->route('admin.frontends.index');
    }

    public function show(Frontend $frontend)
    {
        abort_if(Gate::denies('frontend_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.frontends.show', compact('frontend'));
    }

    public function destroy(Frontend $frontend)
    {
        abort_if(Gate::denies('frontend_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $frontend->delete();

        return back();
    }

    public function massDestroy(MassDestroyFrontendRequest $request)
    {
        $frontends = Frontend::find(request('ids'));

        foreach ($frontends as $frontend) {
            $frontend->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
