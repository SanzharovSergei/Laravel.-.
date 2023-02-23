<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 80px;">
        @forelse($request_forms as $request_form)
        <article class="notification">
            <h1 class="title is-4"><a style="text-decoration: none;" href="{{ $request_form->path() }}">{{ $request_form->username }}</a></h1>
            <p class="subtitle is-5">{{ $request_form->phone }}</p>
            <p class="subtitle is-5">{{ $request_form->email }}</p>
            <p class="subtitle is-6">{{ $request_form->requested }}</p>
        </article>
        @empty
            <p>Пока не создано ни одного запроса.</p>
        @endforelse
    </section>
</x-master>
