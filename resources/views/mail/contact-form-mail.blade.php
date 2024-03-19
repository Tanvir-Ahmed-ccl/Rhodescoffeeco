<x-mail::message>
# Hi

## Someone request an even quate at {{config('app.name')}}. The Details are given below:

### Name / Company: {{ $contact->name }}
### Email Address :     {{$contact->email}}
### Phone No:      {{$contact->phone}}
### Type of Event:      {{$contact->type_of_event}}
### Date of Event:      {{$contact->date_of_event}}
### Event Location:      {{$contact->event_location}}
### No of guest expected:      {{$contact->no_of_guest}}
### How did you hear about us:      {{$contact->hear_us}}
### About Event:      {{$contact->message}}

</x-mail::message>
