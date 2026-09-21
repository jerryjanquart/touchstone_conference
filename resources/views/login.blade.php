<x-layout title="Login">
    <x-nav />
    <x-hero-compact />

    <main class="flex justify-center px-6 py-12">
            <div class="w-full max-w-md">
                <div class="rounded-xl bg-white">
                    <div class="mb-8 text-center">
                        <p class="text-center mb-2 text-2xl text-touchstone-red">Livestream Login</p>


                        <p class="mt-3 text-md text-slate-600">
                            Enter the credentials provided with your registration.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div
                            class="mb-6 rounded-md border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"
                            role="alert"
                        >
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form
                        method="POST"
                        action="{{ route('login.authenticate') }}"
                        class="space-y-6 mb-10"
                    >
                        @csrf

                        <div>
                            <label
                                for="username"
                                class="block text-sm font-medium text-slate-700"
                            >
                                Username
                            </label>

                            <input
                                id="username"
                                name="username"
                                type="text"
                                value="{{ old('username') }}"
                                required
                                autofocus
                                autocomplete="username"
                                class="mt-2 block w-full border border-slate-300 px-3 py-2 outline-none transition focus:border-red-800 focus:ring-2 focus:ring-red-800/20"
                            >
                        </div>

                        <div>
                            <label
                                for="password"
                                class="mt-6 block text-sm font-medium text-slate-700"
                            >
                                Password
                            </label>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                autocomplete="current-password"
                                class="mt-2 block w-full border border-slate-300 px-3 py-2 outline-none transition focus:border-red-800 focus:ring-2 focus:ring-red-800/20"
                            >
                        </div>

                        <div class="text-center">
                            <button
                                type="submit"
                                class="mt-4 rounded-md bg-touchstone-red px-6 py-3 text-sm font-semibold text-white transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-touchstone-red focus:ring-offset-2"
                            >
                                Watch the Livestream
                            </button>
                        </div>
                        

                    </form>
                </div>
            </div>
        </main>

</x-layout>