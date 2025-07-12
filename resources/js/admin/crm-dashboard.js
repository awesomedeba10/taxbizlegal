import ApexCharts from "apexcharts";
import {
    Chart,
    DoughnutController,
    ArcElement,
    Tooltip,
    Legend,
} from "chart.js";

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initDashboard);
} else {
    initDashboard();
}

function initDashboard() {
    renderSparklineChart({
        url: "/internal/ops/charts/fetch-revenue",
        chartElementId: "crm-total-revenue",
        totalElementId: "total-revenue-amount",
        percentageElementId: "total-revenue-percentage",
        label: "Revenue",
        unit: "₹"
    });

    renderSparklineChart({
        url: "/internal/ops/charts/fetch-clients",
        chartElementId: "crm-total-clients",
        totalElementId: "total-clients-count",
        percentageElementId: "total-clients-percentage",
        color: "rgb(35, 183, 229)",
        label: "Clients",
    });

    renderSparklineChart({
        url: "/internal/ops/charts/fetch-leads",
        chartElementId: "crm-total-leads",
        totalElementId: "total-leads-count",
        percentageElementId: "total-leads-percentage",
        color: "rgb(245, 184, 73)",
        label: "Leads",
    });

    renderSparklineChart({
        url: "/internal/ops/charts/fetch-conversion",
        chartElementId: "crm-conversion-ratio",
        totalElementId: "total-conversion-percentage",
        percentageElementId: "total-conversion-change",
        color: "rgb(38, 191, 148)",
        label: "Conversion %",
        unit: '%'
    });

    loadLeadsStatusChart();
    renderLeadsByServiceChart();
}

function renderSparklineChart({
    url,
    chartElementId,
    totalElementId,
    percentageElementId,
    color = "rgb(132, 90, 223)",
    label = "Metric",
    unit = null,
}) {
    const payload = getQueryParam("payload");
    if (payload) {
        url += `?payload=${encodeURIComponent(payload)}`;
    }

    fetch(url)
        .then((res) => res.json())
        .then(({ graph, total, percentage }) => {
            const chartOptions = {
                chart: {
                    type: "line",
                    height: 40,
                    width: 100,
                    sparkline: { enabled: true },
                },
                stroke: {
                    curve: "smooth",
                    width: 1.5,
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.9,
                        opacityTo: 0.9,
                        stops: [0, 98],
                    },
                },
                series: [{ name: label, data: graph }],
                tooltip: { enabled: false },
                colors: [color],
                yaxis: { show: false },
                xaxis: { show: false },
            };

            document.getElementById(chartElementId).innerHTML = "";
            const chart = new ApexCharts(
                document.querySelector(`#${chartElementId}`),
                chartOptions
            );
            chart.render();

            if (totalElementId) {
                let formatted = total.toLocaleString();
                if (unit === "₹") {
                    formatted = "₹" + formatted;
                } else if (unit === "%") {
                    formatted = formatted + "%";
                }
                document.getElementById(totalElementId).textContent = formatted;
            }

            if (percentageElementId) {
                const el = document.getElementById(percentageElementId);
                el.textContent = `${percentage > 0 ? "+" : ""}${percentage}%`;
                el.classList.toggle("text-success", percentage > 0);
                el.classList.toggle("text-danger", percentage <= 0);
            }
        })
        .catch((err) =>
            console.error(`Error loading chart: ${chartElementId}`, err)
        );
}

