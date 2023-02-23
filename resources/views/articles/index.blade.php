<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 75px;">
        @forelse($articles as $article)
        <article class="notification">
            <h1 class="title is-4"><a style="text-decoration: none;" href="{{ $article->path() }}">{{ $article->title }}</a></h1>
            <p class="subtitle is-6"><img src="/images/banner.jpg" alt="" class="image image-full" />
                {!! $article->excerpt !!}
            </p>
            @if($article->user_id === auth()->user()->getAuthIdentifier())
                <a href="{{ $article->path() . '/edit' }}" class="button is-primary">Edit</a>
            @endif
        </article>
        @empty
            <p>No relevant articles yet.</p>
        @endforelse
    </section>
</x-master>
