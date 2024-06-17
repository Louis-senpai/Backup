<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ActivityLogRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $activityLogs = ActivityLog::paginate();

        return view('activity-log.index', compact('activityLogs'))
            ->with('i', ($request->input('page', 1) - 1) * $activityLogs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $activityLog = new ActivityLog();

        return view('activity-log.create', compact('activityLog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActivityLogRequest $request): RedirectResponse
    {
        ActivityLog::create($request->validated());

        return Redirect::route('activity-logs.index')
            ->with('success', 'ActivityLog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $activityLog = ActivityLog::find($id);

        return view('activity-log.show', compact('activityLog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $activityLog = ActivityLog::find($id);

        return view('activity-log.edit', compact('activityLog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActivityLogRequest $request, ActivityLog $activityLog): RedirectResponse
    {
        $activityLog->update($request->validated());

        return Redirect::route('activity-logs.index')
            ->with('success', 'ActivityLog updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ActivityLog::find($id)->delete();

        return Redirect::route('activity-logs.index')
            ->with('success', 'ActivityLog deleted successfully');
    }
}
