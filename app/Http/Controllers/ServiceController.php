<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\DoctorService;

use App\Http\Resources\ServiceResource;
use App\Http\Resources\ServiceDoctorResource;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function getServices()
    {
        return ServiceResource::collection(Service::query()->paginate(10));
    }

    public function getDoctorsListForCurrentService($serviceId)
    {
        return ServiceDoctorResource::collection(
            DoctorService::query()
                ->where('service_id', '=', $serviceId)
                ->with(['service', 'doctor.user'])
                ->get()
        );

    }
}
