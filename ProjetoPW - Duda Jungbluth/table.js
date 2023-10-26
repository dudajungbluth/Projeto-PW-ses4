
let tabeladiv = document.querySelector('.tabelaprodutos')

// CHAMAR ESSA FUNÇÃO NO CADASTRO JS PARA ATUALIZAR A TABELA 
let data = await fetch('tabelaprodutos.php').then(res => res.json().then(data => {

    console.log(data);    
}));

data.forEach(p => {
    const tr = document.createElement('tr');

    tr.innerHTML = `
    <td>${ p.nome }</td>
    <td>${ p.preco }</td>    
`;
const deletbutton = document.createElement('td');
deletbutton.innerHTML = 'remover'
deletbutton.addEventListener('click', async() => {
    fetch(`deleta-produtos.php?id=${p.id}`);
})
tr.appendChild(deletbutton);
tabeladiv.appendChild(tr);

});