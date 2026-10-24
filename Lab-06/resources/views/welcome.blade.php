<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevate — Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-glow {
            background: radial-gradient(ellipse at 70% 45%,
                rgba(124,58,237,.20), transparent 60%);
        }
    </style>
</head>
<body class="min-h-screen bg-[#09090f] text-white">

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-10">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-600 font-bold text-xl shadow-lg shadow-violet-900/40">E</div>
            <span class="text-xl font-bold tracking-tight">elevate<span class="text-violet-400">.</span></span>
        </a>

        <div class="flex items-center gap-3 sm:gap-5">
            <a href="{{ route('signin') }}" class="text-sm font-medium text-gray-300 transition hover:text-white">
                Sign In
            </a>
            <a href="{{ route('signup') }}" class="rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold transition hover:bg-violet-500 sm:px-5">
                Get Started <span aria-hidden="true">→</span>
            </a>
        </div>
    </nav>

    <main class="hero-glow">
        <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 pb-20 pt-12 lg:grid-cols-2 lg:px-10 lg:pb-32 lg:pt-20">

            <div>
                <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-violet-400/20 bg-violet-400/10 px-4 py-2 text-sm text-violet-300">
                    <span class="h-2 w-2 rounded-full bg-violet-400"></span>
                    Your next chapter starts here
                </div>

                <h1 class="max-w-2xl text-5xl font-extrabold leading-tight tracking-tight sm:text-6xl lg:text-7xl">
                    Make room for
                    <span class="bg-gradient-to-r from-violet-400 to-fuchsia-400 bg-clip-text text-transparent">what's next.</span>
                </h1>

                <p class="mt-7 max-w-xl text-lg leading-8 text-gray-400">
                    A better space to learn, grow, and turn your ideas into something extraordinary.
                    Your journey starts with one simple step.
                </p>

                <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                    <a href="{{ route('signup') }}" class="inline-flex items-center justify-center gap-3 rounded-xl bg-violet-600 px-7 py-4 font-semibold shadow-lg shadow-violet-950/50 transition hover:-translate-y-1 hover:bg-violet-500">
                        Create your account <span>→</span>
                    </a>
                    <a href="{{ route('signin') }}" class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/5 px-7 py-4 font-semibold transition hover:bg-white/10">
                        I already have an account
                    </a>
                </div>

                <div class="mt-12 flex flex-wrap gap-x-8 gap-y-4 text-sm text-gray-400">
                    <span>✓ Simple registration</span>
                    <span>✓ Secure sign in</span>
                    <span>✓ Personal dashboard</span>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 rounded-[2rem] bg-violet-600/20 blur-3xl"></div>

                <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-[#15151f] p-3 shadow-2xl shadow-black/40">
                    <img
                        src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=85"
                        alt="A bright modern workspace with desks and computers"
                        class="h-[340px] w-full rounded-[1.5rem] object-cover sm:h-[460px]"
                    >

                    <div class="absolute inset-x-6 bottom-6 rounded-2xl border border-white/15 bg-black/60 p-5 backdrop-blur-xl sm:inset-x-8 sm:bottom-8">
                        <p class="text-sm text-violet-300">YOUR SPACE. YOUR PACE.</p>
                        <h2 class="mt-2 text-2xl font-bold">Build something meaningful.</h2>
                        <p class="mt-2 text-sm leading-6 text-gray-300">
                            One account. Your own space to move forward.
                        </p>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer class="border-t border-white/10 px-6 py-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} Elevate. Made for your next chapter.
    </footer>

</body>
</html>
