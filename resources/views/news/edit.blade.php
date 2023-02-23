<x-master>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div id="wrapper"  style="margin: 45px auto 20px;">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4" style="margin: 70px auto 20px;">Update News</h1>

            <form method="POST" action="/news/{{ $item->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label for="title" class="label">Заголовок</label>
                </div>

                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{ $item->title }}">
                </div>

                <div class="field">
                    <label for="link" class="label">Ссылка</label>
                </div>
                <div class="control">
                    <textarea name="newslink" id="link" class="textarea">{{ $item->link }}</textarea>
                </div>

                <div class="field">
                    <label for="body" class="label">Текст новости</label>
                </div>
                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{ $item->description }}</textarea>
                </div>

                <div class="field is-grouped">
                    <div class="control"  style="margin-top: 10px;">
                        <button class="button is-link" type="submit">Сохранить</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
</x-master>
