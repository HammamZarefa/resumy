<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTransactionTypeRequest;
use App\Http\Requests\StoreTransactionTypeRequest;
use App\Http\Requests\UpdateTransactionTypeRequest;
use App\Models\TransactionType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TransactionTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('transaction_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transactionTypes = TransactionType::with(['team'])->get();

        return view('frontend.transactionTypes.index', compact('transactionTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('transaction_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.transactionTypes.create');
    }

    public function store(StoreTransactionTypeRequest $request)
    {
        $transactionType = TransactionType::create($request->all());

        return redirect()->route('frontend.transaction-types.index');
    }

    public function edit(TransactionType $transactionType)
    {
        abort_if(Gate::denies('transaction_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transactionType->load('team');

        return view('frontend.transactionTypes.edit', compact('transactionType'));
    }

    public function update(UpdateTransactionTypeRequest $request, TransactionType $transactionType)
    {
        $transactionType->update($request->all());

        return redirect()->route('frontend.transaction-types.index');
    }

    public function show(TransactionType $transactionType)
    {
        abort_if(Gate::denies('transaction_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transactionType->load('team');

        return view('frontend.transactionTypes.show', compact('transactionType'));
    }

    public function destroy(TransactionType $transactionType)
    {
        abort_if(Gate::denies('transaction_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transactionType->delete();

        return back();
    }

    public function massDestroy(MassDestroyTransactionTypeRequest $request)
    {
        $transactionTypes = TransactionType::find(request('ids'));

        foreach ($transactionTypes as $transactionType) {
            $transactionType->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
