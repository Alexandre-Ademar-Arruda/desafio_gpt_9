document.getElementById("formOrcamento").addEventListener("submit", function (e) {
    e.preventDefault(); // Impede o envio imediato

    const nome = document.getElementById("nome").value;
    const origem = document.getElementById("origem").value;
    const destino = document.getElementById("destino").value;

    const checkboxes = document.querySelectorAll('input[name="itens[]"]:checked');
    const moveis = Array.from(checkboxes).map(checkbox => `✅ ${checkbox.value}`).join("\n");

    if (!nome || !origem || !destino || checkboxes.length === 0) {
        alert("Por favor, preencha todos os campos!");
        return;
    }

    // Crie a mensagem formatada
    const mensagem = `Olá!\nQuero um orçamento para mudança:\n🧑 Nome: ${nome}\n📍 Origem: ${origem}\n📦 Destino: ${destino}\n📋 LISTA DE ITENS:\n${moveis}\n\nℹ️ Se precisar de mais alguma informação conte comigo.\n`;
    
    const numeroWhatsApp = "5511995424085";
    const linkZap = `https://api.whatsapp.com/send?phone=${numeroWhatsApp}&text=${encodeURIComponent(mensagem)}`;

    // Submeta o formulário manualmente após gerar o zap
    this.submit(); // Envia o formulário
    window.open(linkZap, "_blank"); // Abre o WhatsApp
});

