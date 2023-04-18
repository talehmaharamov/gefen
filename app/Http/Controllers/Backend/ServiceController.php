<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Backend\Service;
use App\Models\Backend\ServiceTranslation;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.services.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.services.create');
    }

    public function store(ServiceRequest $request)
    {
        try {
            $service = new Service();
            $service->photo = upload('services', $request->file('photo'));
            $service->alt = $request->alt;
            $service->status = 1;
            $service->save();
            foreach (active_langs() as $lang) {
                $serviceTranslation = new ServiceTranslation();
                $serviceTranslation->service_id = $service->id;
                $serviceTranslation->locale = $lang->code;
                $serviceTranslation->name = $request->name[$lang->code];
                $serviceTranslation->save();
            }
            alert()->success(__('messages.success'));
            return redirect(route('backend.services.index'));
        } catch (Exception $e) {
            alert()->error(__('messages.error'));
            return redirect(route('backend.services.index'));
        }
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.services.edit', get_defined_vars());
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        try {
            DB::transaction(function () use ($request, $service) {
                if ($request->hasFile('photo')) {
                    if (file_exists($service->photo)) {
                        unlink(public_path($service->photo));
                    }
                    $service->photo = upload('services', $request->file('photo'));
                }
                $service->alt = $request->alt;
                foreach (active_langs() as $lang) {
                    $service->translate($lang->code)->name = $request->name[$lang->code];
                }
                $service->save();
            });
            alert()->success(__('messages.success'));
            return redirect(route('backend.services.index'));
        } catch (\Exception $e) {
            alert()->error(__('messages.error'));
            return redirect(route('backend.services.index'));
        }
    }

    public function status($id)
    {
        $status = Service::where('id', $id)->value('status');
        if ($status == 1) {
            Service::where('id', $id)->update(['status' => 0]);
        } else {
            Service::where('id', $id)->update(['status' => 1]);
        }
        alert()->success(__('messages.success'));
        return redirect()->route('backend.services.index', $id);
    }

    public function delete($id)
    {
        try {
            $service = Service::find($id);
            if (file_exists($service->photo)) {
                unlink(public_path($service->photo));
            }
            $service->delete();
            alert()->success(__('messages.success'));
            return redirect(route('backend.services.index'));
        } catch (Exception $e) {
            alert()->error(__('messages.error'));
            return redirect(route('backend.services.index'));
        }
    }
}
