@extends('home::agency.patient.calendar_visits.layout_form')
@section('title', $calendar->visit_type->name)

@section('document')
    @include('home::agency.patient.calendar_visits.oasis_visits.start_of_care.start_of_care_form')
@endsection
