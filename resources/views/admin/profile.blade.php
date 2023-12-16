@extends('admin.admin_master')

@section('admin-content')

<section>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Administrator</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


 <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                {{-- <img src=" {{ asset('backend/assets/img/profile-img.jpg') }} " alt="Profile" class="rounded-circle"> --}}
                <h2>{{ Auth::user()->name  }}</h2>
                <h3>{{ Auth::user()->email  }}</h3>
                <h4>{{ Auth::user()->role  }}</h4>

                {{-- <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>

                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li>

                  </ul>



                  <div class="tab-content pt-2">

                     {{-- -----------1st Tab--------------- --}}

                    <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                        <header>
                            <h4 style="color: rgba(202, 3, 3, 0.891)" class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Profile Information') }}
                            </h4>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Update your account's profile information and email address.") }}
                            </p>
                        </header>



                        <form id="send-verification" method="post" action="">
                            {{-- {{ route('verification.send') }} --}}
                            @csrf
                        </form>

                      <!-- Profile Edit Form -->
                      <form method="post" action="" class="mt-6 space-y-6">

                        @csrf
                        @method('patch')




                        <div class="row mb-3">
                            <x-input-label for="name" class="col-md-4 col-lg-3 col-form-label" :value="__('Name')" />

                          <div class="col-md-8 col-lg-9">
                            <x-text-input id="name" name="name" type="text" class="form-control mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2 " :messages="$errors->get('name')" />

                          </div>
                        </div>

                        <div class="row mb-3">
                            <x-input-label for="email" class="col-md-4 col-lg-3 col-form-label" :value="__('Email')" />

                          <div class="col-md-8 col-lg-9">
                            <x-text-input id="email" name="email" type="email" class="form-control mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                          </div>
                        </div>






                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())



                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="btn btn-primary rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif




                    <div class="flex items-center gap-4">

                        <button class="btn btn-primary">{{ __('Save') }}</button>

                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>

                      </form><!-- End Profile Edit Form -->

                    </div>

                    {{-- -----------2nd Tab--------------- --}}

                    <div class="tab-pane fade pt-3" id="profile-change-password">

                        <header>
                            <h4 style="color: rgba(202, 3, 3, 0.891)" class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Update Password') }}
                            </h4>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>
                        </header>

                      <!-- Change Password Form -->
                      <form method="post" action="" class="mt-6 space-y-6">
                        {{-- {{ route('password.update') }} --}}
                        @csrf
                        @method('put')

                        <div class="row mb-3">
                            <x-input-label for="current_password" class="col-md-4 col-lg-3 col-form-label" :value="__('Current Password')" />
                          {{-- <label for="currentPassword" >Current Password</label> --}}
                          <div class="col-md-8 col-lg-9">
                            <x-text-input id="current_password" name="current_password" type="password" class="form-control mt-1 block w-full" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                          </div>
                        </div>

                        <div class="row mb-3">
                            <x-input-label for="password" class="col-md-4 col-lg-3 col-form-label" :value="__('New Password')" />

                          <div class="col-md-8 col-lg-9">
                            <x-text-input id="password" name="password" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                          </div>
                        </div>

                        <div class="row mb-3">
                            <x-input-label for="password_confirmation"  class="col-md-4 col-lg-3 col-form-label" :value="__('Confirm Password')" />

                          <div class="col-md-8 col-lg-9">
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                          </div>

                          <div class="flex items-center gap-4">
                            <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'password-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>



                        </div>


                      </form><!-- End Change Password Form -->

                    </div>


                    {{-- -----------3rd Tab--------------- --}}



                  </div><!-- End Bordered Tabs -->



                </div>
              </div>


          </div>
        </div>
      </section>

  </main>
  <!-- End #main -->
</section>
@endsection
