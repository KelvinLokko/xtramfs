<!-- resources/views/layouts/app.blade.php -->
@extends('layouts.app')

@section('content')

  <div id="content-page" class="content-page">
        <div class="container-fluid">
          <div class="row">
           
            <div class="col-md-6 col-lg-3">
              <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Card and Header -->
              <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                   <!-- Header with Centered Dropdown Filters -->
      <div class="iq-header-title">
          <h4 class="card-title">XtraMFS Grafana Report - Specify Period</h4>
      </div>
    <div class="iq-card-header d-flex justify-content-between">
      <div class="iq-card-header-toolbar d-flex align-items-center justify-content-center w-100">
          <!-- Center-aligned Dropdown Filters -->
         <div class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex">

                <form method="GET">
                <!-- CSRF Token (if using Laravel) -->
                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

                <div style="display: flex; align-items: center; gap: 15px;">
                    <!-- Sender ID -->
                    <div>
                        <label for="sender_id">Sender ID</label>
                        <select id="sender_id" name="sender_id" style="border-radius: 20px; padding: 5px;">
                            <option value="">Select Sender ID</option>
                            <option value="1">Sender 1</option>
                            <option value="2">Sender 2</option>
                        </select>
                    </div>

                    <!-- Discount Type -->
                    <div>
                        <label for="discount_type">Discount Type</label>
                        <select id="discount_type" name="discount_type" style="border-radius: 20px; padding: 5px;">
                            <option value="percentage">Percentage (%)</option>
                            <option value="flat">Flat Amount</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status">Status</label>
                        <select id="status" name="status" style="border-radius: 20px; padding: 5px;">
                            <option value="">Select Status</option>
                            <option value="PENDING">PENDING</option>
                            <option value="DELVRD">DELVRD</option>
                            <option value="UNDELIV">UNDELIV</option>
                            <option value="FAILED">FAILED</option>
                            <option value="REJECTED">REJECTED</option>
                            <option value="EXPIRED">EXPIRED</option>
                            <option value="ACK/">ACK/</option>
                            <option value="DELETED">DELETED</option>
                            <option value="NACK/">NACK/</option>
                            <option value="UNKNOWN">UNKNOWN</option>
                        </select>
                    </div>

                    <!-- From Date -->
                    <div>
                        <label for="from_date">From</label>
                        <input id="from_date" name="from_date" type="date" style="border-radius: 20px; padding: 5px;">
                    </div>

                    <!-- To Date -->
                    <div>
                        <label for="to_date">To</label>
                        <input id="to_date" name="to_date" type="date" style="border-radius: 20px; padding: 5px;">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
                            Submit
                        </button>
                    </div>
                </div>
            </form>  
        </div>
        </div>         
        </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Sender ID</th>
                        <th scope="col">Msisdn</th>
                        <th scope="col">Status</th>
                        <th scope="col">Message Content</th>
                        <th scope="col">Submit Time</th>
                        <th scope="col">Delivery Time</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- @if($messages)

                    @dd($messages);
                    @endif -->
                    <!-- @if (isset($messages)) -->
                        @foreach ($messages as $message)
                        {{ dd($message['submit_uuid']) }}
                        <tr>
                            <td>{{ $message['submit_uuid'] }}</td>
                            <td>{{ $message['message_id'] }}</td>
                            <td>{{ $message['msisdn'] }}</td>
                            <td>{{ $message['delivery_status'] }}</td>
                            <td>{{ $message['message'] }}</td>
                            <td>{{ date('Y-m-d H:i:s', strtotime($message['submit_time'])) }}</td>
                            <td>{{ date('Y-m-d H:i:s', strtotime($message['delivery_time'])) }}</td>
                        </tr>
                        
                        @endforeach
                    <!-- @endif -->
                    
                    </tbody>
            </table>
        </div>



@endsection