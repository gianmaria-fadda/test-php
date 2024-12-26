<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-php</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@3"></script>
</head>
<body>
    <div id="app">
        <h1>
            {{ textH1 }}
        </h1>
    </div>

    <form action="index.php" method="post">
        <input type="text" name="testo" placeholder="inserisci qui il testo...">
        <input type="submit">
    </form>
    <?php
        echo $_POST['testo'];
    ?>
</body>
</html>

<script>
    const app = Vue.createApp({
        data() {
            return {
                textH1: "Questa è una pagina di test"
            };
        }
    });

    app.mount('#app');
</script>

<style>
    div {

        display: flex;
        justify-content: center;
    };
</style>