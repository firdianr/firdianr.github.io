<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Slot Machine</title>
    <style>
        html, body {
            height: 100%;
        }

        .door {
            background: #fafafa;
            box-shadow: inset 0 0 3px 2px rgba(0, 0, 0, 0.4);
        }
        
        .box {
            font-size: 3rem;
        }
        
        .info {
            width: 100%;
            text-align: center;
        }

        .swal2-container {
           z-index: 9999; /* Pastikan SweetAlert2 berada di atas elemen lain */
        }

        .swal2-confirm {
            background-color: #1500ff; /* Ganti dengan warna yang diinginkan */
            color: #fff; /* Ganti warna teks tombol */
            border: none; /* Menghapus border default */
        }

            /* Atur tombol cancel jika ada */
        .swal2-cancel {
            background-color: #ff0000; /* Ganti dengan warna yang diinginkan */
            color: #fff; /* Ganti warna teks tombol */
            border: none; /* Menghapus border default */
        }
    </style>
</head>
<body class="h-full flex items-center justify-center bg-gray-900">
    <div id="app" class="text-white">
        <h1 class="text-3xl font-bold text-center mb-6 text-white">HALAMAN INI DIGUNAKAN UNTUK SIMULASI PENIPUAN JUDI ONLINE</h1>

        <div class="cards-container flex justify-center gap-16 mt-2">
            <div class="doors flex space-x-4">
                <div class="door w-24 h-36 rounded-xl overflow-hidden">
                    <div class="boxes"></div>
                </div>
                <div class="door w-24 h-36 rounded-xl overflow-hidden">
                    <div class="boxes"></div>
                </div>
                <div class="door w-24 h-36 rounded-xl overflow-hidden">
                    <div class="boxes"></div>
                </div>
            </div>
        </div>

        <div class="slot-machine bg-gray-800 text-white rounded-lg shadow-md p-3 mx-auto max-w-xs mt-2">
            <h2 id="win-label" class="text-center">Lets Start !!!</h2>
        </div>

        <div class="cards-container flex justify-center gap-16 mt-2">
            <div class="card bg-gray-800 text-white rounded-lg p-6 shadow-md w-80">
                <h2 class="text-center text-2xl font-bold mb-4 py-4">ADMIN</h2>
                <div class="admin-buttons flex justify-around">
                    <button class="button bg-blue-600 text-white px-6 py-6 text-lg rounded" id="forcewin">WIN</button>
                    <button class="button bg-red-600 text-white px-6 py-6 text-lg rounded" id="forcelose">LOSE</button>
                </div>
            </div>
        
            <div class="card bg-gray-800 text-white rounded-lg p-8 shadow-md w-80">
                <h2 class="text-center text-2xl font-bold mb-0 py-4">PENJUDI</h2>
                <div class="gambler-info mb-4">
                    <p class="text-center mb-4 text-xl">Saldo : <span id="saldo">0</span></p>
                    <input type="number" id="bet-amount" class="form-input mt-1 block w-full text-black" placeholder="Masukkan nilai taruhan" autocomplete="off">
                </div>
                <div class="gambler-buttons flex justify-around">
                    <button class="button bg-green-400 text-gray-800 px-4 py-2 rounded mt-4"  id="spinner">SPIN</button>
                    <button class="button bg-yellow-400 text-gray-800 px-4 py-2 rounded mt-4"  id="resetter">RESET</button>
                </div>
            </div>

            <div class="card bg-gray-800 text-white rounded-lg p-6 shadow-md w-80">
                <h2 class="text-center text-2xl font-bold mb-4 py-4">TOP UP</h2>
                <div class="gambler-info mb-4">
                    <input class="form-input mt-1 block w-full text-black" type="text" id="top-up" placeholder="Masukkan Jumlah Top Up" autocomplete="off">
                </div>
                <div class="gambler-buttons flex justify-around">
                    <button class="button bg-blue-600 text-white px-4 py-2 rounded mt-4" onclick="topUp()">Top Up</button>
                </div>
            </div>
        </div>

        <div class="cards-container flex justify-center gap-16 mt-0">
            <p class="info mt-4"></p>
        </div>
    </div>

    <script>
        let saldo = 0;
        document.getElementById("saldo").innerText = formatRupiah(saldo);

        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(number);
        }

        function topUp() {
            let topup = parseInt(document.getElementById("top-up").value) || 0;
            saldo += topup;
            document.getElementById("saldo").innerText = formatRupiah(saldo);

            document.getElementById("top-up").value = "";
        }

        (function () {
            "use strict";

            const items = [
                "💎",
                "❌",
                "🍓",
                "🍋",
                "🍉",
                "🍒",
                "💵",
                "🍊",
                "🍎"
            ];
            document.querySelector(".info").textContent = items.join(" ");

            const doors = document.querySelectorAll(".door");
            document.getElementById("spinner").addEventListener("click", spin);
            document.getElementById("resetter").addEventListener("click", init);

            async function spin() {
                const betAmountInput = document.querySelector("#bet-amount");
                const betAmount = parseFloat(betAmountInput.value) || 0;
                const saldoElement = document.querySelector("#saldo");
                
                // Pastikan variabel saldo dideklarasikan
                if (saldo < betAmount || saldo==0) {
                    Swal.fire({
                        title: 'Saldo Tidak Cukup',
                        text: 'Anda tidak memiliki cukup saldo untuk melakukan taruhan.',
                        icon: 'error',
                        cancelButtonText: 'OK',
                    });
                } else {
                    betAmountInput.value = '';
                    saldo -= betAmount;
                    saldoElement.textContent = formatRupiah(saldo);
                    
                    const winLabel = document.getElementById("win-label");
                    winLabel.innerText = `Bertaruh ${formatRupiah(betAmount)}`;
                    
                    init(false, 1, 2);
                    for (const door of doors) {
                        const boxes = door.querySelector(".boxes");
                        const duration = parseInt(boxes.style.transitionDuration);
                        boxes.style.transform = "translateY(0)";
                        await new Promise((resolve) => setTimeout(resolve, duration * 1000));
                    }
                    winLabel.innerText = `Anda Kalah ${formatRupiah(betAmount)} !!! Maen Lagi?`;
                    Swal.fire({
                        title: 'Yahh Anda Kalah !!!',
                        text: 'Kalah terus nih! Yakin masih mau main?',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    })
                }
            }

            function init(firstInit = true, groups = 1, duration = 1) {
                for (const door of doors) {
                    if (firstInit) {
                        door.dataset.spinned = "0";
                    } else if (door.dataset.spinned === "1") {
                        return;
                    }

                    const boxes = door.querySelector(".boxes");
                    const boxesClone = boxes.cloneNode(false);

                    const pool = ["❓"];
                    if (!firstInit) {
                        const arr = [];
                        for (let n = 0; n < (groups > 0 ? groups : 1); n++) {
                            arr.push(...items);
                        }
                        pool.push(...shuffle(arr));

                        boxesClone.addEventListener(
                            "transitionstart",
                            function () {
                                door.dataset.spinned = "1";
                                this.querySelectorAll(".box").forEach((box) => {
                                    box.style.filter = "blur(1px)";
                                });
                            },
                            { once: true }
                        );

                        boxesClone.addEventListener(
                            "transitionend",
                            function () {
                                this.querySelectorAll(".box").forEach((box, index) => {
                                    box.style.filter = "blur(0)";
                                    if (index > 0) this.removeChild(box);
                                });
                            },
                            { once: true }
                        );
                    }

                    for (let i = pool.length - 1; i >= 0; i--) {
                        const box = document.createElement("div");
                        box.classList.add("box", "flex", "justify-center", "items-center");
                        box.style.width = door.clientWidth + "px";
                        box.style.height = door.clientHeight + "px";
                        box.textContent = pool[i];
                        boxesClone.appendChild(box);
                    }
                    boxesClone.style.transitionDuration = `${duration > 0 ? duration : 1}s`;
                    boxesClone.style.transform = `translateY(-${
                        door.clientHeight * (pool.length - 1)
                    }px)`;
                    door.replaceChild(boxesClone, boxes);
                }
            }

            function shuffle([...arr]) {
                let m = arr.length;
                while (m) {
                    const i = Math.floor(Math.random() * m--);
                    [arr[m], arr[i]] = [arr[i], arr[m]];
                }
                return arr;
            }

            init();
        })();

        (function () {
            "use strict";

            const items = [
                "💎",
                "❌",
                "🍓",
                "🍋",
                "🍉",
                "🍒",
                "💵",
                "🍊",
                "🍎"
            ];
            document.querySelector(".info").textContent = items.join(" ");

            const doors = document.querySelectorAll(".door");
            // document.querySelector("#forcewin").addEventListener("click", () => spin(["💎", "💎", "💎"]));
            document.querySelector("#forcewin").addEventListener("click", () => forceWin());
            // document.querySelector("#forcelose").addEventListener("click", () => spin(["🍓", "🍋", "💵"]));
            document.querySelector("#forcelose").addEventListener("click", () => forceLose());

            function forceWin() {
                const randomIndex = Math.floor(Math.random() * items.length);
                const winResult = [items[randomIndex], items[randomIndex], items[randomIndex]];
                spin(winResult);
            }

            function forceLose() {
                const randomIndex = Math.floor(Math.random() * (items.length - 2)); // Make sure there's space for i+2
                const loseResult = [items[randomIndex], items[randomIndex + 1], items[randomIndex + 2]];
                spin(loseResult);
            }

            async function spin(results) {
                const betAmountInput = document.querySelector("#bet-amount");
                const betAmount = parseFloat(betAmountInput.value) || 0;
                const saldoElement = document.querySelector("#saldo");
                
                if (saldo < betAmount || saldo==0) {
                    Swal.fire({
                        title: 'Saldo Tidak Cukup',
                        text: 'Anda tidak memiliki cukup saldo untuk melakukan taruhan.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                } else {
                    betAmountInput.value = '';
                    saldo -= betAmount;
                    saldoElement.textContent = formatRupiah(saldo);
                    
                    const winLabel = document.getElementById("win-label");
                    winLabel.innerText = `Bertaruh ${formatRupiah(betAmount)}`;
                    
                    init(false, 1, 2, results);
                    for (const door of doors) {
                        const boxes = door.querySelector(".boxes");
                        const duration = parseInt(boxes.style.transitionDuration);
                        boxes.style.transform = "translateY(0)";
                        await new Promise((resolve) => setTimeout(resolve, duration * 1000));
                    }

                    if (results[0] == results[1] && results[1] == results[2]) {
                        const winAmount = betAmount * 10; // Menang 10 kali lipat dari taruhan
                        saldo += winAmount;
                        saldoElement.textContent = formatRupiah(saldo);
                        winLabel.innerText = `Selamat! Anda Menang ${formatRupiah(winAmount)} !!!    Maen Lagi?`;
                        Swal.fire({
                            title: 'Selamat Anda Menang !!!',
                            text: `Selamat! Anda Menang ${formatRupiah(winAmount)} !!!    Maen Lagi?`,
                            icon: 'success',
                            confirmButtonText: 'OK',
                        });
                    } else {
                        winLabel.innerText = `Anda Kalah ${formatRupiah(betAmount)} !!!    Maen Lagi?`;
                        Swal.fire({
                            title: 'Yahh Anda Kalah !!!',
                            text: 'Kalah terus nih! Yakin masih mau main?',
                            icon: 'error',
                            confirmButtonText: 'OK',
                        })
                    }
                }
            }

            function init(firstInit = true, groups = 1, duration = 1, results = []) {
                for (const door of doors) {
                    if (firstInit) {
                        door.dataset.spinned = "0";
                    } else if (door.dataset.spinned === "1") {
                        return;
                    }

                    const boxes = door.querySelector(".boxes");
                    const boxesClone = boxes.cloneNode(false);

                    const pool = ["❓"];
                    if (!firstInit) {
                        const arr = [];
                        for (let n = 0; n < (groups > 0 ? groups : 1); n++) {
                            arr.push(...items);
                        }
                        pool.push(...shuffle(arr));

                        boxesClone.addEventListener(
                            "transitionstart",
                            function () {
                                door.dataset.spinned = "1";
                                this.querySelectorAll(".box").forEach((box) => {
                                    box.style.filter = "blur(1px)";
                                });
                            },
                            { once: true }
                        );

                        boxesClone.addEventListener(
                            "transitionend",
                            function () {
                                this.querySelectorAll(".box").forEach((box, index) => {
                                    box.style.filter = "blur(0)";
                                    if (index > 0) this.removeChild(box);
                                });
                            },
                            { once: true }
                        );
                    }

                    if (results.length > 0 && results.length === doors.length) {
                        pool.push(results[Array.from(doors).indexOf(door)]);
                    }

                    for (let i = pool.length - 1; i >= 0; i--) {
                        const box = document.createElement("div");
                        box.classList.add("box", "flex", "justify-center", "items-center");
                        box.style.width = door.clientWidth + "px";
                        box.style.height = door.clientHeight + "px";
                        box.textContent = pool[i];
                        boxesClone.appendChild(box);
                    }
                    boxesClone.style.transitionDuration = `${duration > 0 ? duration : 1}s`;
                    boxesClone.style.transform = `translateY(-${
                        door.clientHeight * (pool.length - 1)
                    }px)`;
                    door.replaceChild(boxesClone, boxes);
                }
            }

            function shuffle([...arr]) {
                let m = arr.length;
                while (m) {
                    const i = Math.floor(Math.random() * m--);
                    [arr[m], arr[i]] = [arr[i], arr[m]];
                }
                return arr;
            }

            init();
        })();

    </script>
</body>
</html>
