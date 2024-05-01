@extends("components.layout")

@section("body")
    <div class="space-y-8">

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @include("components.job-card")
                @include("components.job-card")
                @include("components.job-card")
            </div>
        </section>

        <section>
            <x-section-heading>Tag</x-section-heading>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>



    </div>



@endsection
