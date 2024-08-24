<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">Tasklist</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu hidden lg:block lg:menu-horizontal">
                {{-- メッセージ作成ページへのリンク --}}
                <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規タスク登録</a></li>
            </ul>
            <div class="dropdown dropdown-end">
                <button type="button" tabindex="0" class="btn btn-square btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                    {{-- メッセージ作成ページへのリンク --}}
                    <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規タスク登録</a></li>
                </ul>
            </div>
        </div>

        <div class="flex-none">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <ul tabindex="0" class="menu hidden lg:menu-horizontal">
                    @include('commons.link_items')
                </ul>
                <div class="dropdown dropdown-end">
                    <button type="button" tabindex="0" class="btn btn-ghost normal-case font-normal lg:hidden">
                        @if (Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            Guest
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                        @include('commons.link_items')
                    </ul>
                </div>
            </form>
        </div>

    </nav>
</header>