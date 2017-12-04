<html>
<head>
</head>
<body>
<h1>Funções de manipulação de vetores do Javascript</h1>
<h3>O método concat </h3>

<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3);
    var vetor2 = new Array(4, 5, 6);
    var vetor3 = new Array(7, 8, 9);
    var result = vetor1.concat(vetor2, vetor3);
    document.write(result);
</script>
<br>
<h3>indexOf </h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    var indice = vetor1.indexOf(3);
    document.write(indice);
</script>

<h3>A função join  </h3>

<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    var elementos = vetor1.join(“-“);
    document.write(elementos);
</script>

<h3>lastIndexOf </h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 2, 7);
    var indice = vetor1.lastIndexOf(2);
    document.write(indice);
</script>

<h3>O método pop </h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 2, 7);
    var ultimo = vetor1.pop();
    document.write(ultimo);
</script>

<h3>O push é usado para adicionar um ou vários elementos</h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 2, 7);
    vetor1.push(9, 5);
    document.write(vetor1);
</script>

reverse
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    vetor1.reverse();
    document.write(vetor1);
</script>


<h3>shift</h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    var primeiro = vetor1.shift();
    document.write(primeiro);
</script>


<h3>slice</h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    var selecao = vetor1.slice(1, 4);
    document.write(selecao);
</script>


<h3>sort</h3>
<script type="text/javascript">
    var vetor1 = new Array(3, 2, 1, 5, 4);
    vetor1.sort();
    document.write(vetor1);
</script>


<h3>splice</h3>
<h4>Até aqui o splice é o método mais complexo apresentado, ele serve para remover e/ou adicionar items de/em um vetor. </h4>

<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    vetor1.splice(1,2);
    document.write(vetor1);
</script>

<h3>splice</h3>
deseje apenas inserir elementos em determinada posição
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    vetor1.splice(1, 0, 9, 8);
    document.write(vetor1);
</script>


<h3>remover e adicionar elementos ao mesmo tempo</h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    vetor1.splice(1,2, 9, 8);
    document.write(vetor1);
</script>


<h3>toString</h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    vetor1.unshift(-1, 0);
    document.write(vetor1);
</script>


<h3>unshift</h3>
<script type="text/javascript">
    var vetor1 = new Array(-1, 0 ,1, 2, 3, 4, 5);
    var texto = vetor1.toString();
    document.write(texto);
</script>


<h3>valueOf</h3>
<script type="text/javascript">
    var vetor1 = new Array(1, 2, 3, 4, 5);
    var texto = vetor1.valueOf();
    document.write(texto);
</script>





</body>

</html>

