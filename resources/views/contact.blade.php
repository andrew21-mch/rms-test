@extends('layouts.app')
@section('content')
<!-- Wrapper container -->
<div class="container py-4" style="width:85%">
  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" action="/contactUs" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-3 align-content-center" style="text-align:center; margin-top:1%">
        <img src="../images/contactt.png" alt="Image" alt="image" style="width:100%; border-radius:50%">
      </div>
      <div class="col-md-8">
        <!-- Name input -->
          <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" name="name" />
            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
          </div>

          <!-- Email address input -->
          <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" name="email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
          </div>

          <!-- Message input -->
          <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required" name="message"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
          </div>
        </div>
    </div>
    
    <div class="d-grid">
      <center><button class="btn btn-primary btn-lg justify-content-center " id="submitButton" type="submit" style="width:120px">Submit</button></center>
    </div>

    @if(Session::has('mail_status'))
    <div class="alert alert-success" role="alert">
          <p>{{ Session::get('mail_status')}}</p>
      </div>
      {{Session::forget("mail_status")}}
      @endif
      

  </form>

</div>
@endsection

<!-- SB Forms JS -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
