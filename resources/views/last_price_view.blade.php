

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
<table class="table table-bordered" id="financial-table">
    <thead>
    <tr>
        <th>id</th>
        <th>Last price</th>
        <th>Symbol 1</th>
        <th>Symbol 2</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
</table>


<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
{{--<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>--}}
{{--<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>--}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>
<script> $(function () {
        $('#financial-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://127.0.0.1:8000/last_price_view/gettable',
            columns: [{data: 'id', name: 'id'}, {data: 'last_price', name: 'last_price'}, {
                data: 'symbol1',
                name: 'symbol1'
            }, {
                data: 'symbol2',
                name: 'symbol2'
            }, {data: 'created_at', name: 'created_at'}, {data: 'updated_at', name: 'updated_at'}]
        });
    }); </script>

