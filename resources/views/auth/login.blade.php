<x-guest-layout>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-slate-900 via-indigo-950 to-blue-900">
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-2xl overflow-hidden sm:rounded-3xl border border-white/10">

            <!-- Professional CampusLost Branding Logo (User Icon without plus) -->
            <div class="flex flex-col items-center justify-center space-y-2 mb-6">
                <div
                    class="w-14 h-14 bg-gradient-to-tr from-blue-600 to-indigo-700 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-500/30">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <span class="text-2xl font-black tracking-tight text-gray-800">Campus<span
                        class="text-blue-600">Lost</span></span>
                <p class="text-xs text-gray-500 font-medium tracking-wide uppercase">Northern University Bangladesh</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4 font-medium text-sm text-red-600">
                    {{ __('Whoops! Something went wrong.') }}
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">Email</label>
                    <input id="email"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"
                        type="email" name="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username" />
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">Password</label>
                    <input id="password"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"
                        type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-900 focus:ring-indigo-500 text-white rounded-xl px-5 py-2.5 font-semibold text-xs uppercase tracking-widest transition shadow-lg shadow-indigo-600/30">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
