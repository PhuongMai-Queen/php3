<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container{
            width: 900px;
            /*background-color: #444444;*/
            color: #C0C0C0;
        }
        .container .header{
            padding: 5px 10px;
            display: flow-root;
            background-color: #E53935;
            color: #2B2B2B;
            font-weight: 500;
            font-size: 12px;
        }
        .content{
            background-color: #444444;
        }
        .content .row{
            margin: 0;
            margin-bottom: 10px;
        }
        .text {
            padding: 10px;
            background-color: #2B2B2B;
            font-size: 12px;
        }
        table{
            width: 100%;
        }
        .back-color{
            background-color: #C4CDD5;
            color: #2B2B2B;
        }
        table tr:first-child{
            background-color: #C4CDD5;
            color: #2B2B2B;
        }
        tr, th ,td{
            border: 1px solid #C4CDD5 !important;
        }
        .footer{
            padding: 10px;
            background-color: #444444;
            font-size: 12px;
        }
        .footer .row{
            margin: 0;
        }
        .copy-right{
            background-color: #E53935;
        }
        .copy-right p{
            font-size: 12px;
            text-align: center;
            padding: 5px 0;
            color: #2B2B2B;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="header">
        <span class="text-left">Date: <?php echo date("Y/m/d");?></span>
    </div>
    <div class="content pl-3">
        <div class="row">
            <div class="col-4 mb-3">
                <div class="img">
                    <img src="{{URL::asset('img/logo.png')}}" width="20%">
                </div>
            </div>
            <div class="col-8 text-right">
                <span>C??ng Ty TNHH ?????u T?? v?? Ph??t Tri???n <br> C??ng Ngh??? GT</span>
            </div>
        </div>

        <div class="text">
            <p>Ch??o m???ng kh??ch h??ng {{ $order[0]->name }}<br>
            C??m ??n qu?? kh??ch ???? quan t??m v?? s??? d???ng d???ch v??? c???a Graphics Tablet</p>
            <table class="mb-2">
                <tr>
                    <th colspan="2">Th??ng tin ?????t h??ng:</th>
                </tr>
                <tr>
                    <td>Kh??ch h??ng: <strong>{{ $order[0]->name }}</strong></td>
                    <td>??i???n tho???i: <strong>{{ $order[0]->phone }}</strong></td>
                </tr>
                <tr>
                    <td>?????a ch???: <strong>{{ $order[0]->address }}</strong></td>
                    <td>Email: <strong> {{ $order[0]->email }}</strong></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th colspan="3">Th??ng tin ????n h??ng:</th>
                </tr>
                <tr>
                    <td>M?? ????n h??ng: <strong>{{ $order[0]->id_order }}</strong></td>
                    <td colspan="2">T??nh tr???ng thanh to??n: <strong>{{ $order[0]->payment_status }}</strong></td>
                </tr>
                <?php
                    foreach ($order_detail as $item){
                ?>
                <tr>
                    <td>S???n ph???m: <strong>{{ $item->product_name }}</strong></td>
                    <td>S??? l?????ng: <strong>{{ $item->quantity}}</strong></td>
                    <td>????n gi??: <strong>{{ number_format($item->price,3,".",".") }} ??</strong></td>
                </tr>
                <?php
                }
                ?>
                <tr class="back-color">
                    <td colspan="3"><strong>T???ng ti???n: {{  number_format($order[0]->total,3,".",".") }} ??</strong></td>
                </tr>
            </table>
            <tr>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-4">
                <div class="img">
                    <img src="{{URL::asset('img/logo.png')}}" width="20%">
                </div>
            </div>
            <div class="col-8">
                <p>
                    ?????a ch???: S??? 288 ???????ng Nguy???n V??n Linh, H??ng L???i, Ninh Ki???u, C???n Th??<br>
                    S??? ??i???n tho???i: +84 888 222 999<br>
                    Email: graphicstablet@gmail.com<br>
                </p>
            </div>
        </div>
    </div>
    <div class="copy-right">
       <p>??2021 - B???n quy???n thu???c v??? Graphics Tablet</p>
    </div>
</div>
</body>
</html>
