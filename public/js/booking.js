// // Fonction pour charger les détails du service
// function loadServiceDetails(serviceId) {
//     fetch(`/service/details/${serviceId}`)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Erreur lors de la récupération des détails du service');
//             }
//             return response.json();
//         })
//         .then(data => {
//             console.log('Détails du service reçus :', data); // Affichez les données reçues dans la console
            
//             // Mettez à jour l'interface avec les détails du service
//             document.getElementById('serviceName').innerText = data.title;
//             document.getElementById('serviceDescription').innerText = data.description;
//         })
//         .catch(error => {
//             console.error('Erreur fetch:', error);
//             alert('Erreur lors de la récupération des détails du service');
//         });
// }

// // Fonction pour charger les disponibilités du service
// function loadAvailabilities(serviceId) {
//     fetch(`/service/availabilities/${serviceId}`)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Erreur lors de la récupération des disponibilités');
//             }
//             return response.json();
//         })
//         .then(data => {
//             console.log('Disponibilités reçues :', data); // Affichez les données reçues dans la console

//             // Construction du calendrier (exemple basique)
//             let calendarHtml = '<h3>Calendrier de réservation</h3>';
//             calendarHtml += '<ul>';
//             data.availabilities.forEach(availability => {
//                 calendarHtml += `<li>${availability.date} - ${availability.status}</li>`;
//             });
//             calendarHtml += '</ul>';

//             // Mettez à jour l'interface avec le calendrier
//             document.getElementById('calendar').innerHTML = calendarHtml;
//         })
//         .catch(error => {
//             console.error('Erreur fetch:', error);
//             alert('Erreur lors de la récupération des disponibilités');
//         });
// }

// // Écouter le changement de sélection du service
// document.getElementById('serviceSelect').addEventListener('change', function() {
//     const serviceId = this.value;
//     if (serviceId) {
//         loadServiceDetails(serviceId); // Charger les détails du service
//         loadAvailabilities(serviceId); // Charger les disponibilités du service
//     } else {
//         // Réinitialiser l'affichage si aucun service n'est sélectionné
//         document.getElementById('serviceName').innerText = '';
//         document.getElementById('serviceDescription').innerText = '';
//         document.getElementById('calendar').innerHTML = '';
//     }
// });
