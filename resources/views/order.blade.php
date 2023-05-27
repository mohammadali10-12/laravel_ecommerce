@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">

                <tbody>
                    <tr>
                        <td colspan="1">Price</td>
                        <td>{{$data}} Rupees</td>
                    </tr>
                    <tr>
                        <td colspan="1">Tax</td>
                        <td>0 Rupees</td>
                    </tr>
                    <tr>
                        <td colspan="1">Delivary</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td colspan="1">Total Amount</td>
                        <td>{{$data+100}}</td>
                    </tr>
                </tbody>
            </table>
            <form action="]">
                <div class="mb-3">
                    <textarea name="" id="" cols="50" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Payment method</label>
                    <p> <input type="radio" name="payment" id="exampleInputPassword1"><span> Online Payment</span></p>
                    <p> <input type="radio" name="payment" id="exampleInputPassword1"><span> EMI Payment </span></p>
                    <p> <input type="radio" name="payment" id="exampleInputPassword1"><span> Cash On Delivery</span></p>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
</div>

@endsection