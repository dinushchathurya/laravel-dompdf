@extends('layouts.app')

@section('content')

<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
    </nav>
</div>
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Laravel DomPDF Example</h4>
    <p class="mg-b-0">DomPDF is a plug-in for PDF generation.</p>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="table-wrapper">
            <table id="invoices" class="table display responsive nowrap" style=" overflow-x:auto;">
                <thead>
                    <tr>
                        <th class="wd-20p">Invoice ID</th>
                        <th class="wd-20p">Customer Name</th>
                        <th class="wd-20p">Address</th>
                        <th class="wd-20p">Date</th>
                        <th class="wd-20p">Item</th>
                        <th class="wd-20p">Quantity</th>
                        <th class="wd-20p">Issued By</th>
                        <th class="wd-20p">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $invoice)
                    <tr>
                        <td>{{$invoice->id}}</td>
                        <td>{{$invoice->customer_name}}</td>
                        <td>{{$invoice->address}}</td>
                        <td>{{$invoice->date}}</td>
                        <td>{{$invoice->item}}</td>
                        <td>{{$invoice->quantity}}</td>
                        <td>{{$invoice->issued_by}}</td>
                        <td><a href="{{ route('invoice.download' , $invoice->id)}}"><i class="fa fa-print" style="font-size:40px;"></i></a></td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

