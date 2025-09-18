@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">
            {{ __('Profile Settings') }}
        </h2>
        <p class="text-gray-600 text-sm mt-1">
            Manage your account information, password, and preferences.
        </p>
    </div>

    <div class="py-6">
        <div class="max-w-4xl mx-auto space-y-8">
            <!-- Update Profile Information -->
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition duration-200">
                <h3 class="text-lg font-semibold text-gray-700 mb-4 border-b pb-2">
                    {{ __('Profile Information') }}
                </h3>
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition duration-200">
                <h3 class="text-lg font-semibold text-gray-700 mb-4 border-b pb-2">
                    {{ __('Update Password') }}
                </h3>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="p-6 bg-red-50 border border-red-200 rounded-xl shadow hover:shadow-lg transition duration-200">
                <h3 class="text-lg font-semibold text-red-700 mb-4 border-b pb-2">
                    {{ __('Delete Account') }}
                </h3>
                <p class="text-sm text-red-600 mb-3">
                    Once your account is deleted, all of its resources and data will be permanently removed.
                </p>
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
