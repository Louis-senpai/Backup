<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $items = Item::paginate();

        return view('item.index', compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * $items->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $item = new Item();
        activity()->log('Item created');
        return view('item.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request): RedirectResponse
    {
        Item::create($request->validated());

        return Redirect::route('items.index')
            ->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $item = Item::find($id);

        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $item = Item::find($id);
        activity()->log('Item edited');
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemRequest $request, Item $item): RedirectResponse
    {
        $item->update($request->validated());
        activity()->log('Item updated');
        return Redirect::route('items.index')
            ->with('success', 'Item updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Item::find($id)->delete();
        activity()->log('Item deleted');
        
        return Redirect::route('items.index')
            ->with('success', 'Item deleted successfully');
    }
}
