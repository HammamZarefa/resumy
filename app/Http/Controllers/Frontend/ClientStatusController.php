<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClientStatusRequest;
use App\Http\Requests\StoreClientStatusRequest;
use App\Http\Requests\UpdateClientStatusRequest;
use App\Models\ClientStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('client_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientStatuses = ClientStatus::with(['team'])->get();

        return view('frontend.clientStatuses.index', compact('clientStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('client_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.clientStatuses.create');
    }

    public function store(StoreClientStatusRequest $request)
    {
        $clientStatus = ClientStatus::create($request->all());

        return redirect()->route('frontend.client-statuses.index');
    }

    public function edit(ClientStatus $clientStatus)
    {
        abort_if(Gate::denies('client_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientStatus->load('team');

        return view('frontend.clientStatuses.edit', compact('clientStatus'));
    }

    public function update(UpdateClientStatusRequest $request, ClientStatus $clientStatus)
    {
        $clientStatus->update($request->all());

        return redirect()->route('frontend.client-statuses.index');
    }

    public function show(ClientStatus $clientStatus)
    {
        abort_if(Gate::denies('client_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientStatus->load('team');

        return view('frontend.clientStatuses.show', compact('clientStatus'));
    }

    public function destroy(ClientStatus $clientStatus)
    {
        abort_if(Gate::denies('client_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientStatusRequest $request)
    {
        $clientStatuses = ClientStatus::find(request('ids'));

        foreach ($clientStatuses as $clientStatus) {
            $clientStatus->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
