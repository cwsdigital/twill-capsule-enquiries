@extends('twill::layouts.form')

@push('extra_css')
    <style>
        .cws-enquiry-details {
            padding: 1rem;
            display: grid;
            grid-template-columns: min-content auto;
            grid-column-gap: 1rem;
            grid-row-gap: 0.8rem;
        }

        .cws-enquiry-details dt {
            font-weight: bold;
        }
    </style>
@endpush

@section('contentFields')

    <dl class="cws-enquiry-details">
        <dt>Name:</dt><dd>{{ $item->name }}</dd>
        <dt>Company:</dt><dd>{{ $item->company }}</dd>
        <dt>Email:</dt><dd><a href="mailto:{{$item->email}}">{{ $item->email }}</a></dd>
        <dt>Phone:</dt><dd>{{ $item->phone }}</dd>
        <dt>Regarding:</dt><dd>{{ $item->regarding }}</dd>
        <dt>Message:</dt><dd>{!! $item->message !!}</dd>

    </dl>

    @formField('checkbox', [
    'name' => 'read',
    'label' => ( $item->read ? 'Read at '.$item->read_at->format('g:ia \\o\\n jS M').' by '.$item->reader->name : 'Mark as Read' ),
    ])

@stop
