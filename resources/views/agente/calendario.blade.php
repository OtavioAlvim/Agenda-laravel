@extends('layouts.main')

@section('title', 'Calendario')

@section('description', 'Calendario')

@section('content')

<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="table-dark">Domingo</th>
          <th scope="col" class="table-dark">Segunda</th>
          <th scope="col" class="table-dark">Terça</th>
          <th scope="col" class="table-dark">Quarta</th>
          <th scope="col" class="table-dark">Quinta</th>
          <th scope="col" class="table-dark">Sexta</th>
          <th scope="col" class="table-dark">Sabado</th>
        </tr>
      </thead>
      <tbody>
<?php
$nome = date('M');
$ano = date('Y');
$mes = date('m');
// Configurar o timezone para o Brasil
date_default_timezone_set('America/Sao_Paulo');

// Obter o primeiro dia do mês
$primeiroDia = strtotime("{$ano}-{$mes}-01");
$primeiroDiaSemana = date('w', $primeiroDia);

// Obter o número total de dias no mês
$totalDias = date('t', $primeiroDia);

// Variável para controlar o dia atual
$diaAtual = 1;

// Loop para criar as linhas do calendário
for ($linha = 1; $linha <= 6; $linha++) {
echo '<tr>';

// Loop para criar as células do calendário
for ($coluna = 0; $coluna < 7; $coluna++) {
    echo '<td class="table-secondary text-center p-4" ';

    // Verificar se o dia atual é válido
    if (($linha == 1 && $coluna >= $primeiroDiaSemana) || ($linha > 1 && $diaAtual <= $totalDias)) {
        echo '';
        echo '>';
        ?>
        <strong><a href="#"><?php echo $diaAtual ?></a></strong>
        <?php
        $diaAtual++;
    }

    echo '</td>';
}

echo '</tr>';

// Verificar se todos os dias foram exibidos
if ($diaAtual > $totalDias) {
    break;
}
}

// Fim do HTML
echo '</tbody>';
echo '</table>';
echo '</div>';
?>

@endsection