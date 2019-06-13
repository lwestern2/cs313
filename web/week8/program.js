//Hello world
// console.log("HELLO WORLD");

//baby steps
// let sum = 0;
// for(let i = 2; i < process.argv.length; i++) {
//     const add = +process.argv[i];
//     sum += add;
// }
// console.log(sum);

//instead of the for loop, use a forEach
// process.argv.forEach(
//     (argument, index) => {
//         if(index >=2) {
//             sum += +argument;
//         }
//     });

//My First I/O
// let fs = require('fs');
// let buf = fs.readFileSync(process.argv[2]);
// let str = buf.toString();
// let count = str.split('\n').length-1;
// console.log(count);

//My first Async I/O
// let fs = require('fs');
// let count = 0;

// function countFun (callback) {
// fs.readFile(process.argv[2], 
//  (err, fileContents) => {
//     let str = fileContents.toString();
//     count = str.split('\n').length-1;
//     callback();
// });
// }

// function logCount() {
//     console.log(count);
// }

// countFun(logCount);


