<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase" style="margin-top: 10px">サービス案内</h4>
                <h5 class="text-white uppercase">Services</h5>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="{{ asset('images/service.jpg') }}" alt="" class="img-responsive" />
        </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Services</h3>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">Home <i>/</i> Services</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>


    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 bmargin">
                    <ul class="side-nav-list">
                        <li><a href="{{ url('/service1') }}" class="active"><i class="fa fa-angle-right"></i> &nbsp;SES/請負開発 </a></li>
                        <li><a href="{{ url('/service2') }}"><i class="fa fa-angle-right"></i> &nbsp;IT導入支援 </a></li>
                        <li><a href="{{ url('/service3') }}"><i class="fa fa-angle-right"></i> &nbsp;日本留学ナビ運営 </a></li>
                        <li><a href="{{ url('/service4') }}"><i class="fa fa-angle-right"></i> &nbsp;EC事業</a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="col-md-12 bmargin"> <img src="{{ asset('images/ser01.jpg') }}" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">SES/請負開発</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>受託開発やパッケージの開発で成長した実践力のあるエンジニアを、ご提案させていただきます。</p>
                        <br />
                        <h5 class="text-yellow">開発スキル</h5>

                        <div class="skills">
                            <div class="col-left">開発言語：</div><div>JAVA、VB.Net、C#.NET、ASP.Net、PHP、C/C++、VB 等</div>
                            <div class="col-left">データベース：</div><div>Oracle、MS-SQL、DB2、MySQL、PostgreSQL</div>
                            <div class="col-left">OS：</div><div>Windows、Windows Server、UNIX、Linux、Solaris</div>
                            <div class="col-left">得意分野：</div><div>各種WEBシステム</div>
                        </div>
                    </div>
                    <!--end item-->
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
</x-guest-layout>
