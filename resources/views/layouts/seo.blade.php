@section('head-tag')
<title>{{$seo->title}}</title>
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">
<meta name="robots" content="index, follow">
<meta name="twitter:title" content="{{$seo->twitter_title}}">
<meta name="twitter:description" content="{{$seo->twitter_description}}">
<meta property="og:title" content="{{$seo->site_name}}">
<meta property="og:description" content="{{$seo->description}}">
<meta property="og:url" content="{{$seo->site_url}}">
@endsection