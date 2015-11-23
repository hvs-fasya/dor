<section class="similar-articles">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="content-head"> Похожие проблемы:</div>
            </div>
        </div>
        <div class="row">
            @foreach (array_chunk($links ,ceil(count($links)/2)) as $link)
                <div class="col-xs-6">
                    <ul class="similar-articles-list">
                        @foreach ($link as $l)
                           <li> <a href="/{{ $l['url'] }}"> <i class='fa fa-newspaper-o'></i> {{ $l['keyword'] }}</a> </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>