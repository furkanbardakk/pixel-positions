@extends("components.layout")

@section("body")

    <div class="space-y-8">

        <section class="text-center pt-6">

            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>

        </section>


{{--        <section class="pt-10">--}}
{{--            <x-section-heading>Featured Jobs</x-section-heading>--}}

{{--            <div class="grid lg:grid-cols-3 gap-8 mt-6">--}}
{{--                <x-job-card/>--}}
{{--                <x-job-card/>--}}
{{--                <x-job-card/>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section>
            <x-section-heading>Tag</x-section-heading>

            <div class="mt-6">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Find Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @include("components.job-card-wide")
                @include("components.job-card-wide")
                @include("components.job-card-wide")
            </div>

        </section>



    </div>



@endsection
