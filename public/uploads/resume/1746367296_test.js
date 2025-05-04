console.info()
console.log()
console.warn()
console.error()
console.count()

function add(...rest){
// console.info(rest);
let final = 0;
rest.forEach((number)=>{
final += number;
})
console.log(final)
}

add(1,2,3,4,5,6,3)

function test(){
    
}
function test(parm1){

}
function test(parm1 , parm2){

}