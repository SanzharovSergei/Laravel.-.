<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 80px;">
        @forelse($forms as $form)
        <article class="notification">
            <h1 class="title is-5"><a style="text-decoration: none;" href="{{ $form->path() }}">{{ $form->username }}</a></h1>
            <p class="subtitle is-6">
                {!! $form->comment !!}
            </p>
        </article>
        @empty
            <p>No relevant comments yet.</p>
        @endforelse
    </section>
</x-master>
