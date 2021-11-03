@extends('layouts.main')
@section('title') Заказ выгрузки - @parent @stop
@section('content')

    <div class="col" style="width: 100%">
        <h1>Заказ на выгрузку новостей</h1>
        @include('inc.message')
        <form action="" method="post">
            @csrf
            <label for="customername">Имя заказчика<b style="color: red">*</b></label><br>
            <input type="text" placeholder="имя заказчика" name="customername" id="customername" value="{{ old('customername') }}"><br><br>

            <label for="customerphone">Номер телефона заказчика<b style="color: red">*</b></label><br>
            <input type="tel" placeholder="тел.заказчика" name="customerphone" id="customerphone" value="{{ old('customerphone') }}"><br><br>

            <label for="customeremail">Email заказчика<b style="color: red">*</b></label><br>
            <input type="tel" placeholder="Email заказчика" name="customeremail" id="customeremail" value="{{ old('customeremail') }}"><br><br>

            <label for="dataorder">Предмет заказа<b style="color: red">*</b></label><br>
            <select name="dataorder" id="dataorder">
                <option value="Новости категории за период">Новости категории за период</option>
                <option value="Новости автора за период">Новости автора за период</option>
            </select><br><br>

            <button>Заказать</button>
        </form>
        <br>
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>Заказы выгрузок</h4>
                <table width="100%">
                    <thead>
                    <tr>
                        <th>Имя заказчика</th>
                        <th>Телефон заказчика</th>
                        <th>Email заказчика</th>
                        <th>Предмет заказа</th>
                        <th>Дата заказа</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ordersUploadList as $key=>$value)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$value['customerphone']}}</td>
                            <td>{{$value['customeremail']}}</td>
                            <td>{{$value['dataorder']}}</td>
                            <td>{{now()->format('d-m-Y H:i')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{--@dd($ordersUploadList)--}}
@endsection
