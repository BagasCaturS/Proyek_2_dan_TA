for (var i = 1; i < universitas.length; i++) {
    document.getElementById("select1").innerHTML += `
    <option value="${i}">${universitas[i].nama_univ}</option>
    `;
    document.getElementById("select2").innerHTML += `
    <option value="${i}">${universitas[i].nama_univ}</option>
    `;
    document.getElementById("select3").innerHTML += `
    <option value="${i}">${universitas[i].nama_univ}</option>
    `;
}

function item1(a) {
    var select1 = document.getElementById("select1").value;
    if (a == select1) {
        document.getElementById("univ1").innerHTML = universitas[a].nama_univ
        document.getElementById("lokasi1").innerHTML = universitas[a].lokasi
        document.getElementById("wrld_rank1").innerHTML = universitas[a].wrld_rank
        document.getElementById("teaching1").innerHTML = universitas[a].teaching
        document.getElementById("research1").innerHTML = universitas[a].research
        document.getElementById("citation1").innerHTML = universitas[a].citation
        document.getElementById("outlook1").innerHTML = universitas[a].int_outlook
        //hapus di bawah bila gagal
        // document.getElementById("point1").innerHTML = universitas[a].pointsNeeded
        var parameter = "teaching";
        var currentPoints = teaching1;
        var result = calculatePointsToNextRank(parameter, currentPoints);
        console.log(result);
    

    }
 
}

function item2(a) {
    var select2 = document.getElementById("select2").value;
    if (a == select2) {
        document.getElementById("univ2").innerHTML = universitas[a].nama_univ
        document.getElementById("lokasi2").innerHTML = universitas[a].lokasi
        document.getElementById("wrld_rank2").innerHTML = universitas[a].wrld_rank
        document.getElementById("teaching2").innerHTML = universitas[a].teaching
        document.getElementById("research2").innerHTML = universitas[a].research
        document.getElementById("citation2").innerHTML = universitas[a].citation
        document.getElementById("outlook2").innerHTML = universitas[a].int_outlook
        
    } else {
        document.getElementById("select3").selectedIndex = 0;
        document.getElementById("img3").src = universitas[0].image
        document.getElementById("price3").innerHTML = ""
        document.getElementById("desc3").innerHTML = ''
        document.getElementById("brand3").innerHTML = ""

    }
}

function item3(a) {
    var select3 = document.getElementById("select3").value;
    if (a == select3) {
        document.getElementById("univ3").innerHTML = universitas[a].nama_univ
        document.getElementById("lokasi3").innerHTML = universitas[a].lokasi
        document.getElementById("wrld_rank3").innerHTML = universitas[a].wrld_rank
        document.getElementById("teaching3").innerHTML = universitas[a].teaching
        document.getElementById("research3").innerHTML = universitas[a].research
        document.getElementById("citation3").innerHTML = universitas[a].citation
        document.getElementById("outlook3").innerHTML = universitas[a].int_outlook
    } else {
        document.getElementById("select3").selectedIndex = 0;
        document.getElementById("img3").src = universitas[0].image
        document.getElementById("price3").innerHTML = ""
        document.getElementById("desc3").innerHTML = ''
        document.getElementById("brand3").innerHTML = ""

    }
}
// ini juga
function calculatePointsToNextRank(parameter, currentPoints) {
    var nextRankPoints = parseInt(universitas[1][parameter]);
    var pointsNeeded = nextRankPoints - currentPoints;
  
    if (pointsNeeded <= 0) {
      return "Congratulations! You have already reached the next rank in this parameter.";
    } else {
      return "You need " + pointsNeeded + " more points to reach the next rank in this parameter.";
    }
}

// Array to store parameter values
var teachingValues = [];
var researchValues = [];
var citationValues = [];
var outlookValues = [];

// Loop through the universitas array and extract parameter values
for (var i = 1; i < universitas.length; i++) {
  teachingValues.push(universitas[i].teaching);
  researchValues.push(universitas[i].research);
  citationValues.push(universitas[i].citation);
  outlookValues.push(universitas[i].int_outlook);
}

// Create a bar chart for Teaching parameter
var ctxTeaching = document.getElementById('chartTeaching').getContext('2d');
new Chart(ctxTeaching, {
  type: 'bar',
  data: {
    labels: teachingValues.map((_, i) => `University ${i + 1}`),
    datasets: [{
      label: 'Teaching',
      data: teachingValues,
      backgroundColor: 'rgba(75, 192, 192, 0.6)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

// Create a bar chart for Research parameter
var ctxResearch = document.getElementById('chartResearch').getContext('2d');
new Chart(ctxResearch, {
  type: 'bar',
  data: {
    labels: researchValues.map((_, i) => `University ${i + 1}`),
    datasets: [{
      label: 'Research',
      data: researchValues,
      backgroundColor: 'rgba(255, 99, 132, 0.6)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

// Create a bar chart for Citation parameter
var ctxCitation = document.getElementById('chartCitation').getContext('2d');
new Chart(ctxCitation, {
  type: 'bar',
  data: {
    labels: citationValues.map((_, i) => `University ${i + 1}`),
    datasets: [{
      label: 'Citation',
      data: citationValues,
      backgroundColor: 'rgba(54, 162, 235, 0.6)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

// Create a bar chart for Outlook parameter
var ctxOutlook = document.getElementById('chartOutlook').getContext('2d');
new Chart(ctxOutlook, {
  type: 'bar',
  data: {
    labels: outlookValues.map((_, i) => `University ${i + 1}`),
    datasets: [{
      label: 'Outlook',
      data: outlookValues,
      backgroundColor: 'rgba(153, 102, 255, 0.6)',
      borderColor: 'rgba(153, 102, 255, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

  
