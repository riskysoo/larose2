@extends('frontend.layouts.base')

@section('title', 'About Us')

@section('content')
    <!-- Start blog details section -->
    <section class="blog__details--section section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog__details--wrapper">
                        <div class="entry__blog">
                            <div class="blog__post--header mb-30">
                                <h2 class="post__header--title mb-15">{{ $blog->title }}
                                </h2>
                                <p class="blog__post--meta">Posted by : {{ $blog->author }} / On :
                                    {{ $blog->created_at->isoFormat('dddd, D MMMM Y') }} / Tags :
                                    <a class="blog__post--meta__link" href="blog-details.html">{{ $blog->tags }}</a>
                                </p>
                            </div>
                            <div class="blog__thumbnail mb-30">
                                <img class="blog__thumbnail--img border-radius-10"
                                    src="{{ asset('storage/' . $blog->image) }}" alt="blog-img">
                            </div>
                            <div class="blog__details--content">
                                <h3 class="blog__details--content__subtitle mb-25">{{ $blog->description }}</h3>
                                <p class="blog__details--content__desc mb-20">{!! $blog->content !!}</p>
                                {{-- <p class="blog__details--content__desc mb-30"> Vel ipsa officiis nobis eveniet omnis
                                    consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus
                                    nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea,
                                    dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut
                                    accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.
                                </p>
                                <blockquote class="blockquote__content bg__gray--color mb-30">
                                    <p class="blockquote__content--desc">Quisque semper nunc vitae erat pellentesque, ac
                                        placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi,
                                        tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut
                                        eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu
                                        scelerisque scelerisque.</p>
                                </blockquote>
                                <p class="blog__details--content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias
                                    accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci
                                    quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui
                                    ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa
                                    reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam
                                    corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos
                                    nostrum odio, cumque impedit.</p> --}}
                            </div>
                        </div>
                        <div class="blog__tags--social__media d-flex align-items-center justify-content-between">
                            <div class="blog__tags--media d-flex align-items-center">
                                <label class="blog__tags--media__title"> Tags :</label>
                                <ul class="d-flex">
                                    <?php
                                    $tags = $blog->tags; // String containing tags separated by commas
                                    $tagArray = explode(',', $tags); // Split the string into an array
                                    
                                    foreach ($tagArray as $tag) {
                                        echo '<li class="blog__tags--media__list"><a class="blog__tags--media__link" href="blog-details.html">' . $tag . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="blog__social--media d-flex align-items-center">
                                <label class="blog__social--media__title">Social Share :</label>
                                <ul class="d-flex">
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank"
                                            href="https://www.facebook.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                viewBox="0 0 7.667 16.524">
                                                <path data-name="Path 237"
                                                    d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                    transform="translate(-960.13 -345.407)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://twitter.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                viewBox="0 0 16.489 13.384">
                                                <path data-name="Path 303"
                                                    d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                    transform="translate(-951.23 -1140.849)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://www.skype.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.482" height="16.481"
                                                viewBox="0 0 16.482 16.481">
                                                <path data-name="Path 284"
                                                    d="M879,926.615a4.479,4.479,0,0,1,.622-2.317,4.666,4.666,0,0,1,1.676-1.677,4.482,4.482,0,0,1,2.317-.622,4.577,4.577,0,0,1,2.43.678,7.58,7.58,0,0,1,5.048.961,7.561,7.561,0,0,1,3.786,6.593,8,8,0,0,1-.094,1.206,4.676,4.676,0,0,1,.7,2.411,4.53,4.53,0,0,1-.622,2.326,4.62,4.62,0,0,1-1.686,1.686,4.626,4.626,0,0,1-4.756-.075,7.7,7.7,0,0,1-1.187.094,7.623,7.623,0,0,1-7.647-7.647,7.46,7.46,0,0,1,.094-1.187A4.424,4.424,0,0,1,879,926.615Zm4.107,1.714a2.473,2.473,0,0,0,.282,1.234,2.41,2.41,0,0,0,.782.829,5.091,5.091,0,0,0,1.215.565,15.981,15.981,0,0,0,1.582.424q.678.151.979.235a3.091,3.091,0,0,1,.593.235,1.388,1.388,0,0,1,.452.348.738.738,0,0,1,.16.481.91.91,0,0,1-.48.753,2.254,2.254,0,0,1-1.271.321,2.105,2.105,0,0,1-1.253-.292,2.262,2.262,0,0,1-.65-.838,2.42,2.42,0,0,0-.414-.546.853.853,0,0,0-.584-.17.893.893,0,0,0-.669.283.919.919,0,0,0-.273.659,1.654,1.654,0,0,0,.217.782,2.456,2.456,0,0,0,.678.763,3.64,3.64,0,0,0,1.158.574,5.931,5.931,0,0,0,1.639.235,5.767,5.767,0,0,0,2.072-.339,2.982,2.982,0,0,0,1.356-.961,2.306,2.306,0,0,0,.471-1.431,2.161,2.161,0,0,0-.443-1.375,3.009,3.009,0,0,0-1.2-.894,10.118,10.118,0,0,0-1.865-.575,11.2,11.2,0,0,1-1.309-.311,2.011,2.011,0,0,1-.8-.452.992.992,0,0,1-.3-.744,1.143,1.143,0,0,1,.565-.97,2.59,2.59,0,0,1,1.488-.386,2.538,2.538,0,0,1,1.074.188,1.634,1.634,0,0,1,.622.49,3.477,3.477,0,0,1,.414.753,1.568,1.568,0,0,0,.4.594.866.866,0,0,0,.574.2,1,1,0,0,0,.706-.254.828.828,0,0,0,.273-.631,2.234,2.234,0,0,0-.443-1.253,3.321,3.321,0,0,0-1.158-1.046,5.375,5.375,0,0,0-2.524-.527,5.764,5.764,0,0,0-2.213.386,3.161,3.161,0,0,0-1.422,1.083A2.738,2.738,0,0,0,883.106,928.329Z"
                                                    transform="translate(-878.999 -922)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Skype</span>
                                        </a>
                                    </li>
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://www.youtube.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                viewBox="0 0 16.49 11.582">
                                                <path data-name="Path 321"
                                                    d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                    transform="translate(-951.269 -1359.8)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="related__post--area mb-50">
                            <div class="section__heading text-center mb-20">
                                <h2 class="section__heading--maintitle h3">Related Articles</h2>
                            </div>
                            <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n28">
                                <div class="col mb-28">
                                    <div class="related__post--items">
                                        <div class="related__post--thumbnail border-radius-10 mb-20">
                                            <a class="display-block" href="blog-details.html"><img
                                                    class="related__post--img display-block border-radius-10"
                                                    src="assets/img/blog/related-post1.webp" alt="related-post"></a>
                                        </div>
                                        <div class="related__post--text">
                                            <h3 class="related__post--title mb-5"><a class="related__post--title__link"
                                                    href="blog-details.html">Post With Gallery</a></h3>
                                            <span class="related__post--deta">September 17, 2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="related__post--items">
                                        <div class="related__post--thumbnail border-radius-10 mb-20">
                                            <a class="display-block" href="blog-details.html"><img
                                                    class="related__post--img display-block border-radius-10"
                                                    src="assets/img/blog/related-post2.webp" alt="related-post"></a>
                                        </div>
                                        <div class="related__post--text">
                                            <h3 class="related__post--title mb-5"><a class="related__post--title__link"
                                                    href="blog-details.html">Post With Vedio</a></h3>
                                            <span class="related__post--deta">September 17, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment__box">
                            <div class="reviews__comment--area2 mb-50">
                                <h3 class="reviews__comment--reply__title mb-25">Recent Comment</h3>
                                <div class="reviews__comment--inner">
                                    <div class="reviews__comment--list d-flex">
                                        <div class="reviews__comment--thumbnail">
                                            <img src="assets/img/other/comment-thumb1.webp" alt="comment-thumbnail">
                                        </div>
                                        <div class="reviews__comment--content ">
                                            <h4 class="reviews__comment--content__title2">Jakes on</h4>
                                            <span class="reviews__comment--content__date2">January 11, 2022</span>
                                            <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem
                                                nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor
                                                facilis accusantium amet pariatur, non eius!</p>
                                            <button class="comment__reply--btn primary__btn" type="submit">Reply</button>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--list margin__left d-flex">
                                        <div class="reviews__comment--thumbnail">
                                            <img src="assets/img/other/comment-thumb2.webp" alt="comment-thumbnail">
                                        </div>
                                        <div class="reviews__comment--content">
                                            <h4 class="reviews__comment--content__title2">Jakes on</h4>
                                            <span class="reviews__comment--content__date2">January 11, 2022</span>
                                            <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem
                                                nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor
                                                facilis accusantium amet pariatur, non eius!</p>
                                            <button class="comment__reply--btn primary__btn" type="submit">Reply</button>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--list d-flex">
                                        <div class="reviews__comment--thumbnail">
                                            <img src="assets/img/other/comment-thumb3.webp" alt="comment-thumbnail">
                                        </div>
                                        <div class="reviews__comment--content">
                                            <h4 class="reviews__comment--content__title2">Jakes on</h4>
                                            <span class="reviews__comment--content__date2">January 11, 2022</span>
                                            <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem
                                                nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor
                                                facilis accusantium amet pariatur, non eius!</p>
                                            <button class="comment__reply--btn primary__btn" type="submit">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews__comment--reply__area">
                                <form action="#">
                                    <h3 class="reviews__comment--reply__title mb-20">Leave A Comment</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mb-20">
                                            <label>
                                                <input class="reviews__comment--reply__input" placeholder="Your Name...."
                                                    type="text">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-20">
                                            <label>
                                                <input class="reviews__comment--reply__input" placeholder="Your Email...."
                                                    type="email">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-20">
                                            <label>
                                                <input class="reviews__comment--reply__input"
                                                    placeholder="Your Website...." type="text">
                                            </label>
                                        </div>
                                        <div class="col-12 mb-15">
                                            <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...."></textarea>
                                        </div>

                                    </div>
                                    <button class="primary__btn text-white" data-hover="Submit"
                                        type="submit">SUBMIT</button>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__sidebar--widget left widget__area">
                        {{-- <div class="single__widget widget__bg">
                            <h2 class="widget__title position__relative h3">Search</h2>
                            <form class="widget__search--form" action="#">
                                <label>
                                    <input class="widget__search--form__input" placeholder="Search by" type="text">
                                </label>
                                <button class="widget__search--form__btn" type="submit">
                                    Search
                                </button>
                            </form>
                        </div> --}}
                        {{-- <div class="single__widget widget__bg">
                            <h2 class="widget__title position__relative h3">Categories</h2>
                            <ul class="widget__categories--menu">
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img"
                                            src="{{ asset('ggm/assets/img/product/small-product1.webp') }}"
                                            alt="categories-img">
                                        <span class="widget__categories--menu__text">Denim Jacket</span>
                                        <svg class="widget__categories--menu__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product2.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product3.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product4.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Western denim</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product5.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img"
                                            src="assets/img/product/small-product2.webp" alt="categories-img">
                                        <span class="widget__categories--menu__text">Oversize Cotton</span>
                                        <svg class="widget__categories--menu__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product2.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product3.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product4.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Western denim</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product5.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img"
                                            src="assets/img/product/small-product3.webp" alt="categories-img">
                                        <span class="widget__categories--menu__text">Dairy & chesse</span>
                                        <svg class="widget__categories--menu__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product2.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product3.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product4.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Western denim</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product5.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img"
                                            src="assets/img/product/small-product4.webp" alt="categories-img">
                                        <span class="widget__categories--menu__text">Shoulder Bag</span>
                                        <svg class="widget__categories--menu__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product2.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product3.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product4.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Western denim</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product5.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img"
                                            src="assets/img/product/small-product5.webp" alt="categories-img">
                                        <span class="widget__categories--menu__text">Denim Jacket</span>
                                        <svg class="widget__categories--menu__arrowdown--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                                transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product2.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product3.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product4.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Western denim</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                                href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img"
                                                    src="assets/img/product/small-product5.webp" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title position__relative h3">Article Lainnya</h2>
                            <div class="articl__post--inner">

                                @forelse ($randomBlogs as $blog)
                                    <div class="articl__post--items d-flex align-items-center">
                                        <div class="articl__post--items__thumbnail position__relative">
                                            <a class="articl__post--items__link display-block"
                                                href="{{ route('blogdetail', $blog->slug) }}">
                                                <img class="articl__post--items__img display-block"
                                                    src="{{ asset('storage/' . $blog->image) }}" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="articl__post--items__content">
                                            <h4 class="articl__post--items__content--title"><a
                                                    href="{{ route('blogdetail', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h4>
                                            <span class="meta__deta text__secondary">
                                                {{ $blog->created_at->isoFormat('dddd, D MMMM Y') }}</span>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title position__relative h3">Tags</h2>
                            <ul class="widget__tagcloud">
                                <?php
                                $tags = explode(',', $blog->tags);
                                foreach ($tags as $tag) {
                                    echo '<li class="widget__tagcloud--list"><a class="widget__tagcloud--link">' . $tag . '</a></li>';
                                }
                                ?>
                                {{-- <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Wooden</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Chair</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Modern</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Fabric </a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Shoulder </a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Winter</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Accessories</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="{{ route('blogdetail', $blog->slug) }}">Dress </a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog details section -->
@endsection
