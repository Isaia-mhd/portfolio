@extends("layout.app")
@section("body")

@include("layout.success")
@include("layout.error")

{{-- main home --}}
@include("components.homeItem")

{{-- about --}}
@include("components.aboutItem")

{{-- competence --}}
@include("components.competenceItem")

{{-- project --}}
@include("components.projectItem")

{{-- contact --}}
@include("components.contactItem")
@endsection
