var ctx = document.getElementById("myChart3");

var data3 = {
    labels: ["Rémi", "Paul", "Sarah"],
    datasets: [
        {
            label: "expediteurs les plus efficaces",
            data: [0.2, 0.2, 0.4],
            backgroundColor: [
                "#CDA776",
                "#989898",
                "#CB252B",
                "#E39371",
                "#1D7A46"
            ],
            borderWidth: [1, 1, 1, 1, 1]
        }
    ]
}// nb représente le nombre de startups que le Pôle Fintech a reçu dans leurs secteurs respectifs durant les 2 dernières années.
var myChart = new Chart(ctx, {
    type: 'pie',
    data: data3,
    options: {}
});