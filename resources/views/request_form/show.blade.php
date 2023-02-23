<x-master>
    <section class="column is-two-thirds ld-top" style="margin-top: 80px;">
            <article class="notification">
                <h2 class="title is-3">{{ $request_form->username }}</h2>
                <p class="subtitle is-4">{{ $request_form->phone }}</p>
                <p class="subtitle is-4">{{ $request_form->email }}</p>
                <p class="subtitle is-5">{{ $request_form->requested }}</p>
            </article>
    </section>
</x-master>
