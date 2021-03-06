@extends('admin.layout.master') 

@section('mainContent')

<section class="content">

    <div class="col-sm-12">
        <iframe src="https://drive.google.com/open?id=1iNG7dWLO6bv5wW5uthX4Elzv06EiZ0Td" width="100%" height="1000"></iframe>
        <!-- <iframe id="roundcubeFrame" width="100%" height="1000" name="roundcube" src="https://drive.google.com/open?id=1iNG7dWLO6bv5wW5uthX4Elzv06EiZ0Td"> -->
    </div>


      
</section>

<script type="text/javascript">

    var iframe = document.getElementsByTagName('iframe')[0];
var url = iframe.src;
var getData = function (data) {
    if (data && data.query && data.query.results && data.query.results.resources && data.query.results.resources.content && data.query.results.resources.status == 200) loadHTML(data.query.results.resources.content);
    else if (data && data.error && data.error.description) loadHTML(data.error.description);
    else loadHTML('Error: Cannot load ' + url);
};
var loadURL = function (src) {
    url = src;
    var script = document.createElement('script');
    script.src = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20data.headers%20where%20url%3D%22' + encodeURIComponent(url) + '%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=getData';
    document.body.appendChild(script);
};
var loadHTML = function (html) {
    iframe.src = 'about:blank';
    iframe.contentWindow.document.open();
    iframe.contentWindow.document.write(html.replace(/<head>/i, '<head><base href="' + url + '"><scr' + 'ipt>document.addEventListener("click", function(e) { if(e.target && e.target.nodeName == "A") { e.preventDefault(); parent.loadURL(e.target.href); } });</scr' + 'ipt>'));
    iframe.contentWindow.document.close();
} 
loadURL(iframe.src);
</script>
@endsection