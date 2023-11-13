

@extends('pages.layout.master')


@section('content')


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="registerstyle/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="registerstyle/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-color:
        #adb3be">
        {{-- "background-image: url('registerstyle/images/bg-registration-form-1.jpg');"> --}}
            
			<div class="inner">
				<div class="image-holder">
					<img  src="registerstyle/images/login.png" alt="">
				</div>
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

                <form method="POST" action="{{ route('login') }}">
                    @csrf

					<h3>Login Form</h3>
					
					<div class="form-wrapper">
						<input  placeholder="Email Address" class="form-control" id="email"  type="email" name="email" :value="old('email')" >
						    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:red" />
                            {{-- <i class="zmdi zmdi-email"></i> --}}
                      
					</div>
					{{-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> --}}
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control"   
                       id="password" 
                      
                        name="password"
                        autocomplete="new-password" >
						{{-- <i class="zmdi zmdi-lock"></i> --}}
                        <x-input-error :messages="$errors->get('password')" class="mt-1"  style="color:red" />
					</div>
				

{{--                   
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <button>

                            {{ __('Register') }}
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button> --}}




                           <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button style="
                
                border: 0.125em solid #34425D;
                border-radius: 0.9375em;
                
                background-color: #34425D
                cursor: pointer;
                color:white;
                font-size: 16px;
                font-weight: 600;
                
                min-height: 3.75em;
                min-width: 0;
                outline: none;
                padding: 1em 2.3em;
                text-align: center;
               ">
                    {{ __('Log in') }}
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </div>
                   



					{{-- <button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button> --}}
				</form>
			</div>
		</div>
		
	</body>
</html>

@endsection