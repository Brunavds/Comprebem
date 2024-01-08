
    <!-- Formulario de Pagamento -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Processar os dados do formulário
        $metodoPagamento = $_POST['metodo_pagamento'];

        if ($metodoPagamento == 'dinheiro') {
            // Processar pagamento em dinheiro
            echo "Pagamento em dinheiro recebido.";
        } elseif ($metodoPagamento == 'cartao_credito') {
            // Processar pagamento com cartão de crédito
            $parcelas = $_POST['parcelas'];
            echo "Pagamento com cartão de crédito em $parcelas parcelas recebido.";
        } elseif ($metodoPagamento == 'debito') {
            // Processar pagamento com cartão de débito
            echo "Pagamento com cartão de débito recebido.";
        } elseif ($metodoPagamento == 'pix') {
            // Processar pagamento com pix
            echo "Pagamento com pix recebido.";
        } else {
            echo "Método de pagamento inválido.";
        }
    }
    ?>

<h2 class="row text-center" style="margin-top: 15px;">Formulário de Pagamento</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="row text-center" style="margin-top: 15px;">
    <label for="metodo_pagamento">Escolha o método de pagamento:</label>
    <select name="metodo_pagamento" id="metodo_pagamento" class="btn btn-lg btn-primary">
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao_credito">Cartão de Crédito</option>
        <option value="debito">Cartão de Débito</option>
        <option value="Pix">Pix</option>
    </select>

    <br>

    <div id="parcelas" style="display:none;">
        <label for="parcelas">Número de Parcelas sem juros:</label>
        <select name="parcelas" id="parcelas_select" class="btn btn-lg btn-primary">
            <?php
                for ($i = 1; $i <= 50; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
        </select>
    </div>

    <script>
    // Exibir/ocultar o campo de parcelas com base no método de pagamento selecionado
    document.getElementById('metodo_pagamento').addEventListener('change', function () {
        var parcelasDiv = document.getElementById('parcelas');
        var metodoPagamento = this.value;

        if (metodoPagamento === 'cartao_credito') {
            parcelasDiv.style.display = 'block';
        } else {
            parcelasDiv.style.display = 'none';
        }
    });
    </script>