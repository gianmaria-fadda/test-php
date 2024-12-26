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
        <div :class="currentColor">
            <h1>
                {{ textH1 }}
            </h1>
        </div>
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

<style>
    div {
    display: flex;
    justify-content: center;
    color: white;
    border-radius: 50px;
    margin-bottom: 10px;
    padding: 20px;
    }

    .green-color {
        background-color: green;
    }

    .red-color {
        background-color: red;
    }

    .blue-color {
        background-color: blue;
    }

</style>

<script>
    const app = Vue.createApp({
        data() {
            return {
                textH1: "Questa è una pagina di test",
                currentColorIndex: 0,
                    colors: ['green-color', 'red-color', 'blue-color']
                };
            },
            computed: {
                currentColor() {
                    return this.colors[this.currentColorIndex];
                }
            },
            mounted() {
                setInterval(() => {
                    this.currentColorIndex = (this.currentColorIndex + 1) % this.colors.length;
                }, 1000);
            }
        });

    app.mount('#app');
</script>