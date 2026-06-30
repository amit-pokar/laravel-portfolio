<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialEngagementRequest;
use App\Models\SocialEngagement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialEngagementController extends Controller
{
    public function index(Request $request): View
    {
        $socialEngagements = $request->user()
            ->socialEngagements()
            ->orderBy('sort_order')
            ->orderBy('created_at')
            ->get();

        return view('admin.social-engagements.index', [
            'socialEngagements' => $socialEngagements,
            'engagement' => null,
        ]);
    }

    public function store(SocialEngagementRequest $request): RedirectResponse
    {
        $request->user()->socialEngagements()->create($request->validated());

        return redirect()->route('admin.social-engagements.index')->with('status', 'social-engagement-created');
    }

    public function edit(SocialEngagement $socialEngagement): View
    {
        if ($socialEngagement->user_id !== auth()->id()) {
            abort(403);
        }

        return view('admin.social-engagements.index', [
            'socialEngagements' => auth()->user()->socialEngagements()->orderBy('sort_order')->orderBy('created_at')->get(),
            'engagement' => $socialEngagement,
        ]);
    }

    public function update(SocialEngagementRequest $request, SocialEngagement $socialEngagement): RedirectResponse
    {
        if ($socialEngagement->user_id !== $request->user()->id) {
            abort(403);
        }

        $socialEngagement->update($request->validated());

        return redirect()->route('admin.social-engagements.index')->with('status', 'social-engagement-updated');
    }

    public function destroy(SocialEngagement $socialEngagement): RedirectResponse
    {
        if ($socialEngagement->user_id !== auth()->id()) {
            abort(403);
        }

        $socialEngagement->delete();

        return redirect()->route('admin.social-engagements.index')->with('status', 'social-engagement-deleted');
    }
}
