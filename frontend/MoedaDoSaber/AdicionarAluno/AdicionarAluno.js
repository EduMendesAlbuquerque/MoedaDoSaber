document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");
  const cancelarBtn = document.querySelector(".cancelar");

  cancelarBtn.addEventListener("click", () => {
    form.reset();
  });

  form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const aluno = document.getElementById("aluno").value.trim();
    const matricula = document.getElementById("matricula").value.trim();
    const curso = document.getElementById("curso").value.trim();
    const statusCurso = document.getElementById("status").value.trim();

    if (!aluno || !matricula || !curso || !statusCurso) {
      alert("Por favor, preencha todos os campos.");
      return;
    }

    try {
      const response = await fetch("http://localhost:81/v1/aluno", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          aluno: aluno,
          matricula: parseInt(matricula),
          curso: curso,
          statusCurso: statusCurso
        })
      });

      if (!response.ok) {
        const errorData = await response.json();
        console.error("Erro ao criar aluno:", errorData);
        alert("Erro ao criar aluno. Veja o console para detalhes.");
        return;
      }

      const data = await response.json();
      console.log("Aluno criado com sucesso:", data);
      alert(`Aluno ${data.data.aluno} criado com sucesso!`);

      form.reset();
    } catch (error) {
      console.error("Erro na requisição:", error);
      alert("Erro na comunicação com o servidor.");
    }
  });
});
