@extends('layouts.app') 


@section('content')
<section class="pt-5 pb-5 border--bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h1>Stories Stats</h1>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>



@if (!auth()->user()->hasRole('photographer'))
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <canvas height="100" id="myChart"></canvas>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'Total',
                    data: [
                        {{ $monthly[1] }},
                        {{ $monthly[2] }},
                        {{ $monthly[3] }},
                        {{ $monthly[4] }},
                        {{ $monthly[5] }},
                        {{ $monthly[6] }},
                        {{ $monthly[7] }},
                        {{ $monthly[8] }},
                        {{ $monthly[9] }},
                        {{ $monthly[10] }},
                        {{ $monthly[11] }},
                        {{ $monthly[12] }},
                    ],
                    borderColor: 'rgba(10, 199, 172, 1)',
                    borderWidth: 1,
                    fill: 'flase',
                },
                {
                    label: 'Draft',
                    data: [
                        {{ $draft[1] }},
                        {{ $draft[2] }},
                        {{ $draft[3] }},
                        {{ $draft[4] }},
                        {{ $draft[5] }},
                        {{ $draft[6] }},
                        {{ $draft[7] }},
                        {{ $draft[8] }},
                        {{ $draft[9] }},
                        {{ $draft[10] }},
                        {{ $draft[11] }},
                        {{ $draft[12] }},
                    ],
                    borderColor: 'rgba(10, 19, 172, 1)',
                    borderWidth: 1,
                    fill: 'flase',
                },
                ]
            },
        });
    </script>
@endsection