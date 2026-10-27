<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Elevate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-[#09090f] text-white">

    <nav class="border-b border-white/10 bg-[#11111a]">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 text-xl font-bold">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-600">E</span>
                elevate<span class="text-violet-400">.</span>
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="rounded-xl border border-white/10 px-4 py-2.5 text-sm font-medium text-gray-300 transition hover:border-red-400/40 hover:bg-red-500/10 hover:text-red-300">
                    Sign Out ↗
                </button>
            </form>
        </div>
    </nav>

    <main class="mx-auto max-w-7xl px-6 py-12 lg:py-16">

        <div class="relative overflow-hidden rounded-3xl border border-violet-400/20 bg-gradient-to-br from-violet-950 via-[#171329] to-[#11111a] p-8 sm:p-12">
            <div class="absolute -right-16 -top-24 h-72 w-72 rounded-full bg-violet-500/20 blur-3xl"></div>

            <div class="relative">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">YOUR PERSONAL SPACE</p>
                <h1 class="mt-4 text-3xl font-extrabold sm:text-5xl">
                    Welcome back, {{ auth()->user()->name }}!
                </h1>
                <p class="mt-4 max-w-2xl leading-7 text-gray-300">
                    You're signed in and ready to continue your journey. This is your personal dashboard.
                </p>
                <div class="mt-7 inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-2 text-sm text-emerald-300">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Authenticated successfully
                </div>
            </div>
        </div>

        <section class="mt-10">
            <h2 class="text-xl font-bold">Account overview</h2>
            <p class="mt-2 text-sm text-gray-400">Your account information at a glance.</p>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-2xl border border-white/10 bg-[#11111a] p-6 transition hover:border-violet-400/30">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/15 text-xl">👤</div>
                    <p class="mt-5 text-sm text-gray-400">Full name</p>
                    <p class="mt-2 break-words text-xl font-semibold">{{ auth()->user()->name }}</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-[#11111a] p-6 transition hover:border-violet-400/30">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-fuchsia-500/15 text-xl">✉</div>
                    <p class="mt-5 text-sm text-gray-400">Email address</p>
                    <p class="mt-2 break-words text-xl font-semibold">{{ auth()->user()->email }}</p>
                </div>
            </div>
        </section>

        <section class="mt-8 rounded-2xl border border-white/10 bg-[#11111a] p-6 sm:p-8">
            <h2 class="text-lg font-bold">You're all set!</h2>
            <p class="mt-2 leading-7 text-gray-400">
                Your account is active. You can safely sign out when you're finished.
                The dashboard is protected by Laravel authentication middleware.
            </p>
            <form action="{{ route('logout') }}" method="POST" class="mt-5">
                @csrf
                <button type="submit" class="rounded-xl bg-violet-600 px-5 py-3 font-semibold transition hover:bg-violet-500">
                    Sign out of your account
                </button>
            </form>
        </section>

        <footer class="mt-12 border-t border-white/10 pt-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} Elevate. Your journey, your progress.
        </footer>

    </main>
</body>
</html>
