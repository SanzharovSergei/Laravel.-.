<x-master>
    <section class="section about-us" style="margin-top: 45px;">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-7">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification">
                            <p class="title">Welcome to our website</p>
                            <p class="subtitle">Mauris vulputate dolor sit amet nibh</p>
                            <p><img src="images/banner.jpg" alt="" class="image image-full" /></p>
                            <div class="content ">
                                <br>
                                <p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. </p>
                                <p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
                                <p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-danger">
                        <p class="title">Breaking news</p>
                        <p class="subtitle">Top rank of our new web site, thanks to Laravel 8 framework !</p>
                        <div class="content">
                        </div>
                    </article>
                </div>
            </div>
            <div class="tile is-vertical is-5">
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification">
                            @foreach($articles as $article)
                                <div class="content">
                                    <a href="/articles/{{ $article->id }}" style="text-decoration: none;"><p class="title no_link_dec">{{ $article->title }}</p></a>
                                    <p class="subtitle"><a style="text-decoration: none;" href="/articles/{{ $article->id }}">{{ $article->excerpt }}</a></p>
                                </div>
                            @endforeach
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification">
                        <h2 class="subtitle">Etiam rhoncus</h2>
                        <ul class="content">
                            <li><a href="#">Semper quis egetmi dolore</a></li>
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare hendrerit lectus</a></li>
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                        </ul>
                    </article>
                    <article class="tile is-child notification">
                        <h2 class="subtitle">Integer gravida</h2>
                        <ul class="content">
                            <li><a href="#">Semper quis egetmi dolore</a></li>
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                            <li><a href="#">Amet turpis feugiat amet</a></li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>
</x-master>
