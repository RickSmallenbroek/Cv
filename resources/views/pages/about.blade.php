<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
    <div class="w-100">
        <h1 class="mb-0">{{$about->where('for', 'personName')->first()->content}}
        </h1>
        <div class="subheading mb-5">
            <a href="mailto:{{$about->where('for', 'personMail')->first()->content}}">
                {{$about->where('for', 'personMail')->first()->content}}</a>
        </div>
        <p class="lead mb-5">{{$about->where('for', 'personAbout')->first()->content}}</p>
        <div class="social-icons">
            @if($about->where('for', 'personGithub')->first()->active === 1)
            <a href="{{$about->where('for', 'personGithub')->first()->content}}">
                <i class="fab fa-github"></i>
            </a>
            @endif
            @if($about->where('for', 'personStack')->first()->active === 1)
            <a href="{{$about->where('for', 'personStack')->first()->content}}">
                <i class="fab fa-stack-overflow"></i>
            </a>
                @endif
            @if($about->where('for' , 'personFacebook')->first()->active === 1)
            <a href="{{$about->where('for', 'personFacebook')->first()->content}}">
                <i class="fab fa-facebook-f"></i>
            </a>
                @endif
        </div>
    </div>
</section>

<hr class="m-0">