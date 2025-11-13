/* ================================================
   Sunshine Hospital CRM - Dashboard Interactions
   ================================================ */

/* -----------------------------------------------
   Follow-ups Overview Chart (Chart.js)
   ----------------------------------------------- */

document.addEventListener("DOMContentLoaded", function () {

    const ctx = document.getElementById("followChart");

    if (ctx) {
        new Chart(ctx, {
            type: "bar",

            data: {
                labels: ["Dr. Lee", "Sarah", "Dr. Rogers"],
                datasets: [{
                    label: "Follow-ups",
                    data: [4, 5, 4],
                    backgroundColor: [
                        "#2B1F77",   // deep purple
                        "#164EA4",   // mid blue
                        "#0070B5"    // cyan blue
                    ],
                    borderRadius: 8,
                    maxBarThickness: 50
                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,

                scales: {
                    x: {
                        ticks: {
                            font: { size: 13 },
                            color: "#333"
                        },
                        grid: { display: false }
                    },
                    y: {
                        ticks: {
                            stepSize: 1,
                            font: { size: 12 },
                            color: "#666"
                        },
                        beginAtZero: true,
                        grid: { color: "#eee" }
                    }
                },

                plugins: {
                    legend: { display: false },

                    tooltip: {
                        backgroundColor: "#2B1F77",
                        titleColor: "#fff",
                        bodyColor: "#fff",
                        padding: 10,
                        borderRadius: 8
                    }
                },

                animation: {
                    duration: 900,
                    easing: "easeOutQuart"
                }
            }
        });
    }

});
