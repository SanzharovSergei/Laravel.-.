<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 75px;">
        @forelse($news as $item)
            <article class="notification">
                <h1 class="title is-4"><a style="text-decoration: none;" href="{{ $item['link'] }}">{{ $item['title'] }}</a></h1>
                <p class="subtitle is-6">
                    {{ $item['description'] }}
                </p>
                <p class="subtitle is-8">
                    {{ $item['pubDate'] }}
                </p>
                @auth
                    <form method="POST" action="/parser/store">
                        @csrf
                        <input type="hidden" name="title" value="{{ $item['title'] }}">
                        <input type="hidden" name="link" value="{{ $item['link'] }}">
                        <input type="hidden" name="guid" value="{{ $item['guid'] }}">
                        <input type="hidden" name="description" value="{{ $item['description'] }}">
                        <input type="hidden" name="pubDate" value="{{ $item['pubDate'] }}">
                        <button class="button is-link" type="submit">Сохранить</button>
                    </form>
                @endauth
            </article>
        @empty
            <p>No news yet.</p>
        @endforelse
    </section>
</x-master>
