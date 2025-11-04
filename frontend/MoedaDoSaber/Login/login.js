import { AuthService } from "./AuthService.js";

const API_BASE_URL = "http://localhost:81/v1";
const authService = new AuthService(API_BASE_URL);

document.getElementById("login-form").addEventListener("submit", async (event) => {
  event.preventDefault();

  const email = document.querySelector('input[name="E-mail"]').value.trim();
  const senha = document.querySelector('input[name="Senha"]').value.trim();

  if (!email || !senha) {
    alert("Por favor, preencha todos os campos.");
    return;
  }

  try {
    // 🔹 1. Login
    const loginResponse = await authService.login(email, senha);

    if (!loginResponse?.data?.id_professor) {
      throw new Error("ID do professor não encontrado na resposta de login.");
    }

    localStorage.setItem("id_professor", loginResponse.data.id_professor);

    // 🔹 2. Buscar dados das pessoas
    const pessoaResponse = await fetch(`${API_BASE_URL}/pessoa`);
    if (!pessoaResponse.ok) {
      throw new Error("Falha ao obter dados da pessoa.");
    }

    const pessoasData = await pessoaResponse.json();

    // 🔹 3. Encontrar a pessoa logada pelo e-mail (ou ID, se preferir)
    const pessoa = pessoasData.data.find(p => p.email === email);

    if (!pessoa) {
      throw new Error("Pessoa não encontrada no sistema.");
    }

    const tipo = pessoa.tipo_de_pessoa?.trim().toLowerCase();
    console.log("Valor recebido de tipo_de_pessoa:", tipo);

    // 🔹 4. Redirecionar conforme o tipo de pessoa
    switch (tipo) {
      case "coordenador":
        window.location.href = "../TelaInicial/TelaInicial.html";
        break;
      case "professor":
        window.location.href = "../SemPlanos/Sem_planos.html";
        break;
      case "aluno":
        window.location.href = "../TelaInicialAluno/TelaInicialAluno.html";
        break;
      default:
        throw new Error("Tipo de pessoa desconhecido.");
    }
  } catch (error) {
    console.error("Erro durante o login:", error);
    alert(error.message || "Erro ao realizar login. Tente novamente.");
  }
});
