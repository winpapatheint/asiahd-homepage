<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase" style="margin-top: 10px">新着情報</h4>
                <h5 class="text-white uppercase">News</h5>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="{{ asset('images/news.jpg') }}" alt="" class="img-responsive" />
        </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>News</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">Home <i>/</i> News</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            @foreach ($news as $key => $item)
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-holder6 bmargin">
                            <div class="post-date-box">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d') }}
                                <span>{{ \Carbon\Carbon::parse($item->created_at)->format('m, Y') }}</span>
                            </div>
                            <img src="{{ asset('images/' . $item->image) }}" class="img-responsive" />
                        </div>
                    </div>

                    <div class="col-md-8 bmargin">
                        <h5 class="uppercase less-mar1 nopadding">{{ $item->title }}</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>{!! nl2br(e($item->content)) !!}</p>
                        <br />
                    </div>
                    <!--end item-->

                    <div class="clearfix"></div><br>
                </div>
            @endforeach
        </div>
        @include('components.pagination')
    </section>
    <!--end section-->
</x-guest-layout>
