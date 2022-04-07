@extends('template.app')

@section('content')
<div class="intro-y flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Dashboard
    </h2>
</div>  

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2">
            <div class="grid grid-cols-12 gap-12 mt-5">
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-microscope text-green-400 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$penelitians->count()}}</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Penelitian</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-calendar-days text-orange-500 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$pkms->count()}}</div>
                                    <div class="text-base text-right text-gray-600 mt-1">PKM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-receipt text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$hkis->count()}}</div>
                                    <div class="text-base text-right text-gray-600 mt-1">HKI</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-file-invoice text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$insentifs->count()}}</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Insentif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="intro-y flex items-center h-10 mt-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Statistik
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2">
            <div class="grid grid-cols-12 gap-12 mt-5">
                <div class="col-span-12 md:col-span-6 box intro-x">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 text-center justify-center">
                        <h2 class="font-medium text-base">Statistik Hibah Pertahun</h2>
                        <select class="input border ml-auto">
                            @foreach ($tahun as $t) 
                            <option value="{{$t}}">{{$t}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="p-5" id="pie-chart">
                        <div class="preview">
                            <canvas id="pie-chart-widget" height="200"></canvas>
                        </div>
                        <div class="source-code hidden">
                            <button data-target="#copy-pie-chart" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                            <div class="overflow-y-auto h-64 mt-3">
                                <pre class="source-preview" id="copy-pie-chart"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagcanvas id=&quot;pie-chart-widget&quot; height=&quot;200&quot;HTMLCloseTagHTMLOpenTag/canvasHTMLCloseTag </code> </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 box intro-x">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 text-center justify-center">
                        <h2 class="font-medium text-base">Statistik Jumlah Hibah Pertahun</h2>
                        <select class="input border ml-auto">
                            @foreach ($tahun as $t) 
                            <option value="{{$t}}">{{$t}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="p-5" id="vertical-bar-chart">
                        <div class="preview">
                            <canvas id="vertical-bar-chart-widget" height="200"></canvas>
                        </div>
                        <div class="source-code hidden">
                            <button data-target="#copy-vertical-bar-chart" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                            <div class="overflow-y-auto h-64 mt-3">
                                <pre class="source-preview" id="copy-vertical-bar-chart"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagcanvas id=&quot;vertical-bar-chart-widget&quot; height=&quot;200&quot;HTMLCloseTagHTMLOpenTag/canvasHTMLCloseTag </code> </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(!empty($panel))
<div class="intro-y flex items-center h-10 mt-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Baru Diposting
    </h2>
</div>  
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2">
            <div class="grid grid-cols-12 gap-12 mt-5">
                {!!$panel!!}
            </div>
        </div>
    </div>
</div>
@endif 

<div class="modal" id="large-modal-size-preview">

</div>

@endsection

@section('lib-script')
<script src="{{ asset('js/chartjs/Chart.min.js') }}"></script>
@endsection

@section('line-script')
<script>    
    // if ($('#pie-chart-widget').length) {
        let ctx = $('#pie-chart-widget')[0].getContext('2d')
        let myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Penelitian", "PKM", "Insentif", "HKI"],
                datasets: [{
                    data: [15, 10, 5 ,4],
                    backgroundColor: ["#FF8B26", "#FFC533", "#285FD3", "#4bde81"],
                    hoverBackgroundColor: ["#FF8B26", "#FFC533", "#285FD3","#4bde81"],
                    borderWidth: 5,
                    borderColor: "#fff"
                }]
            }
        });
    // };

    if ($('#vertical-bar-chart-widget').length) {
        const ctx = $('#vertical-bar-chart-widget');
        const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Penelitian', 'PKM', 'Insentif', 'HKI'],
            datasets: [{
                label: 'Total Dana Hibah',
                data: [11000000, 5000000, 3000000, 900000],
                backgroundColor: ["#FF8B26", "#FFC533", "#285FD3", "#4bde81"],
                borderColor: ["#FF8B26", "#FFC533", "#285FD3", "#4bde81"],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            return 'Rp.' + value
                        }
                    }
                }]
            },
            legend: {
                display: false
            },
        }
        });
    };

    myPieChart.data.datasets[0].data = [3, 3, 3 ,3];
    myPieChart.update();

    $('').click(function (e) { 
        e.preventDefault();
        
    });
</script>
@endsection