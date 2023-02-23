<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 80px;">
            <article class="notification">
                <h2 class="title is-2">{{ $article->title }}</h2>
                <p class="subtitle is-4"><img src="/images/banner.jpg" alt="" class="image image-full" />
                    {{ $article->body }}
                </p>
                <p style="margin-top: 1em;">
                    @foreach ($article->tags as $tag)
                        <a class="tag is-primary has-text-white" style="text-decoration: none;" href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                    @endforeach
                </p>
            </article>
    </section>
</x-master>
