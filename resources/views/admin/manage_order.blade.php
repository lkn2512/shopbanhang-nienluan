@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-md-3">
        <div class="input-group">
            <button type="button" class="btn btn-dark" data-mdb-ripple-init>
                <i class="fas fa-search"></i>
            </button>
            <div class="form-outline" data-mdb-input-init>
                <input type="search" id="form1" class="form-control" placeholder="search" />
            </div>
        </div>
    </div>
    <div class="col-md-4 offset-md-2">
        <h3 class="title-content">Danh sách đơn hàng</h3>
    </div>
    <div class="col-md-3">
        <a href="{{URL::to('/manage-order')}}"> <button type="button" class="btn btn-secondary refesh-page" data-mdb-ripple-init style="float: right;"><i class="fa-solid fa-arrows-rotate"></i> Tải lại trang</button></a>
    </div>
</div>
<div class="table-agile-info">
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="color: black;">Tên khách đặt hàng</th>
                <th>Tổng tiền</th>
                <th>Tình trạng</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_order as $key =>$order)
            <tr>
                <td>{{$order->shipping_name}}</td>
                <td>{{number_format($order->order_total).'đ'}}</td>
                <td>{{$order->order_status}}</td>
                <td>
                    <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="btn-detail-view"><i class="fa-solid fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<footer class="panel-footer">
    <div class="row">
        <div class="col-sm-3 offset-sm-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>


@endsection