<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('expires_at')->get();

        return view('items.index', compact('items'));
    }
    public function create()
{
    return view('items.create');
}

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'in_stock' => 'required|boolean',
        'expires_at' => 'nullable|date',
        'note' => 'nullable|string',
    ]);

    // ログイン未対応なので仮のユーザーID
    $validated['user_id'] = 1;

    Item::create($validated);

    return redirect()->route('items.index');
}
}
