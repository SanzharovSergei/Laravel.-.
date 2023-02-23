<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 75px;">
        @forelse($news as $item)
            <article class="notification">
                <h1 class="title is-4"><a style="text-decoration: none;" href="{{ $item['link'] }}">{{ $item['title'] }}</a></h1>
                <p class="subtitle is-6">
                    {!! $item['description'] !!}
                </p>
                <p class="subtitle is-8">
                    {{ $item['pubDate'] }}
                </p>

                @if($item->user_id === auth()->user()->getAuthIdentifier())
                    <a href="{{ $item->path() . '/edit' }}" class="button is-primary">Edit</a>
                @endif
            </article>
        @empty
            <p>No news yet.</p>
        @endforelse
    </section>
</x-master>
