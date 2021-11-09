<form action="{{route('searchSimple')}}" autocomplete="off" method="GET" style="margin-left: 10%">
    <div class="row">
        <div class="col-xs-10 offset-xs-4">
            <div class="form-group">
                <input type="text" class="form-control" name="q" value="" required id="result">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post"  onclick="search_data()">Поиск</a>
                {{-- <input class="btn btn-info" type="button" value="Искать" onclick="search_data()">--}}
            </div>
        </div>
    </div>
</form>
