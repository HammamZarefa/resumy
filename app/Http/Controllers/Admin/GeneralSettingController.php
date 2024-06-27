<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGeneralSettingRequest;
use App\Http\Requests\StoreGeneralSettingRequest;
use App\Http\Requests\UpdateGeneralSettingRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GeneralSettingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('general_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.generalSettings.index');
    }

    public function create()
    {
        abort_if(Gate::denies('general_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.generalSettings.create');
    }

    public function store(StoreGeneralSettingRequest $request)
    {
        $generalSetting = GeneralSetting::create($request->all());

        return redirect()->route('admin.general-settings.index');
    }

    public function edit(GeneralSetting $generalSetting)
    {
        abort_if(Gate::denies('general_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.generalSettings.edit', compact('generalSetting'));
    }

    public function update(UpdateGeneralSettingRequest $request, GeneralSetting $generalSetting)
    {
        $generalSetting->update($request->all());

        return redirect()->route('admin.general-settings.index');
    }

    public function show(GeneralSetting $generalSetting)
    {
        abort_if(Gate::denies('general_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.generalSettings.show', compact('generalSetting'));
    }

    public function destroy(GeneralSetting $generalSetting)
    {
        abort_if(Gate::denies('general_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $generalSetting->delete();

        return back();
    }

    public function massDestroy(MassDestroyGeneralSettingRequest $request)
    {
        $generalSettings = GeneralSetting::find(request('ids'));

        foreach ($generalSettings as $generalSetting) {
            $generalSetting->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
