document.addEventListener('DOMContentLoaded', function() {
    var botMessages = JSON.parse(localStorage.getItem('botMessages')) || [];
    var lastBotMessage = botMessages.length > 0 ? botMessages[botMessages.length - 1].message : '';
    var chatsContainer = document.getElementById('chats');
    if (chatsContainer) {
        var messageBox = document.createElement('div');
        messageBox.classList.add('message-box');

        var profileImage = document.createElement('img');
        profileImage.src = 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80';
        profileImage.alt = 'profile image';

        var messageContent = document.createElement('div');
        messageContent.classList.add('message-content');

        var messageHeader = document.createElement('div');
        messageHeader.classList.add('message-header');

        var name = document.createElement('div');
        name.classList.add('name');
        name.textContent = 'Stephanie';

        var starCheckbox = document.createElement('div');
        starCheckbox.classList.add('star-checkbox');

        var starInput = document.createElement('input');
        starInput.type = 'checkbox';
        starInput.id = 'star-1';

        var starLabel = document.createElement('label');
        starLabel.setAttribute('for', 'star-1');

        var starSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        starSvg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        starSvg.setAttribute('width', '20');
        starSvg.setAttribute('height', '20');
        starSvg.setAttribute('viewBox', '0 0 24 24');
        starSvg.setAttribute('fill', 'none');
        starSvg.setAttribute('stroke', 'currentColor');
        starSvg.setAttribute('stroke-width', '2');
        starSvg.setAttribute('stroke-linecap', 'round');
        starSvg.setAttribute('stroke-linejoin', 'round');
        starSvg.classList.add('feather', 'feather-star');

        var starPolygon = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
        starPolygon.setAttribute('points', '12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2');

        starSvg.appendChild(starPolygon);
        starLabel.appendChild(starSvg);
        starCheckbox.appendChild(starInput);
        starCheckbox.appendChild(starLabel);
        messageHeader.appendChild(name);
        messageHeader.appendChild(starCheckbox);
        messageContent.appendChild(messageHeader);

        var messageLine = document.createElement('p');
        messageLine.classList.add('message-line');
        messageLine.textContent = lastBotMessage;

        messageContent.appendChild(messageLine);
        messageBox.appendChild(profileImage);
        messageBox.appendChild(messageContent);
        chatsContainer.appendChild(messageBox);
        console.log(botMessages)
    } else {
        console.error('Elemento con ID "chats" no encontrado.');
    }
});
