<html>
    <head>
        <meta charset="utf-8">
        <title>家計簿</title>
    </head>
    <body>
        <a href="">HOME</a><br>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-jet-dropdown-link href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>
        <main>
            <div>
                <form action="#" method="post">
                    <p>金額：
                    <input type="text" name="money"></p>
                    <p>カテゴリー：
                    <input type="text" name="mail"></p>
                    <p>概要：
                    <input type="text" name="mail"></p>
                    <p>備考：
                    <input type="text" name="mail"></p>
                </form>
            </div>
        </main>
    </body>
</html>