<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Pro Dmed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse"
                    data-target=".bs-navbar-collapse">
                <span>Menu</span>
            </button>
            <!-- Site name for smallar screens -->
            <a href="index.html" class="navbar-brand hidden-lg">MacBeth</a>
        </div>


        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <!--nav button--!>
             @yield('nav-button')

                    <!-- Search form -->
            @yield('search-form')

                    <!-- Links -->
            @yield('link-admin')

        </nav>

    </div>
</div>


<!-- Header starts -->
<header>
    <div class="container">
        <div class="row">

            <!-- Logo section -->
            <div class="col-md-4">
                @yield('logo')
            </div>

            <!-- Button section -->
            <div class="col-md-4">
                @yield('members-button')
            </div>

            <!-- Data section -->
            <div class="col-md-4">
                @yield('data')
            </div>

        </div>
    </div>
</header>
<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        @yield('menu')
    </div>
    <!-- Main bar -->
    <div class="mainbar">

        <!-- Page heading -->
        @yield('page-heading')
                <!-- Page heading ends -->


        <!-- Matter -->
        <div class="matter">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- Matter ends -->

    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>


<script src="{{ elixir('js/all.js') }}"></script>


<!-- Script for this page -->
<script type="text/javascript">
    $(function () {

        /* Bar Chart starts */

        var d1 = [];
        for (var i = 0; i <= 20; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 20; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);


        var stack = 0, bars = true, lines = false, steps = false;

        function plotWithOptions() {
            $.plot($("#bar-chart"), [d1, d2], {
                series: {
                    stack: stack,
                    lines: {show: lines, fill: true, steps: steps},
                    bars: {show: bars, barWidth: 0.8}
                },
                grid: {
                    borderWidth: 0, hoverable: true, color: "#777"
                },
                colors: ["#ff6c24", "#ff2424"],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: {colors: [{opacity: 0.9}, {opacity: 0.8}]}
                }
            });
        }

        plotWithOptions();

        $(".stackControls input").click(function (e) {
            e.preventDefault();
            stack = $(this).val() == "With stacking" ? true : null;
            plotWithOptions();
        });
        $(".graphControls input").click(function (e) {
            e.preventDefault();
            bars = $(this).val().indexOf("Bars") != -1;
            lines = $(this).val().indexOf("Lines") != -1;
            steps = $(this).val().indexOf("steps") != -1;
            plotWithOptions();
        });

        /* Bar chart ends */

    });


    /* Curve chart starts */

    $(function () {
        var sin = [], cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        var plot = $.plot($("#curve-chart"),
                [{data: sin, label: "sin(x)"}, {data: cos, label: "cos(x)"}], {
                    series: {
                        lines: {show: true, fill: true},
                        points: {show: true}
                    },
                    grid: {hoverable: true, clickable: true, borderWidth: 0},
                    yaxis: {min: -1.2, max: 1.2},
                    colors: ["#1eafed", "#1eafed"]
                });

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 5,
                border: '1px solid #000',
                padding: '2px 8px',
                color: '#ccc',
                'background-color': '#000',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#curve-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if ($("#enableTooltip:checked").length > 0) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                        showTooltip(item.pageX, item.pageY,
                                item.series.label + " of " + x + " = " + y);
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            }
        });

        $("#curve-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });

    });

    /* Curve chart ends */
</script>

</body>
</html>