function loadLeadsStatusChart() {
    const payload = getQueryParam("payload");
    let url = "/internal/ops/charts/fetch-leads-status";
    if (payload) {
        url += `?payload=${encodeURIComponent(payload)}`;
    }

    fetch(url)
        .then((res) => res.json())
        .then(({ total, data, percentages }) => {
            document.querySelector("#total-leads-count-heading").textContent =
                total.toLocaleString();

            const statusClasses = {
                basic_details_submitted: "",
                payment_pending: "bg-info",
                payment_initiated: "bg-warning",
                payment_received: "bg-success",
            };

            const progressContainer =
                document.querySelector(".progress-stacked");
            progressContainer.innerHTML = "";

            for (const status in percentages) {
                const div = document.createElement("div");
                div.className = `progress-bar ${statusClasses[status]}`;
                div.style.width = `${percentages[status]}%`;
                div.setAttribute("role", "progressbar");
                div.setAttribute("aria-valuenow", percentages[status]);
                div.setAttribute("aria-valuemin", "0");
                div.setAttribute("aria-valuemax", "100");
                progressContainer.appendChild(div);
            }

            // Lead Breakdown List
            document.querySelector(".crm-deals-status").innerHTML = `
                <li class="primary">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>Basic Details Submitted</div>
                        <div class="fs-12 text-muted">${data.payment_received} Leads</div>
                    </div>
                </li>
                <li class="info">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>Payment Pending</div>
                        <div class="fs-12 text-muted">${data.payment_pending} Leads</div>
                    </div>
                </li>
                <li class="warning">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>Payment Initiated</div>
                        <div class="fs-12 text-muted">${data.payment_initiated} Leads</div>
                    </div>
                </li>
                <li class="success">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>Payment Received</div>
                        <div class="fs-12 text-muted">${data.basic_details_submitted} Leads</div>
                    </div>
                </li>
            `;
        });
}

function renderLeadsByServiceChart() {
    const payload = getQueryParam("payload");
    let url = "/internal/ops/charts/fetch-leads-by-service";
    if (payload) {
        url += `?payload=${encodeURIComponent(payload)}`;
    }

    fetch(url)
        .then((res) => res.json())
        .then(({ labels, data, total }) => {
            document.querySelector(
                ".lead-source-value span.fs-25"
            ).textContent = total.toLocaleString();

            const ctx = document
                .getElementById("leads-source")
                .getContext("2d");
            const backgroundColors = [
                "rgb(132, 90, 223)",
                "rgb(35, 183, 229)",
                "rgb(245, 184, 73)",
                "rgb(38, 191, 148)",
            ];

            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: "Revenue by Service",
                            data: data,
                            backgroundColor: backgroundColors,
                            borderWidth: 0,
                        },
                    ],
                },
                options: {
                    cutout: "70%",
                    plugins: {
                        legend: { display: false },
                        tooltip: { enabled: true },
                    },
                },
            });

            // Update legend values below the chart
            const legends = document.querySelectorAll(".crm-lead-legend");
            console.log(labels)
            legends.forEach((el, index) => {
                el.textContent = labels[index] || "-";
                el.closest(".col").querySelector(".fs-16").textContent =
                    data[index]?.toLocaleString() || "0";
            });
        });
}

function getQueryParam(name) {
    const url = new URL(window.location.href);
    return url.searchParams.get(name);
}

