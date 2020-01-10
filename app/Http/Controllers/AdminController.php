<?php

namespace App\Http\Controllers;

use App\BridalSalon;
use App\MusicGroup;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function singleUser($userId)
    {
        $user = User::find($userId);
        $roles = Role::all();

        return view('admin.single-user', compact('user', 'roles'));
    }

    public function updateUser(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('admin.users');
    }

    public function salons()
    {
        $salons = BridalSalon::all();

        return view('admin.salons', compact('salons'));
    }

    public function renderCreateTemplate()
    {

        return view('admin.create-salon');
    }

    public function createSalon(Request $request)
    {
        $imageFileName = null;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = time() .'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $imageFileName);
        }

        $salon = new BridalSalon();
        $salon->name = $request->name;
        $salon->image = $imageFileName;
        $salon->location = $request->location;
        $salon->capacity = $request->capacity;
        $salon->contact = $request->contact;
        $salon->save();

        return redirect()->route('admin.salons');
    }

    public function deleteSalon($salonId)
    {
        $salon = BridalSalon::find($salonId);
        $salon->delete();

        return back();
    }

    public function getSalon($salonId)
    {
        $salon = BridalSalon::find($salonId);

        return view('admin.single-salon', compact('salon'));
    }

    public function updateSalon(Request $request, $salonId)
    {
        $salon = BridalSalon::find($salonId);

        $imageFileName = $salon->image;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = time() .'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $imageFileName);
        }

        $salon->name = $request->name;
        $salon->image = $imageFileName;
        $salon->location = $request->location;
        $salon->capacity = $request->capacity;
        $salon->contact = $request->contact;
        $salon->save();

        return redirect()->route('admin.salons');
    }

    public function getAllMusicGroups()
    {
        $musicGroups = MusicGroup::all();

        return view('admin.music-groups', compact('musicGroups'));
    }

    public function renderCreateMusicGroupTemplate()
    {
        return view('admin.create-music-group');
    }

    public function createMusicGroup(Request $request)
    {
        $imageFileName = null;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = time() .'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $imageFileName);
        }

        $musicGroup = new MusicGroup();
        $musicGroup->name = $request->name;
        $musicGroup->image = $imageFileName;
        $musicGroup->description = $request->description;
        $musicGroup->save();

        return redirect()->route('admin.music-groups');
    }

    public function getMusicGroup($groupId)
    {
        $group = MusicGroup::find($groupId);

        return view('admin.single-music-group', compact('group'));
    }

    public function updateMusicGroup(Request $request, $groupId)
    {
        $group = MusicGroup::find($groupId);

        $imageFileName = $group->image;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = time() .'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $imageFileName);
        }

        $group->name = $request->name;
        $group->image = $imageFileName;
        $group->description = $request->description;
        $group->save();

        return redirect()->route('admin.music-groups');
    }

    public function deleteMusicGroup($groupId)
    {
        $group = MusicGroup::find($groupId);
        $group->delete();

        return back();
    }
}
