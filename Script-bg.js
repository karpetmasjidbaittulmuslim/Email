document.addEventListener("DOMContentLoaded", function () {
    emailjs.init("Fi_LC9NIpyV-XLM1C"); // Ganti dengan Public Key EmailJS kamu

    document.getElementById("form").addEventListener("submit", function (event) {
        event.preventDefault();

        emailjs.send("service_l1f9lir", "template_q5kj27p", {
            from_name: document.getElementById("from_name").value,
            to_name: document.getElementById("to_name").value,
            message: document.getElementById("message").value
        }).then(function (response) {
            alert("✅ Email berhasil dikirim!");
            document.getElementById("form").reset();
        }, function (error) {
            alert("❌ Gagal mengirim email.");
        });
    });
});
