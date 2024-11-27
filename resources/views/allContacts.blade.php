@foreach($allContacts as $contact)
    {{ $contact->name }}
    <br>
    {{ $contact->subject }}
    <br>
    {{ $contact->message }}
    <br><br>
@endforeach
