<?php

namespace Modules\Chat\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Chat\Entities\User;
use Modules\Chat\Http\Requests\{CreateUserRequest, UpdateUserRequest};

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // $dataSearch = User::where('id', auth()->user()->id)->latest();
        $dataSearch = User::latest();

        if (request('search')) {
            $dataSearch->where('name', 'like', '%' . request('search') . '%');
        }

        return view('chat::layouts.user.index', [
            'title' => 'Dashboard | User Manager',
            'allUser' => $dataSearch->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('chat::layouts.user.create', [
            'title' => 'Dashboard | Tambah User Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateUserRequest $request)
    {
        $validateData = $request->validated();

        $raw = $request->password;

        $validateData['password'] = bcrypt($raw);

        User::create($validateData);

        return redirect('/user')->with('success', 'User baru berhasil ditambahkan!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(User $user)
    {
        return view('chat::layouts.user.show', [
            'title' => 'Dashboard | Detail Data User',
            'detail' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        return view('chat::layouts.user.editProfile', [
            'title' => 'Dashboard | User Edit Profile',
            'dataUser' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validateData = $request->validated();

        $raw = $request->password;

        $validateData['password'] = bcrypt($raw);

        User::where('id', $user->id)->update($validateData);
        return redirect('/user')->with('success', 'Data user berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/user')->with('success', 'Data user berhasil dihapus!');
    }
}
