<?php

namespace App\Http\Livewire\Auth;

use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:8|confirmed|',
    ];

    public function mount()
    {
        if (auth()->user()) {
            redirect('/dashboard');
        }
    }

    public function register()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        Mail::to($this->email)->send(new RegistrationMail());

        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
