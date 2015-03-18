@extends('layout')

@section('content')
<section id="intro">
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 595.28 841.89" enable-background="new 0 0 595.28 841.89" xml:space="preserve">
            <path fill="#FFFFFF" d="M210,469c1.256-6.278-57-16-81-49s-36-62-28-99s37-96,82-137s104-53,137-48s122,45,147,117s14,137-13,163  s-35,37-33,41s10-11,18-12s15,7,16,16s3,21-8,32s-36.023,42.151-38,55c-0.5,3.25-0.75,9.25-3,7c-4.123-4.123-4.25-5.25-9.75-5  c-8.054,0.366-10,5.75-12,5.75s-7-8.75-16.25-7.75c-9.166,0.991-15.75,21.25-19.75,21.25S340,561,324,562s-17,14.5-23,15.5  s-4.964-4.632-8.25-4.5c-6.25,0.25-3.5,5.5-8.5,5.5s-4-10.25-11-10.25s-24.161,13.879-28.75,7.25C237.75,565.75,230,535,220,531  s-32-2-40-8s-36-29-35-42s10-23,15-23s36,14,41,15S208,479,210,469z M410.057,323C392.113,333,357,370,359,394s26,32,49,32.449  S452,397,459,384s-3.821-68.655-24-70C420,313,428,313,410.057,323z M325,360c-14.706-12.196-47-34-66-34s-32-1-39,17s-22,55-10,72  s42.496,38,55.248,39S335,428,339,408S333.958,367.429,325,360z M334,502c2-7,11-10,17-10s8,9,7.918,14S365,514,369,511s3-5,7-11  s5-5,0-13s-7-34-7-41s2-13-10.082-14S335,452,324,469s-16.312,46.258-9,49C323,521,332,509,334,502z"/>
            <path fill="#FFFFFF" d="M231,617c0.393-8.237,9-34,14-34s21.47-9,27.735-9S280,590,280,595.5S267,634,262,636  S230.649,624.352,231,617z"/>
            <path fill="#FFFFFF" d="M272.735,636.198C273.018,642.396,282,653,285,649s11-37,12.64-43.901S295.288,578.428,291,581  c-5,3-7,21-11,31S272.47,630.396,272.735,636.198z"/>
            <path fill="#FFFFFF" d="M302,587c2.408-7.225,13.582-17.764,19.5-18.75c6-1,14.5,0.75,19.5,2.75s1,76-2,80s-44,10-47,5s7-36,8-42  S301,590,302,587z"/>
            <path fill="#FFFFFF" d="M350,585c2.863-8.591,7-24,12-27s13-6,18,2s-2,63-4,68s-27,10-29,7S346,597,350,585z"/>
            <path fill="#FFFFFF" d="M389,558c4.505-5.631,15-1,17,5s-6,67-8,71s-12,1-14-3S385,563,389,558z"/>
        </svg>
    </div>
    <div class="learn-more-container">
        <a href="#description_what"><button type="button" class="btn btn-default btn-lg learn-more">Learn More</button></a>
    </div>
</section>
<section id="description_what">
    <h1 class="text-center">What is <span class="badaboom">Converse</span>?</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius nulla at libero eleifend pellentesque.
                    Maecenas auctor egestas odio ut tincidunt. Nunc iaculis ac erat vel euismod. Cras vel risus commodo, luctus
                    ligula sit amet, posuere sapien. Aliquam egestas blandit varius. Mauris fermentum eros tellus, ac aliquam
                    nulla consequat a. Cras a metus ac mi gravida eleifend vel in orci. Praesent vulputate purus id libero
                    posuere ultricies sit amet id lacus. Nullam feugiat ipsum ac elit convallis suscipit. Quisque quam magna,
                    finibus id auctor vitae, ultrices sit amet arcu. Aliquam enim nisl, pretium et risus ac, sollicitudin
                    egestas leo.
                </p>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius nulla at libero eleifend pellentesque.
                    Maecenas auctor egestas odio ut tincidunt.
                </p>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
@endsection