<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account — Elevate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-[#09090f] text-white">

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6">
        <a href="{{ route('home') }}" class="flex items-center gap-3 text-xl font-bold">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-600">E</span>
            elevate<span class="text-violet-400">.</span>
        </a>
        <a href="{{ route('signin') }}" class="text-sm text-gray-300 hover:text-white">
            Already a member? <span class="font-semibold text-violet-400">Sign in</span>
        </a>
    </nav>

    <main class="mx-auto flex max-w-6xl items-center justify-center px-6 py-8 sm:py-14">
        <div class="grid w-full overflow-hidden rounded-3xl border border-white/10 bg-[#11111a] shadow-2xl md:grid-cols-2">

            <div class="relative hidden min-h-[650px] md:block">
                <img
                    src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1000&q=85"
                    alt="People working together"
                    class="absolute inset-0 h-full w-full object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#09090f] via-black/30 to-violet-950/20"></div>
                <div class="absolute bottom-10 left-8 right-8">
                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">Start something great</span>
                    <h2 class="mt-4 text-4xl font-extrabold leading-tight">Your future is built one step at a time.</h2>
                    <p class="mt-4 leading-7 text-gray-300">Create your account and make this space yours.</p>
                </div>
            </div>

            <div class="p-7 sm:p-10 lg:p-12">
                <div class="mb-8">
                    <p class="text-sm font-semibold text-violet-400">GET STARTED FOR FREE</p>
                    <h1 class="mt-3 text-3xl font-bold">Create your account</h1>
                    <p class="mt-3 text-sm leading-6 text-gray-400">Enter your details below to get started.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-5 rounded-xl border border-red-500/20 bg-red-500/10 p-4 text-sm text-red-300">
                        <ul class="list-inside list-disc space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('signup.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-300">Full name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name"
                            placeholder="John Doe"
                            class="w-full rounded-xl border border-white/10 bg-[#09090f] px-4 py-3.5 text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20">
                    </div>

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-300">Email address</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="you@example.com"
                            class="w-full rounded-xl border border-white/10 bg-[#09090f] px-4 py-3.5 text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20">
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-300">Password</label>
                        <input id="password" name="password" type="password" required minlength="8" autocomplete="new-password"
                            placeholder="At least 8 characters"
                            class="w-full rounded-xl border border-white/10 bg-[#09090f] px-4 py-3.5 text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20">
                    </div>

                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-300">Confirm password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required minlength="8" autocomplete="new-password"
                            placeholder="Enter your password again"
                            class="w-full rounded-xl border border-white/10 bg-[#09090f] px-4 py-3.5 text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20">
                    </div>

                    <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-violet-600 px-5 py-4 font-semibold transition hover:bg-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2 focus:ring-offset-[#11111a]">
                        Create account <span>→</span>
                    </button>
                </form>

                <p class="mt-7 text-center text-sm text-gray-400">
                    Already have an account?
                    <a href="{{ route('signin') }}" class="font-semibold text-violet-400 hover:text-violet-300">Sign in</a>
                </p>

                <p class="mt-8 text-center text-xs leading-5 text-gray-500">
                    By creating an account, you agree to use our platform responsibly.
                </p>
            </div>
        </div>
    </main>

</body>
</html>
