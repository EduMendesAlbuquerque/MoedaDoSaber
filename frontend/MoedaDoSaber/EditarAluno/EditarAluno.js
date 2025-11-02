document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const alunoId = urlParams.get("id"); // Pega o id do aluno da URL

    const form = document.querySelector("form");
    const inputAluno = document.getElementById("aluno");
    const inputMatricula = document.getElementById("matricula");
    const inputCurso = document.getElementById("curso");
    const inputStatus = document.getElementById("status");

    // Função para carregar os dados atuais do aluno
    async function carregarAluno() {
        try {
            const response = await fetch(`http://localhost:81/v1/aluno/${alunoId}`);
            if (!response.ok) throw new Error("Erro ao buscar aluno.");

            const { data } = await response.json();
            if (!data) throw new Error("Aluno não encontrado.");

            // Preenche o formulário com os dados atuais
            inputAluno.value = data.aluno || "";
            inputMatricula.value = data.matricula || "";
            inputCurso.value = data.curso || "";
            inputStatus.value = data.statusCurso || "";
        } catch (err) {
            console.error(err);
            alert("Erro ao carregar dados do aluno.");
        }
    }

    // Função para enviar atualização do aluno
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const atualizado = {
            aluno: inputAluno.value.trim(),
            matricula: inputMatricula.value.trim(),
            curso: inputCurso.value.trim(),
            statusCurso: inputStatus.value.trim()
        };

        try {
            const response = await fetch(`http://localhost:81/v1/aluno/${alunoId}`, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(atualizado)
            });

            if (!response.ok) throw new Error("Erro ao atualizar aluno.");

            alert("Aluno atualizado com sucesso!");
            window.location.href = "../TelaInicial/TelaInicial.html"; // Volta para a tela inicial
        } catch (err) {
            console.error(err);
            alert("Falha ao atualizar aluno.");
        }
    });

    carregarAluno();
});
