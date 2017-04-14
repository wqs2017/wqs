<html>
<head>
    <title>MU秀场</title>
    {{--js&css--}}

    <link rel="stylesheet" href="{{ URL::asset('/') }}css/index.css">
    <script src="/js/jquery-3.1.1.min.js"></script>
</head>
<body>

<script language="JavaScript" src="/js/index.js"></script>
@include('show.parts.header')

@include($page)

@include('show.parts.footer')
</body>
</html>