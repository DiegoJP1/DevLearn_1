document.addEventListener('DOMContentLoaded', function() {
    function sendMessage() {
        var userInput = document.getElementById('user-message').value.trim();

        if (userInput === '') {
            return;
        }

        var userMessageObj = {
            sender: 'user',
            message: userInput
        };

        displayMessage(userMessageObj);
        setTimeout(function() {
            var chatbotResponse;
            if (userInput.toLowerCase().includes('hola')) {
                chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';
            } else if (userInput.toLowerCase().includes('adios')) {
                chatbotResponse = '¡Hasta luego! ¿Tienes alguna otra pregunta, ' + username + '?';
            }
            else if (userInput.toLowerCase().includes('certificado')) {
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if (userInput.toLowerCase().includes('certificacion')) {
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIFICADO')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('Certificado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CErtificado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERtificado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTificado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIficado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIFicado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIFIcado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIFICado')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIFICAdo')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
            else if(userInput.toLowerCase().includes('CERTIFICADo')){
                chatbotResponse = 'al completaste exitosamente el curso se envia certificado deberia que estar en tu correo si no te a llegado porfavor revisa en spam y si sigue sin llegarte contacta a tu profesor para reenviartelo ' + username;
            }
           else if (userInput.toLowerCase().includes('Hola')) {
                chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                else if (userInput.toLowerCase().includes('HOla')) {
                    chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                    else if (userInput.toLowerCase().includes('HOLa')) {
                        chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                        else if (userInput.toLowerCase().includes('HOLA')) {
                            chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                            else if (userInput.toLowerCase().includes('hello')) {
                                chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                                else if (userInput.toLowerCase().includes('dias')) {
                                    chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                                    else if (userInput.toLowerCase().includes('tardes')) {
                                        chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                                        else if (userInput.toLowerCase().includes('noches')) {
                                            chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                                            else if (userInput.toLowerCase().includes('holi')) {
                                                chatbotResponse = '¡Hola! ¿Cómo puedo ayudarte, ' + username + '?';}
                                                else if (userInput.toLowerCase().includes('matricula')) {
                                                    chatbotResponse = 'Puedes ver tu matricula en nuestra seccion de configuraciones -> usuario, en caso de que no la encuentres avisame hare lo posible por ayudarte ' + username;}
                                                    else if (userInput.toLowerCase().includes('matriculacion')) {
                                                        chatbotResponse = 'Puedes ver tu matricula en nuestra seccion de configuraciones -> usuario, en caso de que no la encuentres avisame hare lo posible por ayudarte ' + username;}
                                                        else if (userInput.toLowerCase().includes('calificacion')) {
                                                            chatbotResponse = 'Puedes ver tu calificacion en configuracion -> cursos -> calificaciones ' + username;}
                                                            else if (userInput.toLowerCase().includes('calificaciones')) {
                                                                chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}
                                                                else if (userInput.toLowerCase().includes('Calificaciones')) {
                                                                    chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}
                                                                    else if (userInput.toLowerCase().includes('Calificacion')) {
                                                                        chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}
                                                                        else if (userInput.toLowerCase().includes('CAlificaciones')) {
                                                                            chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}
                                                                            else if (userInput.toLowerCase().includes('CALificaciones')) {
                                                                                chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}
                                                                                else if (userInput.toLowerCase().includes('CALIficaciones')) {
                                                                                    chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}
                                                                                    else if (userInput.toLowerCase().includes('CALIFicaciones')) {
                                                                                        chatbotResponse = 'puedes ver tu calificacion en configuracion -> cursos -> calificaciones  ' + username + '?';}



                else {
                chatbotResponse = 'Lo siento, no entendí tu pregunta. ¿Puedes ser más específico, ' + username + '?';
            }


            var chatbotMessageObj = {
                sender: 'chatbot',
                message: chatbotResponse
            };

            displayMessage(chatbotMessageObj);
        }, 1000);

        document.getElementById('user-message').value = '';
    }

    function displayMessage(messageObj) {
        var chatWrapper = document.querySelector('.chat-wrapper');
        if (!chatWrapper) return;

        var messageBoxWrapper = document.createElement('div');
        messageBoxWrapper.classList.add('message-box-wrapper');

        var messageBox = document.createElement('div');
        messageBox.classList.add('message-box');
        messageBox.textContent = messageObj.message;

        var messageWrapper = document.createElement('div');
        messageWrapper.classList.add('message-wrapper');

        if (messageObj.sender === 'user') {
            messageWrapper.classList.add('user-message');
            messageWrapper.classList.add('reverse');
        } else if (messageObj.sender === 'chatbot') {
            messageWrapper.classList.add('chatbot-message');
        }

        messageBoxWrapper.appendChild(messageBox);
        messageWrapper.appendChild(messageBoxWrapper);
        chatWrapper.appendChild(messageWrapper);

        var storedMessages = JSON.parse(localStorage.getItem('userMessages')) || [];
        storedMessages.push(messageObj);
        localStorage.setItem('userMessages', JSON.stringify(storedMessages));
    }

    function loadUserMessages() {
        var chatWrapper = document.querySelector('.chat-wrapper');
        if (!chatWrapper) return;

        var storedMessages = JSON.parse(localStorage.getItem('userMessages')) || [];

        storedMessages.forEach(function(messageObj) {
            displayMessage(messageObj);
        });
    }
    loadUserMessages();
    document.getElementById('user-message').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });
});