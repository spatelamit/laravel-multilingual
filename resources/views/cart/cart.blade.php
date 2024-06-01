@include('includes.header')

<div class="container">
    <h1 class="my-4">{{__('lang.shopping_cart')}}</h1>
    @php
        $total = 0
    @endphp
    @php
        $lang = app()->getLocale();
        $currencySymbol = session('currency_symbol', '$');
    @endphp

    @if(count($cart) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{__('lang.Product')}}</th>
                    <th>{{__('lang.Quantity')}}</th>
                    <th>{{__('lang.Price')}}</th>
                    <th>{{__('lang.Total')}}</th>
                    <th>{{__('lang.Action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $productId => $item)
                        <tr>
                            <td>{{ $item['product']->title }}</td>
                            <td>
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" />
                            </td>
                            @php
                                $itemTotal = $item['product']->price * $item['quantity'];
                                $total += $itemTotal;
                            @endphp
                            <td>{{ $currencySymbol }}{{ number_format($item['product']->price, 2) }}</td>
                            <td>{{ $currencySymbol }}{{ number_format($itemTotal, 2) }}</td>
                            <td>
                                <form action="{{ url($lang . '/cart/remove') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $productId }}">
                                    <button type="submit" class="btn btn-danger">x</button>
                                </form>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <h4>{{__('lang.Total')}}: {{ $currencySymbol }}{{ number_format($total, 2) }}</h4>
            <a href="{{ url($lang . '/checkout') }}" class="btn btn-success">{{__('lang.proceed_to_checkout')}}</a>
        </div>
    @else
        <p>{{__('lang.cart_empty')}}</p>
    @endif
</div>

@include('includes.footer')
