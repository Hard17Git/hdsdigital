// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        if (colors) {
            colors = JSON.parse(colors);
            return colors.map(function (value) {
                var newValue = value.replace(" ", "");
                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(
                        newValue
                    );
                    if (color) return color;
                    else return newValue;
                } else {
                    var val = value.split(",");
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(
                            document.documentElement
                        ).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        } else {
            console.warn('data-colors atributes not found on', chartId);
        }
    }
}

// Grafik Profit
var chartColumnColors = getChartColorsArray("grafik_profit");
if (chartColumnColors) {
    var options = {
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '45%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Pemasukan',
            data: [
                1500000, 
                1750000, 
                500000, 
                2550000, 
                1750000, 
                350000, 
                450000, 
                750000, 
                3500000, 
                2500000, 
                1750000, 
                890000, 
            ]
        }, {
            name: 'Pengeluaran',
            data: [
                1000000, 
                1150000, 
                650000, 
                2500000, 
                500000, 
                1250000, 
                130000, 
                1780000, 
                1500000, 
                500000, 
                150000, 
                50000, 
            ]
        }, {
            name: 'Net Profit',
            data: [
                500000, 
                600000, 
                1500000, 
                4500000, 
                700000, 
                670000, 
                112500, 
                1500000, 
                167000, 
                1780000, 
                1105600, 
                1523400, 
            ]
        }],
        colors: chartColumnColors,
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        },
        grid: {
            borderColor: '#f1f1f1',
        },
        fill: {
            opacity: 1

        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "Rp" + val + " ,-"
                }
            }
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#grafik_profit"),
        options
    );

    chart.render();
}