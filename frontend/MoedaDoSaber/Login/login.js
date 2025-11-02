import { AuthService } from "./AuthService.js";

const authService = new AuthService("http://localhost:81/v1");

document
  .getElementById("login-form")
  .addEventListener("submit", async function (event) {
    event.preventDefault();

    const email = document.querySelector('input[name="E-mail"]').value;
    const senha = document.querySelector('input[name="Senha"]').value;

    try {
      const response = await authService.login(email, senha);

      if (response.data && response.data.id_professor) {
        const idProfessor = response.data.id_professor;
        localStorage.setItem("id_professor", idProfessor);

        const planosResponse = await fetch("http://localhost:81/v1/plano-aula");

        if (!planosResponse.ok) {
          throw new Error("Erro ao buscar planos de aula.");
        }

        window.location.href = "../TelaInicial/TelaInicial.html";
        
      } else {
        throw new Error("ID do professor não encontrado na resposta.");
      }
    } catch (error) {
      alert(error.message);
      console.error(error);
    }
  });
