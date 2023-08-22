<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'phone',
        'session_id'
    ];

    public function add(User $user): bool
    {
        $existingUser = $this->userExistByPhone($user->phone);
        if ($existingUser) {
            $existingUser->update([
                'session_id' => $user->session_id
            ]);
            return true;
        }
        $NewUser = new User();
        $NewUser->phone = 'phone';
        $NewUser->session_id = $user->session_id;

        return $user->save();
    }

    public function userExistByPhone($phone)
    {
        return User::where('phone', $phone)->first();
    }

}
