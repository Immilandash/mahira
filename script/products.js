const buttonProRight = document.getElementById('proslideRight');
const buttonProLeft = document.getElementById('proslideLeft');

        buttonProRight.onclick = function () {
            document.getElementById('products').scrollLeft += 300;
        };
        buttonProLeft.onclick = function () {
             document.getElementById('products').scrollLeft -= 300;
            };
