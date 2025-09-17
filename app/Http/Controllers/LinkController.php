<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        /** @var User $user */
        $user = Auth::user();
        $user->links()->create($request->validated());

        // Link::query()->create(
        //     array_merge(
        //         $request->validated(),
        //         ['user_id' => Auth::id()]
        //     )
        // );

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $link->fill($request->validated());
        $link->save();

        return to_route('dashboard')->with('message', 'Link alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('dashboard')->with('message', 'Deletado com sucesso');
    }

    public function up(Link $link)
    {
        $order = $link->sort;
        $newOrder = $order - 1;

        /** @var User $user */
        $user = Auth::user();

        $swapWith = $user->links()->where('sort', '=', $newOrder)->first();

        $link->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();

        return back();
    }

    public function down(Link $link)
    {
        $order = $link->sort;
        $newOrder = $order + 1;

        /** @var User $user */
        $user = Auth::user();

        $swapWith = $user->links()->where('sort', '=', $newOrder)->first();

        $link->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();

        return back();
    }
}
