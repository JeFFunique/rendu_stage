var ctx = document.getElementById("myChart1");
var theme = ["Finance", "Informatique", "Aeronautique", "Quantique", "Transport"] // les thèmes sont les secteurs dans lesquels travaillent les startups qui viennent consulter le pôle Fintech
var nb = [5, 2, 3, 4, 5]; // nb représente le nombre de startups que le Pôle Fintech a reçu dans leurs secteurs respectifs durant les 2 dernières années.
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: theme,
        datasets: [
            {
                backgroundColor: 'rgb(0, 0, 255)',
                data: nb
            }

        ]
    }
});