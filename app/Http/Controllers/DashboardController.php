<?php

namespace App\Http\Controllers;

use App\Data\FullPatientCaseDto;
use App\Data\ProfileDto;
use App\Data\UserDto;
use App\Enum\CaseType;
use App\Enum\Urgency;
use App\Models\Payment;
use App\Services\CaseService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        return Inertia::render('Dashboard', [
            'user' =>UserDto::fromModel($user),
        ]);
    }
}

