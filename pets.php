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
        let elemento = document.querySelector('#invocacoes')
        elemento.innerHTML = ''
        for (let i = 0; i < qtd; i++) {
            let div = document.createElement('div');
            let img = document.createElement('img');
            let pet = gerarAleatorio()
            let nomePet = pet.pet
            let grau = pet.grau
            let petImg = pet.img
            img.src = petImg
            let h5 = document.createElement('h5');
            h5.innerHTML = nomePet;
            let p = document.createElement('p');
            p.innerHTML = grau
            if(grau == 'requintado'){
                p.style.color = 'green'
            }else if(grau == 'raro'){
                p.style.color = 'blue'
            }else if(grau == 'heroico'){
                p.style.color = 'red'
            }
            div.appendChild(img)
            div.appendChild(h5);
            div.appendChild(p)
            elemento.appendChild(div)
        }

    }

    function gerarAleatorio() {
        const numero = Math.random() * 100;
        let pet = ''
        if (numero <= 97) {
            grau = 'requintado'
            let chance = 100 / 12;
            const valor = Math.random() * 100;
            if (valor <= 1 * chance) {
                pet = 'Muumuu, o Mestre dos Touros'
                img = './images/muumuu.png'
            } else if (valor <= 2 * chance) {
                pet = 'Iluminacão, o Mestre da Lanterna'
                img = './images/iluminacao.png'
            } else if (valor <= 3 * chance) {
                pet = 'Corojel, o Deus Guerreiro'
                img = './images/corojel.png'
            } else if (valor <= 4 * chance) {
                pet = 'Popotamus, o Feiticeiro Hipopótamo'
                img = './images/popotamus.png'
            } else if (valor <= 5 * chance) {
                pet = 'Brutus, o Senhor dos Oceanos'
                img = './images/brutus.png'
            } else if (valor <= 6 * chance) {
                pet = 'Saltita, o Guru Coelho'
                img = './images/saltita.png'
            } else if (valor <= 7 * chance) {
                pet = 'Besouraleiro Carapaça'
                img = './images/besouraleiro.png'
            } else if (valor <= 8 * chance) {
                pet = 'Cãomandante, o Chefe Canino'
                img = './images/caomandante.png'
            } else if (valor <= 9 * chance) {
                pet = 'Grande Sábio Símio, o Rei Macaco'
                img = './images/macaco.png'
            } else if (valor <= 10 * chance) {
                pet = 'Chacha, o Mestre do Disfarce'
                img = './images/chacha.png'
            } else if (valor <= 11 * chance) {
                pet = 'Meditogato, o Gato Celestial'
                img = './images/meditogato.png'
            } else if (valor <= 12 * chance) {
                pet = 'Mosla, a Serpente Obscura'
                img = './images/mosla.png'
            }
        } else if (numero > 97 && numero <= 99.9) {
            grau = 'raro'
            let chance = 100 / 13;
            const valor = Math.random() * 100;
            if (valor <= 1 * chance) {
                pet = 'Dragustar, o Morcego Vampírico'
                img = './images/dragustar.png'
            } else if (valor <= 2 * chance) {
                pet = 'Horyong, Pequeno Dragão azul-celeste'
                img = './images/horyong.png'
            } else if (valor <= 3 * chance) {
                pet = 'Akka Serenidade'
                img = './images/akka.png'
            } else if (valor <= 4 * chance) {
                pet = 'Lamparino, o Mensageiro da Alma'
                img = './images/lamparino.png'
            } else if (valor <= 5 * chance) {
                pet = 'Florida, o Anjo Verdejante'
                img = './images/florida.png'
            } else if (valor <= 6 * chance) {
                pet = 'Raposa de Três Caudas da Neve'
                img = './images/raposa.png'
            } else if (valor <= 7 * chance) {
                pet = 'Tougon, o Monge Violento'
                img = './images/touro.png'
            } else if (valor <= 8 * chance) {
                pet = 'Oroonki, Esqueleto Coração de Leão'
                img = './images/oronki.png'
            } else if (valor <= 9 * chance) {
                pet = 'Doggo, o Lobo Vermelho'
                img = './images/doggo.png'
            } else if (valor <= 10 * chance) {
                pet = 'Cavalo Marinho da Investida Selvagem'
                img = './images/cavalomarinho.png'
            } else if (valor <= 11 * chance) {
                pet = 'Ringring, o Verdilhão'
                img = './images/ringring.png'
            } else if (valor <= 12 * chance) {
                pet = 'Porquínio Grunhista'
                img = './images/porquinho.png'
            }
        } else if (numero > 99.9) {
            grau = 'heroico'
            const porc = Math.random() * 100
            const valor = Math.random() * 100;
            if (porc <= 33.36) {
                const chance = 100 / 4;
                if (valor <= 1 * chance) {
                    pet = 'Suparna, o Pássaro Dourado'
                    img = './images/suparna.png'
                } else if (valor <= 2 * chance) {
                    pet = 'Faísca, a Gema Brilhante'
                    img = './images/faisca.png'
                } else if (valor <= 3 * chance) {
                    pet = 'Chifre Flamejante, o Diabo de Fogo'
                    img = './images/chifre.png'
                } else if (valor <= 4 * chance) {
                    pet = 'Anjo da Morte, o Ceifeiro de Almas'
                    img = './images/ceifeiro.png'
                }
            } else {
                const chance = 100 / 8;
                if (valor <= 1 * chance) {
                    pet = 'Rei Leão Khun'
                    img = './images/khun.png'
                } else if (valor <= 2 * chance) {
                    pet = 'Biyoho, Chama Nascida do Inferno'
                    img = './images/biyoho.png'
                } else if (valor <= 3 * chance) {
                    pet = 'Baleiana, a Beleza Absoluta'
                    img = './images/baleiana.png'
                } else if (valor <= 4 * chance) {
                    pet = 'Cristalidro, o Pavão Branco'
                    img = './images/pavao.png'
                } else if (valor <= 5 * chance) {
                    pet = 'Sortitude, o Gato Sortudo'
                    img = './images/sortitude.png'
                } else if (valor <= 6 * chance) {
                    pet = 'Shaoshao, o Maníaco das Pedras Preciosas'
                    img = './images/shaoshao.png'
                } else if (valor <= 7 * chance) {
                    pet = 'Nianja Assassino'
                    img = './images/nianja.png'
                } else if (valor <= 8 * chance) {
                    pet = 'Baratan, a Besta Relâmpago'
                    img = './images/baratan.png'
                }
            }

        }
        return {
            grau: grau,
            pet: pet,
            img: img
        };
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