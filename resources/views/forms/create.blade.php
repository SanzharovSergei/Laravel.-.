<x-master>
<div id="wrapper" style="margin: 90px auto 20px;">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Форма обратной связи</h1>

        <form method="POST" action="/forms">
            @csrf

            <div class="field">
                <label for="username" class="label">Имя пользователя</label>
            </div>

            <div class="control">
                <input
                    type="text"
                    placeholder="Имя Фамилия"
                    class="input @error('username') is-danger @enderror"
                    name="username"
                    id="username"
                    value="{{ old('username') }}"
                >
                @error('username')
                    <p class="help is-danger">{{ $errors->first('username') }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="comment" class="label">Комментарий</label>
            </div>
            <div class="control">
                <textarea
                    name="comment"
                    placeholder="Текст комментария"
                    id="comment"
                    class="textarea @error('comment') is-danger @enderror"
                >{{ old('comment') }}</textarea>
                @error('comment')
                    <p class="help is-danger">{{ $errors->first('comment') }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control" style="margin-top: 10px;">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
</x-master>
