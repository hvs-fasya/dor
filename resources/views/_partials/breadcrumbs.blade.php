<ol class="breadcrumb">
    <li><a href="/">Главная</a></li>
    @foreach($breadcrumbs as $key => $crumb)
        @if(isset($crumb['active']) && ($crumb['active'] == true))
            <li class="active">{{ $crumb['label'] }}</li>
        @else
            <li><a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a></li>
        @endif
    @endforeach
</ol>