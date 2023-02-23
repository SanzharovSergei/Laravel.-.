<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 80px;">
        <article class="notification">
            <h1 class="title is-4"><a style="text-decoration: none;" href="{{ $item['link'] }}">{{ $item['title'] }}</a></h1>
            <p class="subtitle is-6">
                {!! $item['description'] !!}
            </p>
            <p class="subtitle is-8">
                {{ $item['pubDate'] }}
            </p>
        </article>
    </section>
</x-master>