/* Revenue Analytics Chart */
var options = {
    series: [
        {
            type: "line",
            name: "Profit",
            data: [
                {
                    x: "Jan",
                    y: 100,
                },
                {
                    x: "Feb",
                    y: 210,
                },
                {
                    x: "Mar",
                    y: 180,
                },
                {
                    x: "Apr",
                    y: 454,
                },
                {
                    x: "May",
                    y: 230,
                },
                {
                    x: "Jun",
                    y: 320,
                },
                {
                    x: "Jul",
                    y: 656,
                },
                {
                    x: "Aug",
                    y: 830,
                },
                {
                    x: "Sep",
                    y: 350,
                },
                {
                    x: "Oct",
                    y: 350,
                },
                {
                    x: "Nov",
                    y: 210,
                },
                {
                    x: "Dec",
                    y: 410,
                },
            ],
        },
        {
            type: "line",
            name: "Revenue",
            chart: {
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: "#000",
                    opacity: 0.1,
                },
            },
            data: [
                {
                    x: "Jan",
                    y: 180,
                },
                {
                    x: "Feb",
                    y: 620,
                },
                {
                    x: "Mar",
                    y: 476,
                },
                {
                    x: "Apr",
                    y: 220,
                },
                {
                    x: "May",
                    y: 520,
                },
                {
                    x: "Jun",
                    y: 780,
                },
                {
                    x: "Jul",
                    y: 435,
                },
                {
                    x: "Aug",
                    y: 515,
                },
                {
                    x: "Sep",
                    y: 738,
                },
                {
                    x: "Oct",
                    y: 454,
                },
                {
                    x: "Nov",
                    y: 525,
                },
                {
                    x: "Dec",
                    y: 230,
                },
            ],
        },
        {
            type: "area",
            name: "Sales",
            chart: {
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: "#000",
                    opacity: 0.1,
                },
            },
            data: [
                {
                    x: "Jan",
                    y: 200,
                },
                {
                    x: "Feb",
                    y: 530,
                },
                {
                    x: "Mar",
                    y: 110,
                },
                {
                    x: "Apr",
                    y: 130,
                },
                {
                    x: "May",
                    y: 480,
                },
                {
                    x: "Jun",
                    y: 520,
                },
                {
                    x: "Jul",
                    y: 780,
                },
                {
                    x: "Aug",
                    y: 435,
                },
                {
                    x: "Sep",
                    y: 475,
                },
                {
                    x: "Oct",
                    y: 738,
                },
                {
                    x: "Nov",
                    y: 454,
                },
                {
                    x: "Dec",
                    y: 480,
                },
            ],
        },
    ],
    chart: {
        height: 350,
        animations: {
            speed: 500,
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 8,
            left: 0,
            blur: 3,
            color: "#000",
            opacity: 0.1,
        },
    },
    colors: [
        "rgb(132, 90, 223)",
        "rgba(35, 183, 229, 0.85)",
        "rgba(119, 119, 142, 0.05)",
    ],
    dataLabels: {
        enabled: false,
    },
    grid: {
        borderColor: "#f1f1f1",
        strokeDashArray: 3,
    },
    stroke: {
        curve: "smooth",
        width: [2, 2, 0],
        dashArray: [0, 5, 0],
    },
    xaxis: {
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            formatter: function (value) {
                return "$" + value;
            },
        },
    },
    tooltip: {
        y: [
            {
                formatter: function (e) {
                    return void 0 !== e ? "$" + e.toFixed(0) : e;
                },
            },
            {
                formatter: function (e) {
                    return void 0 !== e ? "$" + e.toFixed(0) : e;
                },
            },
            {
                formatter: function (e) {
                    return void 0 !== e ? e.toFixed(0) : e;
                },
            },
        ],
    },
    legend: {
        show: true,
        customLegendItems: ["Profit", "Revenue", "Sales"],
        inverseOrder: true,
    },
    title: {
        text: "Revenue Analytics with sales & profit (USD)",
        align: "left",
        style: {
            fontSize: ".8125rem",
            fontWeight: "semibold",
            color: "#8c9097",
        },
    },
    markers: {
        hover: {
            sizeOffset: 5,
        },
    },
};
document.getElementById("crm-revenue-analytics").innerHTML = "";
var chart = new ApexCharts(
    document.querySelector("#crm-revenue-analytics"),
    options
);
chart.render();

function revenueAnalytics() {
    chart.updateOptions({
        colors: [
            "rgba(" + myVarVal + ", 1)",
            "rgba(35, 183, 229, 0.85)",
            "rgba(119, 119, 142, 0.05)",
        ],
    });
}
/* Revenue Analytics Chart */

Chart.register(DoughnutController, ArcElement, Tooltip, Legend);
Chart.defaults.elements.arc.borderWidth = 0;
Chart.defaults.datasets.doughnut.cutout = "85%";

