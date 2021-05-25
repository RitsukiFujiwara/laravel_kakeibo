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
                <form method="post">
                @csrf
                    <p>月：
                        <select name="month">
                            <option value="1">1月</option>
                            <option value="2">2月</option>
                            <option value="3">3月</option>
                            <option value="4">4月</option>
                            <option value="5">5月</option>
                            <option value="6">6月</option>
                            <option value="7">7月</option>
                            <option value="8">8月</option>
                            <option value="9">9月</option>
                            <option value="10">10月</option>
                            <option value="11">11月</option>
                            <option value="12">12月</option>
                        </select>
                    </p>
                    <p>金額：
                    <input type="text" name="money"></p>
                    <p>カテゴリー：
                        <select name="category">
                            <option value="食費">食費</option>
                            <option value="記念日費">記念日費</option>
                        </select>
                    </p>
                    <p>詳細：
                    <input type="text" name="detail"></p>
                    <p>備考：
                    <input type="text" name="memo"></p>
                    <button type="submit">登録</button>
                </form>
            </div>
        </main>
    </body>
</html>