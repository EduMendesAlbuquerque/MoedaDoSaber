document.addEventListener("DOMContentLoaded", () => {
    const mainContent = document.getElementById("mainContent");
    const loading = document.getElementById("loading");
    const tabelaCorpo = document.getElementById("tabelaAlunos").querySelector("tbody");
    const btnAdicionar = document.getElementById("btnAdicionarAluno");
    const inputPesquisar = document.getElementById("inputPesquisar");

    let alunos = [];

    btnAdicionar.addEventListener("click", () => {
        window.location.href = "../AdicionarAluno/AdicionarAluno.html";
    });

    async function carregarAlunos() {
        try {
            const response = await fetch("http://localhost:81/v1/aluno");
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            const { data } = await response.json();

            // Se não houver alunos, redireciona imediatamente
            if (!data || data.length === 0) {
                window.location.replace("../SemAluno/SemAluno.html");
                return;
            }

            alunos = data;

            // Mostra a tela principal
            loading.style.display = "none";
            mainContent.style.display = "block";

            renderizarTabela(alunos);
        } catch (err) {
            console.error("Erro ao carregar alunos:", err);
            loading.innerText = "Falha ao carregar alunos.";
        }
    }

    function renderizarTabela(listaAlunos) {
        tabelaCorpo.innerHTML = "";

        if (listaAlunos.length === 0) {
            tabelaCorpo.innerHTML = '<tr><td colspan="7">Nenhum aluno encontrado.</td></tr>';
            return;
        }

        listaAlunos.forEach(aluno => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
        <td>${aluno.id}</td>
        <td>${aluno.aluno}</td>
        <td>${aluno.matricula}</td>
        <td>${aluno.curso}</td>
        <td>${aluno.statusCurso ? aluno.statusCurso.toUpperCase() : ''}</td>
        <td><button class="edit-btn" data-id="${aluno.id}"><img src="../Imagens/Editar.png" alt="Editar"></button></td>
        <td><button class="delete-btn" data-id="${aluno.id}"><img src="../Imagens/Lixeira.png" alt="Excluir"></button></td>
      `;
            tabelaCorpo.appendChild(tr);
        });

        adicionarEventosBotoes();
    }

    function adicionarEventosBotoes() {
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", async () => {
                const id = button.dataset.id;
                if (confirm("Deseja realmente excluir este aluno?")) {
                    await fetch(`http://localhost:81/v1/aluno/${id}`, { method: "DELETE" });
                    carregarAlunos();
                }
            });
        });

        document.querySelectorAll(".edit-btn").forEach(button => {
            button.addEventListener("click", () => {
                window.location.href = `../EditarAluno/EditarAluno.html?id=${button.dataset.id}`;
            });
        });
    }

    inputPesquisar.addEventListener("input", () => {
        const filtro = inputPesquisar.value.toLowerCase().trim();
        const filtrados = alunos.filter(a =>
            a.aluno.toLowerCase().includes(filtro) || a.matricula.includes(filtro)
        );
        renderizarTabela(filtrados);
    });

    carregarAlunos();
});
