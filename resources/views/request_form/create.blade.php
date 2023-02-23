<x-master>
<div id="wrapper" style="margin: 90px auto 20px;">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Форма запроса данных</h1>

        <form method="POST" action="/request_form">
            @csrf

            <div class="field">
                <label for="username" class="label">Имя пользователя</label>
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
            </div>

            <div class="field">
                <label for="phone" class="label">Номер телефона</label>
                <div class="control">
                <input
                    type="text"
                    placeholder="+7(495)123-4567"
                    class="input @error('phone') is-danger @enderror"
                    name="phone"
                    id="phone"
                    value="{{ old('phone') }}"
                >
                @error('phone')
                <p class="help is-danger">{{ $errors->first('phone') }}</p>
                @enderror
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">Электронная почта</label>
                <div class="control">
                <input
                    type="text"
                    placeholder="mail@mail.ru"
                    class="input @error('email') is-danger @enderror"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                >
                @error('email')
                <p class="help is-danger">{{ $errors->first('email') }}</p>
                @enderror
                </div>
            </div>

            <div class="field">
                <label for="requested" class="label">Запрос</label>
                <div class="control">
                <textarea
                    name="requested"
                    placeholder="Текст вашего запроса"
                    id="requested"
                    class="textarea @error('requested') is-danger @enderror"
                >{{ old('requested') }}</textarea>
                @error('requested')
                    <p class="help is-danger">{{ $errors->first('requested') }}</p>
                @enderror
                </div>
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
