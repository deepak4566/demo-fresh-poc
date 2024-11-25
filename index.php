<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*, *::before, *::after {
  padding: 0;
  margin: 0 auto;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  display: grid;
  place-items: center;
  perspective: 600px;
  overflow: hidden;
  background-image: radial-gradient(circle, #123, #000 30em);
}
body *:not(:empty) {
  transform-style: preserve-3d;
}

.scene {
  position: relative;
}

.ball {
  position: absolute;
  inset: -8em;
  background-image: radial-gradient(circle at top, #fff, #000);
  border-radius: 50%;
  box-shadow: 0 0 2em #000a;
}

.ring {
  position: absolute;
}
.ring i {
  position: absolute;
  border: 1px solid hsl(var(--hue), 100%, 75%);
  box-shadow: 0 0 1em hsl(var(--hue), 100%, 75%) inset, 0 0 1em hsl(var(--hue), 100%, 75%);
  border-radius: 50%;
  -webkit-animation: iMove 24s var(--delay) infinite both linear, iScale 24s var(--delay) infinite both cubic-bezier(0.3642, 0, 0.6358, 1);
          animation: iMove 24s var(--delay) infinite both linear, iScale 24s var(--delay) infinite both cubic-bezier(0.3642, 0, 0.6358, 1);
}
.ring i:nth-child(1) {
  --delay: 0s;
  --hue: 0;
  --rx: 112deg;
  --ry: 218deg;
  --rz: 33deg;
}
.ring i:nth-child(2) {
  --delay: -0.75s;
  --hue: 98;
  --rx: 11deg;
  --ry: 159deg;
  --rz: 64deg;
}
.ring i:nth-child(3) {
  --delay: -1.5s;
  --hue: 196;
  --rx: 12deg;
  --ry: 234deg;
  --rz: 16deg;
}
.ring i:nth-child(4) {
  --delay: -2.25s;
  --hue: 294;
  --rx: 5deg;
  --ry: 3deg;
  --rz: 25deg;
}
.ring i:nth-child(5) {
  --delay: -3s;
  --hue: 392;
  --rx: 99deg;
  --ry: 40deg;
  --rz: 43deg;
}
.ring i:nth-child(6) {
  --delay: -3.75s;
  --hue: 490;
  --rx: 231deg;
  --ry: 152deg;
  --rz: 224deg;
}
.ring i:nth-child(7) {
  --delay: -4.5s;
  --hue: 588;
  --rx: 185deg;
  --ry: 307deg;
  --rz: 188deg;
}
.ring i:nth-child(8) {
  --delay: -5.25s;
  --hue: 686;
  --rx: 125deg;
  --ry: 355deg;
  --rz: 41deg;
}
.ring i:nth-child(9) {
  --delay: -6s;
  --hue: 784;
  --rx: 260deg;
  --ry: 147deg;
  --rz: 324deg;
}
.ring i:nth-child(10) {
  --delay: -6.75s;
  --hue: 882;
  --rx: 219deg;
  --ry: 181deg;
  --rz: 223deg;
}
.ring i:nth-child(11) {
  --delay: -7.5s;
  --hue: 980;
  --rx: 159deg;
  --ry: 19deg;
  --rz: 207deg;
}
.ring i:nth-child(12) {
  --delay: -8.25s;
  --hue: 1078;
  --rx: 74deg;
  --ry: 46deg;
  --rz: 39deg;
}
.ring i:nth-child(13) {
  --delay: -9s;
  --hue: 1176;
  --rx: 224deg;
  --ry: 77deg;
  --rz: 276deg;
}
.ring i:nth-child(14) {
  --delay: -9.75s;
  --hue: 1274;
  --rx: 9deg;
  --ry: 5deg;
  --rz: 187deg;
}
.ring i:nth-child(15) {
  --delay: -10.5s;
  --hue: 1372;
  --rx: 234deg;
  --ry: 244deg;
  --rz: 292deg;
}
.ring i:nth-child(16) {
  --delay: -11.25s;
  --hue: 1470;
  --rx: 356deg;
  --ry: 352deg;
  --rz: 129deg;
}
.ring i:nth-child(17) {
  --delay: -12s;
  --hue: 1568;
  --rx: 261deg;
  --ry: 285deg;
  --rz: 163deg;
}
.ring i:nth-child(18) {
  --delay: -12.75s;
  --hue: 1666;
  --rx: 228deg;
  --ry: 186deg;
  --rz: 120deg;
}
.ring i:nth-child(19) {
  --delay: -13.5s;
  --hue: 1764;
  --rx: 185deg;
  --ry: 155deg;
  --rz: 348deg;
}
.ring i:nth-child(20) {
  --delay: -14.25s;
  --hue: 1862;
  --rx: 110deg;
  --ry: 347deg;
  --rz: 140deg;
}
.ring i:nth-child(21) {
  --delay: -15s;
  --hue: 1960;
  --rx: 56deg;
  --ry: 297deg;
  --rz: 26deg;
}
.ring i:nth-child(22) {
  --delay: -15.75s;
  --hue: 2058;
  --rx: 157deg;
  --ry: 331deg;
  --rz: 309deg;
}
.ring i:nth-child(23) {
  --delay: -16.5s;
  --hue: 2156;
  --rx: 209deg;
  --ry: 117deg;
  --rz: 112deg;
}
.ring i:nth-child(24) {
  --delay: -17.25s;
  --hue: 2254;
  --rx: 253deg;
  --ry: 168deg;
  --rz: 310deg;
}
.ring i:nth-child(25) {
  --delay: -18s;
  --hue: 2352;
  --rx: 231deg;
  --ry: 12deg;
  --rz: 34deg;
}
.ring i:nth-child(26) {
  --delay: -18.75s;
  --hue: 2450;
  --rx: 206deg;
  --ry: 73deg;
  --rz: 217deg;
}
.ring i:nth-child(27) {
  --delay: -19.5s;
  --hue: 2548;
  --rx: 182deg;
  --ry: 320deg;
  --rz: 206deg;
}
.ring i:nth-child(28) {
  --delay: -20.25s;
  --hue: 2646;
  --rx: 304deg;
  --ry: 184deg;
  --rz: 185deg;
}
.ring i:nth-child(29) {
  --delay: -21s;
  --hue: 2744;
  --rx: 125deg;
  --ry: 145deg;
  --rz: 356deg;
}
.ring i:nth-child(30) {
  --delay: -21.75s;
  --hue: 2842;
  --rx: 279deg;
  --ry: 134deg;
  --rz: 73deg;
}
.ring i:nth-child(31) {
  --delay: -22.5s;
  --hue: 2940;
  --rx: 266deg;
  --ry: 124deg;
  --rz: 298deg;
}
.ring i:nth-child(32) {
  --delay: -23.25s;
  --hue: 3038;
  --rx: 242deg;
  --ry: 299deg;
  --rz: 1deg;
}

@-webkit-keyframes iMove {
  0% {
    transform: rotateZ(var(--rz)) rotateY(var(--ry)) rotateX(var(--rx)) translateZ(50em);
  }
  100% {
    transform: rotateZ(var(--rz)) rotateY(var(--ry)) rotateX(var(--rx)) translateZ(-50em);
  }
}

@keyframes iMove {
  0% {
    transform: rotateZ(var(--rz)) rotateY(var(--ry)) rotateX(var(--rx)) translateZ(50em);
  }
  100% {
    transform: rotateZ(var(--rz)) rotateY(var(--ry)) rotateX(var(--rx)) translateZ(-50em);
  }
}
@-webkit-keyframes iScale {
  0%, 100% {
    inset: -1em;
    opacity: 0;
  }
  35%, 65% {
    inset: -1em;
    opacity: 1;
  }
  50% {
    inset: -10em;
    opacity: 1;
  }
}
@keyframes iScale {
  0%, 100% {
    inset: -1em;
    opacity: 0;
  }
  35%, 65% {
    inset: -1em;
    opacity: 1;
  }
  50% {
    inset: -10em;
    opacity: 1;
  }
}
        </style>
</head>
<body>
<div class="scene">
  <div class="ball"></div>
  <div class="ring">
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
  </div> 
</div>

</body>
</html>