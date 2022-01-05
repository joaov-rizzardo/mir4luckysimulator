<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mir4 Lucky Simulator</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<script>
    function invocaPet(qtd) {
        let elemento =  document.querySelector('#invocacoes')
        elemento.innerHTML = ''
        for (let i = 0; i < qtd; i++) {
            let div = document.createElement('div');
            let img = document.createElement('img');
            img.src = './images/teste.png'
            let h5 = document.createElement('h5');
            h5.innerHTML = 'Raposa de Três Caudas da Neve';
            div.appendChild(img)
            div.appendChild(h5);
            elemento.appendChild(div)
        }

    }
</script>

<body>
    <nav>
        <h1>Mir4 Lucky Simulator</h1>
    </nav>

    <main>
        <h3>Invocação de pets</h3>
        <section id="buttons">
            <button onclick="invocaPet(1)" class="btn btn-dark">Invocar 1 pet</button>
            <button onclick="invocaPet(11)" class="btn btn-dark">Invocar 11 pets</button>
        </section>

        <section id="invocacoes">

        </section>
    </main>
</body>

</html>