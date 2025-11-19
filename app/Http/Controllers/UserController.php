<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function UserProfile() {
        return view('frontend.dashboard.profile_user');
    }

    public function UserProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $user_data = User::find($id);

        $user_data->name = $request->name;
        $user_data->email = $request->email;
        $user_data->phone = $request->phone;
        $user_data->address = $request->address;

        $oldPhotoPath = $user_data->photo;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images'), $filename);
            $user_data->photo = $filename;

            if ($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        $user_data->save();
        return redirect()->back()->with($notification);
    }

    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/user_images/' . $oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    public function UserChangePassword() {
        return view('frontend.dashboard.change_password');
    }

    public function UserUpdatePassword(Request $request) {
        $id = Auth::user()->id;
        $user_data = User::find($id);

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);
        if(!Hash::check($request->old_password, $user_data->password)) {
            $notification = array(
                'message' => 'Old password doest not match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        User::whereId($user_data->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password change successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    }
}
