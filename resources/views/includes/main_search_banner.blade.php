{{-- @include('includes/header_new') --}}
<div class="hero-landing-area" style="background-image:url(assets/images/bg/bg-4.jpg);">
    <div class="container">
        <div class="landing-hero-content text-center">
            <h1 class="title">Endless movies, TV shows, and more.</h1>
            <h4 class="sub-title">Enjoy anywhere anytime.</h4>
            <div class="create-membership-wrap">
                <form action="{{ url('/search/') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input placeholder="Type movie or show name..." name="input" type="text" autocomplete="off">
                    <input class="landing-btn-style-search" type="button" value="Search"></input>
                </form>
            </div>
        </div>
    </div>
</div>
