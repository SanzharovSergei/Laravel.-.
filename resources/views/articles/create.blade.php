<x-master>
{{--    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>--}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<div id="wrapper" style="margin: 45px auto 20px;">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4" style="margin: 70px auto 20px;">New Article</h1>

        <form method="POST" action="/articles">
            @csrf

            <div class="field">
                <label for="title" class="label">Заголовок</label>
            </div>

            <div class="control">
                <input
                    type="text"
                    class="input @error('title') is-danger @enderror"
                    name="title"
                    id="title"
                    value="{{ old('title') }}"
                >
                @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="excerpt" class="label">Краткое содержание</label>
            </div>
            <div class="control">
                <textarea
                    name="excerpt"
                    id="excerpt"
                    class="textarea @error('excerpt') is-danger @enderror"
                >{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="body" class="label">Текст новости</label>
            </div>
            <div class="control">
                <textarea
                    name="body"
                    id="body"
                    class="textarea @error('body') is-danger @enderror"
                >{{ old('body') }}</textarea>
                @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="tag" class="label">Тэги</label>
            </div>
            <div class="select is-multiple control">
                <select
                    name="tags[]"
                    id="tag"
                    multiple
                >
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                @error('tags')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control" style="margin-top: 10px;">
                    <button class="button is-link" type="submit">Сохранить</button>
                </div>
            </div>

        </form>
    </div>
</div>
{{--    <script src="{{ asset('vendor/ckeditor/ckeditor/ckeditor.js') }}"></script>--}}
    <script>
        CKEDITOR.replace( 'body' );
    </script>
</x-master>
