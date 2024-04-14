const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})


document.addEventListener('DOMContentLoaded', function() {
    const notificationIcon = document.querySelector('.notification');
    const modal = document.getElementById('notificationModal');
    const closeButton = document.querySelector('.close');

    // Exemples de notifications (à remplacer par vos données dynamiques)
    const notifications = [
        '-Une nouvelle tâche a été ajoutée par un membre de l\'équipe',
        '-Un projet vient d\'être validé par le client',
        '-Vous avez un nouveau message de la part de Jeanne',
    ];

    // Fonction pour afficher les notifications dans le modal
    function displayNotifications() {
        const notificationList = document.getElementById('notificationList');
        notificationList.innerHTML = '';
        notifications.forEach(notification => {
            const listItem = document.createElement('li');
            listItem.textContent = notification;
            notificationList.appendChild(listItem);
        });
    }

    // Ouvrir le modal lors du clic sur l'icône de notification
    notificationIcon.addEventListener('click', function() {
        displayNotifications();
        modal.style.display = 'block';
    });

    // Fermer le modal lors du clic sur le bouton de fermeture
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Fermer le modal lors du clic en dehors de la zone du modal
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});

// Récupérer l'élément où afficher la date
const dateElement = document.getElementById('date');

// Obtenir la date actuelle
const dateDuJour = new Date();

// Options pour formatter la date en français
const options = { year: 'numeric', month: 'long', day: 'numeric' };

// Formatter la date selon les options
const dateFormatee = dateDuJour.toLocaleDateString('fr-FR', options);

// Insérer la date dans l'élément HTML
dateElement.textContent = `${dateFormatee}`;
