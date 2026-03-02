<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        $itemToEdit = null;
        
        if ($request->has('action') && $request->action == 'edit' && $request->has('id')) {
            $itemToEdit = Item::find($request->id);
        }

        return view('manage', compact('items', 'itemToEdit'));
    }
}