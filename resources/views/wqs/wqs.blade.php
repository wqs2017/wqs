<div>wqs</div>
<div>
    {{$data ['nickname']}}
</div>
<script src="https://show-resource.mumov.com/jquery-3.1.1.min.js"></script>
<script>
    $.get('http://47.88.25.41/test/wqs',function (data) {
        console.log(data);
        var json = JSON.parse(data);
        console.log(json.data.username)
    })
</script>