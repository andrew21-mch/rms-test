@extends('layouts.layout')
@section('content')
<!-- Wrapper container -->
<div class="container py-4">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" action="/contactMe" method="get">
    <center><h1> Contact Us</h1></center>

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
    <div class="d-grid">
      <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
    </div>

  </form>

</div>

<!-- SB Forms JS -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
