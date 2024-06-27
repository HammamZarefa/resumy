<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySubscriperRequest;
use App\Http\Requests\StoreSubscriperRequest;
use App\Http\Requests\UpdateSubscriperRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscriperController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subscriper_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.subscripers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('subscriper_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.subscripers.create');
    }

    public function store(StoreSubscriperRequest $request)
    {
        $subscriper = Subscriper::create($request->all());

        return redirect()->route('admin.subscripers.index');
    }

    public function edit(Subscriper $subscriper)
    {
        abort_if(Gate::denies('subscriper_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.subscripers.edit', compact('subscriper'));
    }

    public function update(UpdateSubscriperRequest $request, Subscriper $subscriper)
    {
        $subscriper->update($request->all());

        return redirect()->route('admin.subscripers.index');
    }

    public function show(Subscriper $subscriper)
    {
        abort_if(Gate::denies('subscriper_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.subscripers.show', compact('subscriper'));
    }

    public function destroy(Subscriper $subscriper)
    {
        abort_if(Gate::denies('subscriper_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscriper->delete();

        return back();
    }

    public function massDestroy(MassDestroySubscriperRequest $request)
    {
        $subscripers = Subscriper::find(request('ids'));

        foreach ($subscripers as $subscriper) {
            $subscriper->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
