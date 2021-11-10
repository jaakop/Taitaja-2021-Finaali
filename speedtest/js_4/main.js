// Your code here
let array = [];
for(let i; i < Math.random() * 100; i++) {
    array.push(Math.random() * (100 - -100) + -100);
}
let result;
array.map(n => {
    if(n > 0)
    result += n;
})
console.log(result);