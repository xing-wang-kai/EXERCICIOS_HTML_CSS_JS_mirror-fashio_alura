var $input_quantidade = document.querySelector("#qtd");
var $output_total = document.querySelector("#total");

function TrocaPreco() {
  var preco = document.querySelector("#preco").textContent;

  preco = preco.replace("R$ ", "");
  preco = preco.replace(",", ".");

  preco = parseFloat(preco);

  var quantidade = $input_quantidade.value;
  var total = quantidade * preco;
//  total = "R$ " + total.toFixed(2)
//  total = total.replace(".", ",");
  total = total.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});

  $output_total.value = total;
}
$input_quantidade.oninput = TrocaPreco;
