function sendMessage() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var botToken = '5395660536:AAERYCKuPCvSqXjb_f9ccKwvnsw0bJdCUA4';
    var chatId = '@OHWC_web_messages';

    var text = "New message from:\nName: " + name + "\nEmail: " + email + "\nSubject: " + subject + "\nMessage: " + message;

    var url = "https://api.telegram.org/bot" + botToken + "/sendMessage?text=" + encodeURIComponent(text) + "&chat_id=" + chatId;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.send();

    xhr.onload = function () {
        if (xhr.status == 200) {
            alert("Message sent successfully!");
            // Clear the form fields
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('subject').value = '';
            document.getElementById('message').value = '';
        } else {
            alert("Error sending message.");
        }
    };
}
