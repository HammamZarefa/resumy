<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyExtensionRequest;
use App\Http\Requests\StoreExtensionRequest;
use App\Http\Requests\UpdateExtensionRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExtensionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('extension_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.extensions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('extension_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.extensions.create');
    }

    public function store(StoreExtensionRequest $request)
    {
        $extension = Extension::create($request->all());

        return redirect()->route('admin.extensions.index');
    }

    public function edit(Extension $extension)
    {
        abort_if(Gate::denies('extension_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.extensions.edit', compact('extension'));
    }

    public function update(UpdateExtensionRequest $request, Extension $extension)
    {
        $extension->update($request->all());

        return redirect()->route('admin.extensions.index');
    }

    public function show(Extension $extension)
    {
        abort_if(Gate::denies('extension_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.extensions.show', compact('extension'));
    }

    public function destroy(Extension $extension)
    {
        abort_if(Gate::denies('extension_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $extension->delete();

        return back();
    }

    public function massDestroy(MassDestroyExtensionRequest $request)
    {
        $extensions = Extension::find(request('ids'));

        foreach ($extensions as $extension) {
            $extension->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
