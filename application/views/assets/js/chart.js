const chartLine = document.getElementById('statistique');

const lineChart = new Chart(chartLine, {
    type: 'line',
    data: {
        labels: ["2019", "2020", "2021", "2022", "2023"],
        datasets: [{
            label: 'Nombre d\'utilisateur',
            data: [75, 85, 103, 95, 127],
            fill: true,
            backgroundColor: "#333",
            tension: 0.1
        }]
    },
    options: {
        elements: {
            point: {
                pointBorderColor: "white"
            }
        },
        scales: {
            y: {
                ticks: {
                    color: "#333"
                },
                suggestedMin: 0,
                suggestedMax: 300
            },
            x: {
                tricks: {
                    color: "#333"
                }
            }
        }
    }
})