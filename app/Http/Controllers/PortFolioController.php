<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    public function index()
    {
        $user = User::where('is_admin', true)->latest()->first();

        $fullName = null;
        $addressLine = null;

        if ($user) {
            $fullName = trim(($user->first_name ?? '') . ' ' . ($user->last_name ?? '')) ?: $user->name;
            $socialEngagements = $user->activeSocialEngagements()->get();

            // derive first and last name separately for the view
            if (! empty($user->first_name) || ! empty($user->last_name)) {
                $firstName = $user->first_name ?? '';
                $lastName = $user->last_name ?? '';
            } else {
                // split full name into first and last parts
                $parts = preg_split('/\s+/', trim($user->name ?? ''), -1, PREG_SPLIT_NO_EMPTY);
                $firstName = $parts[0] ?? '';
                $lastName = count($parts) > 1 ? array_pop($parts) : '';
            }

            $addressParts = array_filter([
                $user->address1,
                $user->address2,
                $user->city,
                $user->state,
                $user->zip_code,
                $user->country,
            ]);

            $addressLine = implode(' · ', $addressParts);
        }

        return view('portfolio', [
            'user' => $user,
            'fullName' => $fullName,
            'addressLine' => $addressLine,
            'firstName' => $firstName ?? null,
            'lastName' => $lastName ?? null,
            'socialEngagements' => $socialEngagements ?? collect(),
        ]);
    }
}
