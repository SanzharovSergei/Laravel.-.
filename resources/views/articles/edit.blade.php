<x-master>

    <div id="wrapper"  style="margin: 45px auto 20px;">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4" style="margin: 70px auto 20px;">Update Article</h1>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label for="title" class="label">Заголовок</label>
                </div>

                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Краткое содержание</label>
                </div>
                <div class="control">
                    <textarea name="excerpt" id="excerpt" class="textarea">{{ $article->excerpt }}</textarea>
                </div>

                <div class="field">
                    <label for="body" class="label">Текст новости</label>
                </div>
                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{ $article->body }}</textarea>
                </div>

                <div class="field is-grouped">
                    <div class="control"  style="margin-top: 10px;">
                        <button class="button is-link" type="submit">Сохранить</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


</x-master>
