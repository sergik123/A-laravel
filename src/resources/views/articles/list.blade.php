 <form action="{{route('searchSimple')}}" autocomplete="off" method="GET" style="margin-left: 10%">
        <div class="row">
            <div class="col-xs-10 offset-xs-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="q" value="" required id="result">
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <input class="btn btn-info" type="submit" value="Искать" onclick="search_data('result')">
                </div>
            </div>
        </div>
    </form>

 <script>
     function search_data(search_value) {
         $.ajax({
             url: '/searching/?q=' + $('#result').val(),
             method: 'GET',
             success:function(data){
                 $("#result").val(data.result);
             }
         });
     }
 </script>

@each('articles.item_partial',$items,'item')
