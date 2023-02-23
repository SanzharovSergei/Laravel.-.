<x-master>
    <div class="container" style="margin: 70px auto 20px;">
        <div class="columns is-marginless is-centered mt-2 mb-2">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>

                    <div class="card-content">
                        You are logged in!
                    </div>

                    <div class="box">
                        <a href="{{ route('articles.index', ['user' => auth()->user()->getAuthIdentifier()]) }}" class="button is-primary">Мои публикации</a>
                        <a href="{{ "/articles/create" }}" class="button is-primary">Новая публикация</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</x-master>
