<h1>You have a new message from {{$email->name}}:</h1>

<h4>Name: </h4>
<p>
{{ $email->name }}
</p>

<h2>Email: </h2>
<p>
{{ $email->email }}
</p>

<h2>Message:</h2>
<p>
{{ $email->message }}
</p>