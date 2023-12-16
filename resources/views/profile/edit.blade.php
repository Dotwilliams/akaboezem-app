@extends('member.master_dashboard')

@section('member-dashboard-content')

<section>
<div class="content-wrapper">

    <div class="pagetitle">
      <h3>Profile</h3>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Member</li>
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

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Delete</button>
                  </li>

              </ul>

              <div class="tab-content pt-2">


                 {{-- -----------2nd Tab--------------- --}}

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                    <header>
                        <h4 style="color: rgba(202, 3, 3, 0.891)" class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Profile Information') }}
                        </h4>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Update your account's profile information and email address.") }}
                        </p>
                    </header>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                  <!-- Profile Edit Form -->
                  <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">

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
                  <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
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
                <div class="tab-pane fade pt-3" id="profile-settings">

                    <header>
                        <h4 style="color: rgba(202, 3, 3, 0.891)" class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Delete Account') }}
                        </h4>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                        </p>
                    </header>

                    <!-- Settings Form -->

                    <x-danger-button class="btn btn-danger"
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                    {{ __('Delete Account') }}
                    </x-danger-button>

                    {{-- <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable> --}}
                        <form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6 p-6">
                            @csrf
                            @method('delete')

                            <h6 style="color: rgba(0, 0, 0, 0.891)" class="text-lg font-medium text-gray-900 dark:text-gray-100 mt-3">
                                {{ __('Are you sure you want to delete your account?') }}
                            </h6>

                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="mt-6">
                                <x-input-label for="password" value="{{ __('Password') }}" class="col-md-4 col-lg-3 col-form-label sr-only" />

                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="block w-3/4 form-control mt-1 block w-full"
                                    placeholder="{{ __('Password') }}"
                                />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="col-md-4 col-lg-3 col-form-label mt-2" />
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button class="btn btn-warning"  x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="btn btn-danger ms-3">
                                    {{ __('Delete Account') }}
                                </x-danger-button>
                            </div>
                        </form>
                    <!-- End settings Form -->

                  </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

</div><!-- End #main -->
</section>
@endsection
