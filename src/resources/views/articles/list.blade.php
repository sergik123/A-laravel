<div class="row">
    <form action="{{route('searchSimple')}}" method="GET" class="search-simple">
        <div class="row">
            <div class="col-xs-10">
                <div class="form-group">
                    <input type="text" class="form-control" name="q" value="" required>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <input class="btn btn-info" type="submit" value="Искать">
                </div>
            </div>
        </div>
    </form>
</div>

@each('articles.item_partial',$items,'item')
