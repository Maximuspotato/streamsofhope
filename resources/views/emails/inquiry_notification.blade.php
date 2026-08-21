<h2>New {{ ucfirst($inquiry->type) }} Submission</h2>

<p><strong>Name:</strong> {{ $inquiry->name }}</p>
<p><strong>Email:</strong> {{ $inquiry->email }}</p>
<p><strong>Message:</strong></p>
<p>{{ $inquiry->message }}</p>

<hr>
<p>This message was submitted from the Streams of Hope website.</p>