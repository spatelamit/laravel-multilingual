@include('includes.header')
@php
    $lang = app()->getLocale();
    $currencySymbol = session('currency_symbol', '$');
@endphp

<div class="container">
    <h1 class="my-4">{{__('lang.checkout')}}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{__('lang.Product')}}</th>
                    <th>{{__('lang.Quantity')}}</th>
                    <th>{{__('lang.Price')}}</th>
                    <th>{{__('lang.Total')}}</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach($cart as $item)
                    @php
                        $itemTotal = $item['product']->price * $item['quantity'];
                        $total += $itemTotal;
                    @endphp
                    <tr>
                        <td>{{ $item['product']->title }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $currencySymbol }}{{ number_format($item['product']->price, 2) }}</td>
                        <td>{{ $currencySymbol }}{{ number_format($itemTotal, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <h4>{{__('lang.Total')}}: {{ $currencySymbol }}{{ number_format($total, 2) }}</h4>
        </div>
        <form action="{{ url($lang.'/checkout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-success">{{__('lang.place_order')}}</button>
        </form>
    @else
        <p>{{__('lang.cart_empty')}}</p>
    @endif
</div>
@include('includes.footer')
