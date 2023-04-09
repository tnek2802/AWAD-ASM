@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="card shadow">
        <div class="card-body" style="display:grid">
        <table>
            <th>
                <h3 style="text-decoration:underline">Shopping Cart</h3>
            </th>
            <tr>
                <td colspan="2">
                    <div class="col-md-5">
                        <img src="" alt="image">
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <h3>Product Name</h3>
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <h3>Product Price</h3>
                    </div>
                </td>
                <td colspan="2"> 
                    <div class="col-md-10">
                        <h3>Product Size</h3>
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <button class="btn btn-danger">Remove</button>
                    </div>
                </td>
            </tr>
        </table>
        </div>
    </div>
</div>
@endsection