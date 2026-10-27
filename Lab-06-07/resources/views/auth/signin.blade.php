<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In — Elevate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-[#09090f] text-white">

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6">
        <a href="{{ route('home') }}" class="flex items-center gap-3 text-xl font-bold">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-600">E</span>
            elevate<span class="text-violet-400">.</span>
        </a>
        <a href="{{ route('signup') }}" class="text-sm text-gray-300 hover:text-white">
            New here? <span class="font-semibold text-violet-400">Create account</span>
        </a>
    </nav>

    <main class="flex min-h-[80vh] items-center justify-center px-6 py-12">
        <div class="w-full max-w-md rounded-3xl border border-white/10 bg-[#11111a] p-8 shadow-2xl sm:p-10">

            <div class="mb-8 text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-violet-600/15 text-3xl">✦</div>
                <p class="mt-6 text-sm font-semibold text-violet-400">WELCOME BACK</p>
                <h1 class="mt-2 text-3xl font-bold">Sign in to Elevate</h1>
                <p class="mt-3 text-sm leading-6 text-gray-400">Enter your credentials to continue your journey.</p>
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

            <form action="{{ route('signin.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-gray-300">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="you@example.com"
                        class="w-full rounded-xl border border-white/10 bg-[#09090f] px-4 py-3.5 text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20">
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-medium text-gray-300">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                        placeholder="Enter your password"
                        class="w-full rounded-xl border border-white/10 bg-[#09090f] px-4 py-3.5 text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20">
                </div>

                <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-violet-600 px-5 py-4 font-semibold transition hover:bg-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-400">
                    Sign in <span>→</span>
                </button>
            </form>

            <div class="my-7 flex items-center gap-4">
                <div class="h-px flex-1 bg-white/10"></div>
                <span class="text-xs text-gray-500">YOUR SPACE IS WAITING</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            <p class="text-center text-sm text-gray-400">
                Don't have an account?
                <a href="{{ route('signup') }}" class="font-semibold text-violet-400 hover:text-violet-300">Sign up</a>
            </p>

            <p class="mt-8 text-center text-xs text-gray-500">
                <a href="{{ route('home') }}" class="transition hover:text-white">← Back to home</a>
            </p>
        </div>
    </main>

</body>
</html>
